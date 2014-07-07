<?php
    /**
     * @class  boardModel
     * @author NHN (developers@xpressengine.com)
     * @brief  board module  Model class
     **/

    class boardModel extends module {
        /**
         * @brief initialization
         **/
        function init() {
        }

        /**
         * @brief get the list configuration
         **/
        function getListConfig($module_srl) {
            $oModuleModel = &getModel('module');
            $oDocumentModel = &getModel('document');

            // get the list config value, if it is not exitsted then setup the default value
            $list_config = $oModuleModel->getModulePartConfig('board', $module_srl);
            if(!$list_config || !count($list_config)) $list_config = array( 'no', 'title', 'nick_name','regdate','readed_count');

            // get the extra variables
            $inserted_extra_vars = $oDocumentModel->getExtraKeys($module_srl);

            foreach($list_config as $key) {
                if(preg_match('/^([0-9]+)$/',$key))
				{
					if($inserted_extra_vars[$key])
					{
						$output['extra_vars'.$key] = $inserted_extra_vars[$key];
					}
					else
					{
						continue;
					}
				}
                else $output[$key] = new ExtraItem($module_srl, -1, Context::getLang($key), $key, 'N', 'N', 'N', null);
            }
            return $output;
        }

        /**
         * @brief return the default list configration value
         **/
        function getDefaultListConfig($module_srl) {
            // add virtual srl, title, registered date, update date, nickname, ID, name, readed count, voted count etc.
            $virtual_vars = array( 'no', 'title', 'regdate', 'last_update', 'last_post', 'nick_name',
					'user_id', 'user_name', 'readed_count', 'voted_count', 'blamed_count', 'thumbnail', 'summary', 'comment_status');
            foreach($virtual_vars as $key) {
                $extra_vars[$key] = new ExtraItem($module_srl, -1, Context::getLang($key), $key, 'N', 'N', 'N', null);
            }

            // get the extra variables from the document model
            $oDocumentModel = &getModel('document');
            $inserted_extra_vars = $oDocumentModel->getExtraKeys($module_srl);

            if(count($inserted_extra_vars)) foreach($inserted_extra_vars as $obj) $extra_vars['extra_vars'.$obj->idx] = $obj;

            return $extra_vars;

        }

        /**
         * @brief return module name in sitemap
         **/
		function triggerModuleListInSitemap(&$obj)
		{
			array_push($obj, 'board');
		}
        
        /**
         * @brief   카테고리 리스트 가져오기
         */
        function getSectionsByModuleInfo($module_info) {
            // mid를 이용헤 현재 모듈의 부모 모듈의 메뉴시리얼을 구한다
            $args1->url = $module_info->mid;
            $output1 = executeQuery("menu.getMenuItemByUrl", $args1);
            // 부모 모듈(MNB Class)의 메뉴시리얼을 이용해 형제 모듈들(LNB Class)의 정보를 얻는다.
            $args2->parent_srl = $output1->data->parent_srl;
            $args2->menu_srl = 66;
            $output2 = executeQueryArray("menu.getMenuItems", $args2);
            $sections = array();
            if($output2->toBool()){
                // $sections에 각 모듈의 메뉴이름과 하위 카테고리 정보를 담는다
                foreach($output2->data as $key=>$val) {
                    // 해당 모듈의 카테고리 리스트를 불러오기 위해 모듈 시리얼이 필요함. url(mid와 동일)로 module_srl을 우선 찾는다.
                    $args3->menu_item_srl = $val->menu_item_srl;
                    $output3 = executeQuery('module.getModuleInfoByMenuItemSrl', $args3);
                    $args4->module_srl = $output3->data->module_srl;
                    $categories = $this->getCategoriesByModuleInfo($args4);
                    $sections[$key] = new stdClass();
                    
                    $sections[$key]->name = $val->name;
                    $sections[$key]->mid = $val->url;
                    
                    $oModuleModel = &getModel('module');
                    $mid_list = $oModuleModel->getModuleSrlByMid($val->url);
                    $sections[$key]->module_srl = $mid_list[0];
                    $sections[$key]->categories = $categories;

                }
                return $sections;
            }
            else return false;
        }

        /*
         * @brief parent_srl(GNB Class)을 통해(Lounge) 하위 전체 섹션리스트를 불러오는 메소드
         */
        function getSectionsByParentSrl($parent_srl) {
            // parent_srl은 Lounge의 메뉴 시리얼
            $args1->parent_srl = $parent_srl;
            $args1->menu_srl = 66;
            $output1 = executeQueryArray("menu.getMenuItems", $args1);
            $output_final = array();
            // MNB 메뉴마다 LNB 메뉴를 가져온다
            foreach($output1->data as $MNB_menu) {
                if($MNB_menu->name=='홈') continue;
                
                $args4->parent_srl = $MNB_menu->menu_item_srl;
                $args4->menu_srl = 66;
                $output4 = executeQueryArray("menu.getMenuItems", $args4);
                $MNB_sections = new stdClass();
                $MNB_sections->name = $MNB_menu->name;
                $MNB_sections->LNB = array();
                // LNB 메뉴마다 카테고리 리스트를 불러와 저장한다
                //print_r();
                foreach($output4->data as $key=>$LNB_menu) {
                    // LNB 메뉴의 module_srl을 구한다
                    $args2->menu_item_srl = $LNB_menu->menu_item_srl;
                    $output2 = executeQuery("module.getModuleInfoByMenuItemSrl", $args2);
                    $args3->module_srl = $output2->data->module_srl;
                    // 해당 module_srl의 카테고리 리스트를 불러온다
                    $categories = $this->getCategoriesByModuleInfo($args3);
                    $LNB_sections = new stdClass();
                    $LNB_sections->name = $LNB_menu->name;
                    $LNB_sections->mid = $LNB_menu->url;
                    
                    $oModuleModel = &getModel('module');
                    $mid_list = $oModuleModel->getModuleSrlByMid($LNB_menu->url);
                    $LNB_sections->module_srl = $mid_list[0];
                    $LNB_sections->categories = $categories;
                    array_push($MNB_sections->LNB, $LNB_sections);
                }
            array_push($output_final, $MNB_sections);
            }
            return $output_final;
        }
        
        function getCategoriesByModuleInfo($module_info) {
            $args->module_srl = $module_info->module_srl;
            $output = executeQueryArray("document.getCategoryList", $args);
            return $output->data;
        }
    }
?>
