<?php define('__XE__', true); require_once('C:/Dev/GitHub/DORIA_DEV/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="110" parent_srl="0" menu_name_key='HOME' text="<?php if(true) { $_names = array("en"=>'HOME',"ko"=>'HOME',"jp"=>'HOME',"zh-CN"=>'HOME',"zh-TW"=>'HOME',"fr"=>'HOME',"de"=>'HOME',"ru"=>'HOME',"es"=>'HOME',"tr"=>'HOME',"vi"=>'HOME',"mn"=>'HOME',); print $_names[$lang_type]; }?>" url="<?php print(true?"home":"")?>" href="<?php print(true?getSiteUrl('', '','mid','home'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="147" parent_srl="0" menu_name_key='대학' text="<?php if(true) { $_names = array("en"=>'HOME',"ko"=>'HOME',"jp"=>'HOME',"zh-CN"=>'HOME',"zh-TW"=>'HOME',"fr"=>'HOME',"de"=>'HOME',"ru"=>'HOME',"es"=>'HOME',"tr"=>'HOME',"vi"=>'HOME',"mn"=>'HOME',"en"=>'대학',"ko"=>'대학',"jp"=>'대학',"zh-CN"=>'대학',"zh-TW"=>'대학',"fr"=>'대학',"de"=>'대학',"ru"=>'대학',"es"=>'대학',"tr"=>'대학',"vi"=>'대학',"mn"=>'대학',); print $_names[$lang_type]; }?>" url="<?php print(true?"university":"")?>" href="<?php print(true?getSiteUrl('', '','mid','university'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="153" parent_srl="147" menu_name_key='서울대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"snu":"")?>" href="<?php print(true?getSiteUrl('', '','mid','snu'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="224" parent_srl="147" menu_name_key='고려대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"korea":"")?>" href="<?php print(true?getSiteUrl('', '','mid','korea'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="226" parent_srl="147" menu_name_key='연세대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"yonsei":"")?>" href="<?php print(true?getSiteUrl('', '','mid','yonsei'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="228" parent_srl="147" menu_name_key='서강대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"sogang":"")?>" href="<?php print(true?getSiteUrl('', '','mid','sogang'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="230" parent_srl="147" menu_name_key='성균관대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"skku":"")?>" href="<?php print(true?getSiteUrl('', '','mid','skku'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="232" parent_srl="147" menu_name_key='한양대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"hanyang":"")?>" href="<?php print(true?getSiteUrl('', '','mid','hanyang'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="234" parent_srl="147" menu_name_key='중앙대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"cau":"")?>" href="<?php print(true?getSiteUrl('', '','mid','cau'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="236" parent_srl="147" menu_name_key='경희대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"khu":"")?>" href="<?php print(true?getSiteUrl('', '','mid','khu'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="238" parent_srl="147" menu_name_key='한국외국어대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',"en"=>'한국외국어대학교',"ko"=>'한국외국어대학교',"jp"=>'한국외국어대학교',"zh-CN"=>'한국외국어대학교',"zh-TW"=>'한국외국어대학교',"fr"=>'한국외국어대학교',"de"=>'한국외국어대학교',"ru"=>'한국외국어대학교',"es"=>'한국외국어대학교',"tr"=>'한국외국어대학교',"vi"=>'한국외국어대학교',"mn"=>'한국외국어대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"hufs":"")?>" href="<?php print(true?getSiteUrl('', '','mid','hufs'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="240" parent_srl="147" menu_name_key='서울시립대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',"en"=>'한국외국어대학교',"ko"=>'한국외국어대학교',"jp"=>'한국외국어대학교',"zh-CN"=>'한국외국어대학교',"zh-TW"=>'한국외국어대학교',"fr"=>'한국외국어대학교',"de"=>'한국외국어대학교',"ru"=>'한국외국어대학교',"es"=>'한국외국어대학교',"tr"=>'한국외국어대학교',"vi"=>'한국외국어대학교',"mn"=>'한국외국어대학교',"en"=>'서울시립대학교',"ko"=>'서울시립대학교',"jp"=>'서울시립대학교',"zh-CN"=>'서울시립대학교',"zh-TW"=>'서울시립대학교',"fr"=>'서울시립대학교',"de"=>'서울시립대학교',"ru"=>'서울시립대학교',"es"=>'서울시립대학교',"tr"=>'서울시립대학교',"vi"=>'서울시립대학교',"mn"=>'서울시립대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"uos":"")?>" href="<?php print(true?getSiteUrl('', '','mid','uos'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="242" parent_srl="147" menu_name_key='KAIST' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',"en"=>'한국외국어대학교',"ko"=>'한국외국어대학교',"jp"=>'한국외국어대학교',"zh-CN"=>'한국외국어대학교',"zh-TW"=>'한국외국어대학교',"fr"=>'한국외국어대학교',"de"=>'한국외국어대학교',"ru"=>'한국외국어대학교',"es"=>'한국외국어대학교',"tr"=>'한국외국어대학교',"vi"=>'한국외국어대학교',"mn"=>'한국외국어대학교',"en"=>'서울시립대학교',"ko"=>'서울시립대학교',"jp"=>'서울시립대학교',"zh-CN"=>'서울시립대학교',"zh-TW"=>'서울시립대학교',"fr"=>'서울시립대학교',"de"=>'서울시립대학교',"ru"=>'서울시립대학교',"es"=>'서울시립대학교',"tr"=>'서울시립대학교',"vi"=>'서울시립대학교',"mn"=>'서울시립대학교',"en"=>'KAIST',"ko"=>'KAIST',"jp"=>'KAIST',"zh-CN"=>'KAIST',"zh-TW"=>'KAIST',"fr"=>'KAIST',"de"=>'KAIST',"ru"=>'KAIST',"es"=>'KAIST',"tr"=>'KAIST',"vi"=>'KAIST',"mn"=>'KAIST',); print $_names[$lang_type]; }?>" url="<?php print(true?"kaist":"")?>" href="<?php print(true?getSiteUrl('', '','mid','kaist'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="244" parent_srl="147" menu_name_key='POSTECH' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',"en"=>'한국외국어대학교',"ko"=>'한국외국어대학교',"jp"=>'한국외국어대학교',"zh-CN"=>'한국외국어대학교',"zh-TW"=>'한국외국어대학교',"fr"=>'한국외국어대학교',"de"=>'한국외국어대학교',"ru"=>'한국외국어대학교',"es"=>'한국외국어대학교',"tr"=>'한국외국어대학교',"vi"=>'한국외국어대학교',"mn"=>'한국외국어대학교',"en"=>'서울시립대학교',"ko"=>'서울시립대학교',"jp"=>'서울시립대학교',"zh-CN"=>'서울시립대학교',"zh-TW"=>'서울시립대학교',"fr"=>'서울시립대학교',"de"=>'서울시립대학교',"ru"=>'서울시립대학교',"es"=>'서울시립대학교',"tr"=>'서울시립대학교',"vi"=>'서울시립대학교',"mn"=>'서울시립대학교',"en"=>'KAIST',"ko"=>'KAIST',"jp"=>'KAIST',"zh-CN"=>'KAIST',"zh-TW"=>'KAIST',"fr"=>'KAIST',"de"=>'KAIST',"ru"=>'KAIST',"es"=>'KAIST',"tr"=>'KAIST',"vi"=>'KAIST',"mn"=>'KAIST',"en"=>'POSTECH',"ko"=>'POSTECH',"jp"=>'POSTECH',"zh-CN"=>'POSTECH',"zh-TW"=>'POSTECH',"fr"=>'POSTECH',"de"=>'POSTECH',"ru"=>'POSTECH',"es"=>'POSTECH',"tr"=>'POSTECH',"vi"=>'POSTECH',"mn"=>'POSTECH',); print $_names[$lang_type]; }?>" url="<?php print(true?"postech":"")?>" href="<?php print(true?getSiteUrl('', '','mid','postech'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="291" parent_srl="147" menu_name_key='*공과대학' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',"en"=>'한국외국어대학교',"ko"=>'한국외국어대학교',"jp"=>'한국외국어대학교',"zh-CN"=>'한국외국어대학교',"zh-TW"=>'한국외국어대학교',"fr"=>'한국외국어대학교',"de"=>'한국외국어대학교',"ru"=>'한국외국어대학교',"es"=>'한국외국어대학교',"tr"=>'한국외국어대학교',"vi"=>'한국외국어대학교',"mn"=>'한국외국어대학교',"en"=>'서울시립대학교',"ko"=>'서울시립대학교',"jp"=>'서울시립대학교',"zh-CN"=>'서울시립대학교',"zh-TW"=>'서울시립대학교',"fr"=>'서울시립대학교',"de"=>'서울시립대학교',"ru"=>'서울시립대학교',"es"=>'서울시립대학교',"tr"=>'서울시립대학교',"vi"=>'서울시립대학교',"mn"=>'서울시립대학교',"en"=>'KAIST',"ko"=>'KAIST',"jp"=>'KAIST',"zh-CN"=>'KAIST',"zh-TW"=>'KAIST',"fr"=>'KAIST',"de"=>'KAIST',"ru"=>'KAIST',"es"=>'KAIST',"tr"=>'KAIST',"vi"=>'KAIST',"mn"=>'KAIST',"en"=>'POSTECH',"ko"=>'POSTECH',"jp"=>'POSTECH',"zh-CN"=>'POSTECH',"zh-TW"=>'POSTECH',"fr"=>'POSTECH',"de"=>'POSTECH',"ru"=>'POSTECH',"es"=>'POSTECH',"tr"=>'POSTECH',"vi"=>'POSTECH',"mn"=>'POSTECH',"en"=>'*공과대학',"ko"=>'*공과대학',"jp"=>'*공과대학',"zh-CN"=>'*공과대학',"zh-TW"=>'*공과대학',"fr"=>'*공과대학',"de"=>'*공과대학',"ru"=>'*공과대학',"es"=>'*공과대학',"tr"=>'*공과대학',"vi"=>'*공과대학',"mn"=>'*공과대학',); print $_names[$lang_type]; }?>" url="<?php print(true?"engineering":"")?>" href="<?php print(true?getSiteUrl('', '','mid','engineering'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="308" parent_srl="147" menu_name_key='*의과대학' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',"en"=>'한국외국어대학교',"ko"=>'한국외국어대학교',"jp"=>'한국외국어대학교',"zh-CN"=>'한국외국어대학교',"zh-TW"=>'한국외국어대학교',"fr"=>'한국외국어대학교',"de"=>'한국외국어대학교',"ru"=>'한국외국어대학교',"es"=>'한국외국어대학교',"tr"=>'한국외국어대학교',"vi"=>'한국외국어대학교',"mn"=>'한국외국어대학교',"en"=>'서울시립대학교',"ko"=>'서울시립대학교',"jp"=>'서울시립대학교',"zh-CN"=>'서울시립대학교',"zh-TW"=>'서울시립대학교',"fr"=>'서울시립대학교',"de"=>'서울시립대학교',"ru"=>'서울시립대학교',"es"=>'서울시립대학교',"tr"=>'서울시립대학교',"vi"=>'서울시립대학교',"mn"=>'서울시립대학교',"en"=>'KAIST',"ko"=>'KAIST',"jp"=>'KAIST',"zh-CN"=>'KAIST',"zh-TW"=>'KAIST',"fr"=>'KAIST',"de"=>'KAIST',"ru"=>'KAIST',"es"=>'KAIST',"tr"=>'KAIST',"vi"=>'KAIST',"mn"=>'KAIST',"en"=>'POSTECH',"ko"=>'POSTECH',"jp"=>'POSTECH',"zh-CN"=>'POSTECH',"zh-TW"=>'POSTECH',"fr"=>'POSTECH',"de"=>'POSTECH',"ru"=>'POSTECH',"es"=>'POSTECH',"tr"=>'POSTECH',"vi"=>'POSTECH',"mn"=>'POSTECH',"en"=>'*공과대학',"ko"=>'*공과대학',"jp"=>'*공과대학',"zh-CN"=>'*공과대학',"zh-TW"=>'*공과대학',"fr"=>'*공과대학',"de"=>'*공과대학',"ru"=>'*공과대학',"es"=>'*공과대학',"tr"=>'*공과대학',"vi"=>'*공과대학',"mn"=>'*공과대학',"en"=>'*의과대학',"ko"=>'*의과대학',"jp"=>'*의과대학',"zh-CN"=>'*의과대학',"zh-TW"=>'*의과대학',"fr"=>'*의과대학',"de"=>'*의과대학',"ru"=>'*의과대학',"es"=>'*의과대학',"tr"=>'*의과대학',"vi"=>'*의과대학',"mn"=>'*의과대학',); print $_names[$lang_type]; }?>" url="<?php print(true?"medicine":"")?>" href="<?php print(true?getSiteUrl('', '','mid','medicine'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="149" parent_srl="0" menu_name_key='공부' text="<?php if(true) { $_names = array("en"=>'HOME',"ko"=>'HOME',"jp"=>'HOME',"zh-CN"=>'HOME',"zh-TW"=>'HOME',"fr"=>'HOME',"de"=>'HOME',"ru"=>'HOME',"es"=>'HOME',"tr"=>'HOME',"vi"=>'HOME',"mn"=>'HOME',"en"=>'대학',"ko"=>'대학',"jp"=>'대학',"zh-CN"=>'대학',"zh-TW"=>'대학',"fr"=>'대학',"de"=>'대학',"ru"=>'대학',"es"=>'대학',"tr"=>'대학',"vi"=>'대학',"mn"=>'대학',"en"=>'공부',"ko"=>'공부',"jp"=>'공부',"zh-CN"=>'공부',"zh-TW"=>'공부',"fr"=>'공부',"de"=>'공부',"ru"=>'공부',"es"=>'공부',"tr"=>'공부',"vi"=>'공부',"mn"=>'공부',); print $_names[$lang_type]; }?>" url="<?php print(true?"study":"")?>" href="<?php print(true?getSiteUrl('', '','mid','study'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="198" parent_srl="149" menu_name_key='수학' text="<?php if(true) { $_names = array("en"=>'수학',"ko"=>'수학',"jp"=>'수학',"zh-CN"=>'수학',"zh-TW"=>'수학',"fr"=>'수학',"de"=>'수학',"ru"=>'수학',"es"=>'수학',"tr"=>'수학',"vi"=>'수학',"mn"=>'수학',); print $_names[$lang_type]; }?>" url="<?php print(true?"math":"")?>" href="<?php print(true?getSiteUrl('', '','mid','math'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="151" parent_srl="0" menu_name_key='라이프' text="<?php if(true) { $_names = array("en"=>'HOME',"ko"=>'HOME',"jp"=>'HOME',"zh-CN"=>'HOME',"zh-TW"=>'HOME',"fr"=>'HOME',"de"=>'HOME',"ru"=>'HOME',"es"=>'HOME',"tr"=>'HOME',"vi"=>'HOME',"mn"=>'HOME',"en"=>'대학',"ko"=>'대학',"jp"=>'대학',"zh-CN"=>'대학',"zh-TW"=>'대학',"fr"=>'대학',"de"=>'대학',"ru"=>'대학',"es"=>'대학',"tr"=>'대학',"vi"=>'대학',"mn"=>'대학',"en"=>'공부',"ko"=>'공부',"jp"=>'공부',"zh-CN"=>'공부',"zh-TW"=>'공부',"fr"=>'공부',"de"=>'공부',"ru"=>'공부',"es"=>'공부',"tr"=>'공부',"vi"=>'공부',"mn"=>'공부',"en"=>'라이프',"ko"=>'라이프',"jp"=>'라이프',"zh-CN"=>'라이프',"zh-TW"=>'라이프',"fr"=>'라이프',"de"=>'라이프',"ru"=>'라이프',"es"=>'라이프',"tr"=>'라이프',"vi"=>'라이프',"mn"=>'라이프',); print $_names[$lang_type]; }?>" url="<?php print(true?"life":"")?>" href="<?php print(true?getSiteUrl('', '','mid','life'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></root>