<?php define('__XE__', true); require_once('C:/Dev/GitHub/DORIA_DEV/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="110" parent_srl="0" menu_name_key='Lounge' text="<?php if(true) { $_names = array("en"=>'Lounge',"ko"=>'Lounge',"jp"=>'Lounge',"zh-CN"=>'Lounge',"zh-TW"=>'Lounge',"fr"=>'Lounge',"de"=>'Lounge',"ru"=>'Lounge',"es"=>'Lounge',"tr"=>'Lounge',"vi"=>'Lounge',"mn"=>'Lounge',); print $_names[$lang_type]; }?>" url="<?php print(true?"lounge":"")?>" href="<?php print(true?getSiteUrl('', '','mid','lounge'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="145" parent_srl="110" menu_name_key='홈' text="<?php if(true) { $_names = array("en"=>'홈',"ko"=>'홈',"jp"=>'홈',"zh-CN"=>'홈',"zh-TW"=>'홈',"fr"=>'홈',"de"=>'홈',"ru"=>'홈',"es"=>'홈',"tr"=>'홈',"vi"=>'홈',"mn"=>'홈',); print $_names[$lang_type]; }?>" url="<?php print(true?"lounge":"")?>" href="<?php print(true?getSiteUrl('', '','mid','lounge'):"")?>" is_shortcut="Y" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="147" parent_srl="110" menu_name_key='대학' text="<?php if(true) { $_names = array("en"=>'홈',"ko"=>'홈',"jp"=>'홈',"zh-CN"=>'홈',"zh-TW"=>'홈',"fr"=>'홈',"de"=>'홈',"ru"=>'홈',"es"=>'홈',"tr"=>'홈',"vi"=>'홈',"mn"=>'홈',"en"=>'대학',"ko"=>'대학',"jp"=>'대학',"zh-CN"=>'대학',"zh-TW"=>'대학',"fr"=>'대학',"de"=>'대학',"ru"=>'대학',"es"=>'대학',"tr"=>'대학',"vi"=>'대학',"mn"=>'대학',); print $_names[$lang_type]; }?>" url="<?php print(true?"university":"")?>" href="<?php print(true?getSiteUrl('', '','mid','university'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="153" parent_srl="147" menu_name_key='서울대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"snu":"")?>" href="<?php print(true?getSiteUrl('', '','mid','snu'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="224" parent_srl="147" menu_name_key='고려대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"korea":"")?>" href="<?php print(true?getSiteUrl('', '','mid','korea'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="226" parent_srl="147" menu_name_key='연세대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"yonsei":"")?>" href="<?php print(true?getSiteUrl('', '','mid','yonsei'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="228" parent_srl="147" menu_name_key='서강대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"sogang":"")?>" href="<?php print(true?getSiteUrl('', '','mid','sogang'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="230" parent_srl="147" menu_name_key='성균관대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"skku":"")?>" href="<?php print(true?getSiteUrl('', '','mid','skku'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="232" parent_srl="147" menu_name_key='한양대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"hanyang":"")?>" href="<?php print(true?getSiteUrl('', '','mid','hanyang'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="234" parent_srl="147" menu_name_key='중앙대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"cau":"")?>" href="<?php print(true?getSiteUrl('', '','mid','cau'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="236" parent_srl="147" menu_name_key='경희대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"khu":"")?>" href="<?php print(true?getSiteUrl('', '','mid','khu'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="238" parent_srl="147" menu_name_key='한국외국어대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',"en"=>'한국외국어대학교',"ko"=>'한국외국어대학교',"jp"=>'한국외국어대학교',"zh-CN"=>'한국외국어대학교',"zh-TW"=>'한국외국어대학교',"fr"=>'한국외국어대학교',"de"=>'한국외국어대학교',"ru"=>'한국외국어대학교',"es"=>'한국외국어대학교',"tr"=>'한국외국어대학교',"vi"=>'한국외국어대학교',"mn"=>'한국외국어대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"hufs":"")?>" href="<?php print(true?getSiteUrl('', '','mid','hufs'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="240" parent_srl="147" menu_name_key='서울시립대학교' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',"en"=>'한국외국어대학교',"ko"=>'한국외국어대학교',"jp"=>'한국외국어대학교',"zh-CN"=>'한국외국어대학교',"zh-TW"=>'한국외국어대학교',"fr"=>'한국외국어대학교',"de"=>'한국외국어대학교',"ru"=>'한국외국어대학교',"es"=>'한국외국어대학교',"tr"=>'한국외국어대학교',"vi"=>'한국외국어대학교',"mn"=>'한국외국어대학교',"en"=>'서울시립대학교',"ko"=>'서울시립대학교',"jp"=>'서울시립대학교',"zh-CN"=>'서울시립대학교',"zh-TW"=>'서울시립대학교',"fr"=>'서울시립대학교',"de"=>'서울시립대학교',"ru"=>'서울시립대학교',"es"=>'서울시립대학교',"tr"=>'서울시립대학교',"vi"=>'서울시립대학교',"mn"=>'서울시립대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"uos":"")?>" href="<?php print(true?getSiteUrl('', '','mid','uos'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="242" parent_srl="147" menu_name_key='KAIST' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',"en"=>'한국외국어대학교',"ko"=>'한국외국어대학교',"jp"=>'한국외국어대학교',"zh-CN"=>'한국외국어대학교',"zh-TW"=>'한국외국어대학교',"fr"=>'한국외국어대학교',"de"=>'한국외국어대학교',"ru"=>'한국외국어대학교',"es"=>'한국외국어대학교',"tr"=>'한국외국어대학교',"vi"=>'한국외국어대학교',"mn"=>'한국외국어대학교',"en"=>'서울시립대학교',"ko"=>'서울시립대학교',"jp"=>'서울시립대학교',"zh-CN"=>'서울시립대학교',"zh-TW"=>'서울시립대학교',"fr"=>'서울시립대학교',"de"=>'서울시립대학교',"ru"=>'서울시립대학교',"es"=>'서울시립대학교',"tr"=>'서울시립대학교',"vi"=>'서울시립대학교',"mn"=>'서울시립대학교',"en"=>'KAIST',"ko"=>'KAIST',"jp"=>'KAIST',"zh-CN"=>'KAIST',"zh-TW"=>'KAIST',"fr"=>'KAIST',"de"=>'KAIST',"ru"=>'KAIST',"es"=>'KAIST',"tr"=>'KAIST',"vi"=>'KAIST',"mn"=>'KAIST',); print $_names[$lang_type]; }?>" url="<?php print(true?"kaist":"")?>" href="<?php print(true?getSiteUrl('', '','mid','kaist'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="244" parent_srl="147" menu_name_key='POSTECH' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',"en"=>'한국외국어대학교',"ko"=>'한국외국어대학교',"jp"=>'한국외국어대학교',"zh-CN"=>'한국외국어대학교',"zh-TW"=>'한국외국어대학교',"fr"=>'한국외국어대학교',"de"=>'한국외국어대학교',"ru"=>'한국외국어대학교',"es"=>'한국외국어대학교',"tr"=>'한국외국어대학교',"vi"=>'한국외국어대학교',"mn"=>'한국외국어대학교',"en"=>'서울시립대학교',"ko"=>'서울시립대학교',"jp"=>'서울시립대학교',"zh-CN"=>'서울시립대학교',"zh-TW"=>'서울시립대학교',"fr"=>'서울시립대학교',"de"=>'서울시립대학교',"ru"=>'서울시립대학교',"es"=>'서울시립대학교',"tr"=>'서울시립대학교',"vi"=>'서울시립대학교',"mn"=>'서울시립대학교',"en"=>'KAIST',"ko"=>'KAIST',"jp"=>'KAIST',"zh-CN"=>'KAIST',"zh-TW"=>'KAIST',"fr"=>'KAIST',"de"=>'KAIST',"ru"=>'KAIST',"es"=>'KAIST',"tr"=>'KAIST',"vi"=>'KAIST',"mn"=>'KAIST',"en"=>'POSTECH',"ko"=>'POSTECH',"jp"=>'POSTECH',"zh-CN"=>'POSTECH',"zh-TW"=>'POSTECH',"fr"=>'POSTECH',"de"=>'POSTECH',"ru"=>'POSTECH',"es"=>'POSTECH',"tr"=>'POSTECH',"vi"=>'POSTECH',"mn"=>'POSTECH',); print $_names[$lang_type]; }?>" url="<?php print(true?"postech":"")?>" href="<?php print(true?getSiteUrl('', '','mid','postech'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="291" parent_srl="147" menu_name_key='*공과대학' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',"en"=>'한국외국어대학교',"ko"=>'한국외국어대학교',"jp"=>'한국외국어대학교',"zh-CN"=>'한국외국어대학교',"zh-TW"=>'한국외국어대학교',"fr"=>'한국외국어대학교',"de"=>'한국외국어대학교',"ru"=>'한국외국어대학교',"es"=>'한국외국어대학교',"tr"=>'한국외국어대학교',"vi"=>'한국외국어대학교',"mn"=>'한국외국어대학교',"en"=>'서울시립대학교',"ko"=>'서울시립대학교',"jp"=>'서울시립대학교',"zh-CN"=>'서울시립대학교',"zh-TW"=>'서울시립대학교',"fr"=>'서울시립대학교',"de"=>'서울시립대학교',"ru"=>'서울시립대학교',"es"=>'서울시립대학교',"tr"=>'서울시립대학교',"vi"=>'서울시립대학교',"mn"=>'서울시립대학교',"en"=>'KAIST',"ko"=>'KAIST',"jp"=>'KAIST',"zh-CN"=>'KAIST',"zh-TW"=>'KAIST',"fr"=>'KAIST',"de"=>'KAIST',"ru"=>'KAIST',"es"=>'KAIST',"tr"=>'KAIST',"vi"=>'KAIST',"mn"=>'KAIST',"en"=>'POSTECH',"ko"=>'POSTECH',"jp"=>'POSTECH',"zh-CN"=>'POSTECH',"zh-TW"=>'POSTECH',"fr"=>'POSTECH',"de"=>'POSTECH',"ru"=>'POSTECH',"es"=>'POSTECH',"tr"=>'POSTECH',"vi"=>'POSTECH',"mn"=>'POSTECH',"en"=>'*공과대학',"ko"=>'*공과대학',"jp"=>'*공과대학',"zh-CN"=>'*공과대학',"zh-TW"=>'*공과대학',"fr"=>'*공과대학',"de"=>'*공과대학',"ru"=>'*공과대학',"es"=>'*공과대학',"tr"=>'*공과대학',"vi"=>'*공과대학',"mn"=>'*공과대학',); print $_names[$lang_type]; }?>" url="<?php print(true?"engineering":"")?>" href="<?php print(true?getSiteUrl('', '','mid','engineering'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="308" parent_srl="147" menu_name_key='*의과대학' text="<?php if(true) { $_names = array("en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'연세대학교',"ko"=>'연세대학교',"jp"=>'연세대학교',"zh-CN"=>'연세대학교',"zh-TW"=>'연세대학교',"fr"=>'연세대학교',"de"=>'연세대학교',"ru"=>'연세대학교',"es"=>'연세대학교',"tr"=>'연세대학교',"vi"=>'연세대학교',"mn"=>'연세대학교',"en"=>'서강대학교',"ko"=>'서강대학교',"jp"=>'서강대학교',"zh-CN"=>'서강대학교',"zh-TW"=>'서강대학교',"fr"=>'서강대학교',"de"=>'서강대학교',"ru"=>'서강대학교',"es"=>'서강대학교',"tr"=>'서강대학교',"vi"=>'서강대학교',"mn"=>'서강대학교',"en"=>'성균관대학교',"ko"=>'성균관대학교',"jp"=>'성균관대학교',"zh-CN"=>'성균관대학교',"zh-TW"=>'성균관대학교',"fr"=>'성균관대학교',"de"=>'성균관대학교',"ru"=>'성균관대학교',"es"=>'성균관대학교',"tr"=>'성균관대학교',"vi"=>'성균관대학교',"mn"=>'성균관대학교',"en"=>'한양대학교',"ko"=>'한양대학교',"jp"=>'한양대학교',"zh-CN"=>'한양대학교',"zh-TW"=>'한양대학교',"fr"=>'한양대학교',"de"=>'한양대학교',"ru"=>'한양대학교',"es"=>'한양대학교',"tr"=>'한양대학교',"vi"=>'한양대학교',"mn"=>'한양대학교',"en"=>'중앙대학교',"ko"=>'중앙대학교',"jp"=>'중앙대학교',"zh-CN"=>'중앙대학교',"zh-TW"=>'중앙대학교',"fr"=>'중앙대학교',"de"=>'중앙대학교',"ru"=>'중앙대학교',"es"=>'중앙대학교',"tr"=>'중앙대학교',"vi"=>'중앙대학교',"mn"=>'중앙대학교',"en"=>'경희대학교',"ko"=>'경희대학교',"jp"=>'경희대학교',"zh-CN"=>'경희대학교',"zh-TW"=>'경희대학교',"fr"=>'경희대학교',"de"=>'경희대학교',"ru"=>'경희대학교',"es"=>'경희대학교',"tr"=>'경희대학교',"vi"=>'경희대학교',"mn"=>'경희대학교',"en"=>'한국외국어대학교',"ko"=>'한국외국어대학교',"jp"=>'한국외국어대학교',"zh-CN"=>'한국외국어대학교',"zh-TW"=>'한국외국어대학교',"fr"=>'한국외국어대학교',"de"=>'한국외국어대학교',"ru"=>'한국외국어대학교',"es"=>'한국외국어대학교',"tr"=>'한국외국어대학교',"vi"=>'한국외국어대학교',"mn"=>'한국외국어대학교',"en"=>'서울시립대학교',"ko"=>'서울시립대학교',"jp"=>'서울시립대학교',"zh-CN"=>'서울시립대학교',"zh-TW"=>'서울시립대학교',"fr"=>'서울시립대학교',"de"=>'서울시립대학교',"ru"=>'서울시립대학교',"es"=>'서울시립대학교',"tr"=>'서울시립대학교',"vi"=>'서울시립대학교',"mn"=>'서울시립대학교',"en"=>'KAIST',"ko"=>'KAIST',"jp"=>'KAIST',"zh-CN"=>'KAIST',"zh-TW"=>'KAIST',"fr"=>'KAIST',"de"=>'KAIST',"ru"=>'KAIST',"es"=>'KAIST',"tr"=>'KAIST',"vi"=>'KAIST',"mn"=>'KAIST',"en"=>'POSTECH',"ko"=>'POSTECH',"jp"=>'POSTECH',"zh-CN"=>'POSTECH',"zh-TW"=>'POSTECH',"fr"=>'POSTECH',"de"=>'POSTECH',"ru"=>'POSTECH',"es"=>'POSTECH',"tr"=>'POSTECH',"vi"=>'POSTECH',"mn"=>'POSTECH',"en"=>'*공과대학',"ko"=>'*공과대학',"jp"=>'*공과대학',"zh-CN"=>'*공과대학',"zh-TW"=>'*공과대학',"fr"=>'*공과대학',"de"=>'*공과대학',"ru"=>'*공과대학',"es"=>'*공과대학',"tr"=>'*공과대학',"vi"=>'*공과대학',"mn"=>'*공과대학',"en"=>'*의과대학',"ko"=>'*의과대학',"jp"=>'*의과대학',"zh-CN"=>'*의과대학',"zh-TW"=>'*의과대학',"fr"=>'*의과대학',"de"=>'*의과대학',"ru"=>'*의과대학',"es"=>'*의과대학',"tr"=>'*의과대학',"vi"=>'*의과대학',"mn"=>'*의과대학',); print $_names[$lang_type]; }?>" url="<?php print(true?"medicine":"")?>" href="<?php print(true?getSiteUrl('', '','mid','medicine'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="149" parent_srl="110" menu_name_key='공부' text="<?php if(true) { $_names = array("en"=>'홈',"ko"=>'홈',"jp"=>'홈',"zh-CN"=>'홈',"zh-TW"=>'홈',"fr"=>'홈',"de"=>'홈',"ru"=>'홈',"es"=>'홈',"tr"=>'홈',"vi"=>'홈',"mn"=>'홈',"en"=>'대학',"ko"=>'대학',"jp"=>'대학',"zh-CN"=>'대학',"zh-TW"=>'대학',"fr"=>'대학',"de"=>'대학',"ru"=>'대학',"es"=>'대학',"tr"=>'대학',"vi"=>'대학',"mn"=>'대학',"en"=>'공부',"ko"=>'공부',"jp"=>'공부',"zh-CN"=>'공부',"zh-TW"=>'공부',"fr"=>'공부',"de"=>'공부',"ru"=>'공부',"es"=>'공부',"tr"=>'공부',"vi"=>'공부',"mn"=>'공부',); print $_names[$lang_type]; }?>" url="<?php print(true?"study":"")?>" href="<?php print(true?getSiteUrl('', '','mid','study'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="198" parent_srl="149" menu_name_key='수학' text="<?php if(true) { $_names = array("en"=>'수학',"ko"=>'수학',"jp"=>'수학',"zh-CN"=>'수학',"zh-TW"=>'수학',"fr"=>'수학',"de"=>'수학',"ru"=>'수학',"es"=>'수학',"tr"=>'수학',"vi"=>'수학',"mn"=>'수학',); print $_names[$lang_type]; }?>" url="<?php print(true?"math":"")?>" href="<?php print(true?getSiteUrl('', '','mid','math'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="151" parent_srl="110" menu_name_key='라이프' text="<?php if(true) { $_names = array("en"=>'홈',"ko"=>'홈',"jp"=>'홈',"zh-CN"=>'홈',"zh-TW"=>'홈',"fr"=>'홈',"de"=>'홈',"ru"=>'홈',"es"=>'홈',"tr"=>'홈',"vi"=>'홈',"mn"=>'홈',"en"=>'대학',"ko"=>'대학',"jp"=>'대학',"zh-CN"=>'대학',"zh-TW"=>'대학',"fr"=>'대학',"de"=>'대학',"ru"=>'대학',"es"=>'대학',"tr"=>'대학',"vi"=>'대학',"mn"=>'대학',"en"=>'공부',"ko"=>'공부',"jp"=>'공부',"zh-CN"=>'공부',"zh-TW"=>'공부',"fr"=>'공부',"de"=>'공부',"ru"=>'공부',"es"=>'공부',"tr"=>'공부',"vi"=>'공부',"mn"=>'공부',"en"=>'라이프',"ko"=>'라이프',"jp"=>'라이프',"zh-CN"=>'라이프',"zh-TW"=>'라이프',"fr"=>'라이프',"de"=>'라이프',"ru"=>'라이프',"es"=>'라이프',"tr"=>'라이프',"vi"=>'라이프',"mn"=>'라이프',); print $_names[$lang_type]; }?>" url="<?php print(true?"life":"")?>" href="<?php print(true?getSiteUrl('', '','mid','life'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="68" parent_srl="0" menu_name_key='Academy' text="<?php if(true) { $_names = array("en"=>'Lounge',"ko"=>'Lounge',"jp"=>'Lounge',"zh-CN"=>'Lounge',"zh-TW"=>'Lounge',"fr"=>'Lounge',"de"=>'Lounge',"ru"=>'Lounge',"es"=>'Lounge',"tr"=>'Lounge',"vi"=>'Lounge',"mn"=>'Lounge',"en"=>'Academy',"ko"=>'Academy',"jp"=>'Academy',"zh-CN"=>'Academy',"zh-TW"=>'Academy',"fr"=>'Academy',"de"=>'Academy',"ru"=>'Academy',"es"=>'Academy',"tr"=>'Academy',"vi"=>'Academy',"mn"=>'Academy',); print $_names[$lang_type]; }?>" url="<?php print(true?"academy":"")?>" href="<?php print(true?getSiteUrl('', '','mid','academy'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="112" parent_srl="68" menu_name_key='소개' text="<?php if(true) { $_names = array("en"=>'소개',"ko"=>'소개',"jp"=>'소개',"zh-CN"=>'소개',"zh-TW"=>'소개',"fr"=>'소개',"de"=>'소개',"ru"=>'소개',"es"=>'소개',"tr"=>'소개',"vi"=>'소개',"mn"=>'소개',); print $_names[$lang_type]; }?>" url="<?php print(true?"academy_intro":"")?>" href="<?php print(true?getSiteUrl('', '','mid','academy_intro'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="114" parent_srl="68" menu_name_key='Mentors' text="<?php if(true) { $_names = array("en"=>'소개',"ko"=>'소개',"jp"=>'소개',"zh-CN"=>'소개',"zh-TW"=>'소개',"fr"=>'소개',"de"=>'소개',"ru"=>'소개',"es"=>'소개',"tr"=>'소개',"vi"=>'소개',"mn"=>'소개',"en"=>'Mentors',"ko"=>'Mentors',"jp"=>'Mentors',"zh-CN"=>'Mentors',"zh-TW"=>'Mentors',"fr"=>'Mentors',"de"=>'Mentors',"ru"=>'Mentors',"es"=>'Mentors',"tr"=>'Mentors',"vi"=>'Mentors',"mn"=>'Mentors',); print $_names[$lang_type]; }?>" url="<?php print(true?"mentors":"")?>" href="<?php print(true?getSiteUrl('', '','mid','mentors'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="143" parent_srl="0" menu_name_key='My Room' text="<?php if(true) { $_names = array("en"=>'Lounge',"ko"=>'Lounge',"jp"=>'Lounge',"zh-CN"=>'Lounge',"zh-TW"=>'Lounge',"fr"=>'Lounge',"de"=>'Lounge',"ru"=>'Lounge',"es"=>'Lounge',"tr"=>'Lounge',"vi"=>'Lounge',"mn"=>'Lounge',"en"=>'Academy',"ko"=>'Academy',"jp"=>'Academy',"zh-CN"=>'Academy',"zh-TW"=>'Academy',"fr"=>'Academy',"de"=>'Academy',"ru"=>'Academy',"es"=>'Academy',"tr"=>'Academy',"vi"=>'Academy',"mn"=>'Academy',"en"=>'My Room',"ko"=>'My Room',"jp"=>'My Room',"zh-CN"=>'My Room',"zh-TW"=>'My Room',"fr"=>'My Room',"de"=>'My Room',"ru"=>'My Room',"es"=>'My Room',"tr"=>'My Room',"vi"=>'My Room',"mn"=>'My Room',); print $_names[$lang_type]; }?>" url="<?php print(true?"myroom":"")?>" href="<?php print(true?getSiteUrl('', '','mid','myroom'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="165" parent_srl="143" menu_name_key='아카데미' text="<?php if(true) { $_names = array("en"=>'아카데미',"ko"=>'아카데미',"jp"=>'아카데미',"zh-CN"=>'아카데미',"zh-TW"=>'아카데미',"fr"=>'아카데미',"de"=>'아카데미',"ru"=>'아카데미',"es"=>'아카데미',"tr"=>'아카데미',"vi"=>'아카데미',"mn"=>'아카데미',); print $_names[$lang_type]; }?>" url="<?php print(true?"myroom_academy":"")?>" href="<?php print(true?getSiteUrl('', '','mid','myroom_academy'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="427" parent_srl="165" menu_name_key='멘토 비교함' text="<?php if(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(161))))||($is_logged&&0))) { $_names = array("en"=>'멘토 비교함',"ko"=>'멘토 비교함',"jp"=>'멘토 비교함',"zh-CN"=>'멘토 비교함',"zh-TW"=>'멘토 비교함',"fr"=>'멘토 비교함',"de"=>'멘토 비교함',"ru"=>'멘토 비교함',"es"=>'멘토 비교함',"tr"=>'멘토 비교함',"vi"=>'멘토 비교함',"mn"=>'멘토 비교함',); print $_names[$lang_type]; }?>" url="<?php print(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(161))))||($is_logged&&0))?"/myroom/academy/comparebox":"")?>" href="<?php print(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(161))))||($is_logged&&0))?"/myroom/academy/comparebox":"")?>" is_shortcut="Y" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(161))))||($is_logged&&0))) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="458" parent_srl="165" menu_name_key='수강 신청' text="<?php if(true) { $_names = array("en"=>'멘토 비교함',"ko"=>'멘토 비교함',"jp"=>'멘토 비교함',"zh-CN"=>'멘토 비교함',"zh-TW"=>'멘토 비교함',"fr"=>'멘토 비교함',"de"=>'멘토 비교함',"ru"=>'멘토 비교함',"es"=>'멘토 비교함',"tr"=>'멘토 비교함',"vi"=>'멘토 비교함',"mn"=>'멘토 비교함',"en"=>'수강 신청',"ko"=>'수강 신청',"jp"=>'수강 신청',"zh-CN"=>'수강 신청',"zh-TW"=>'수강 신청',"fr"=>'수강 신청',"de"=>'수강 신청',"ru"=>'수강 신청',"es"=>'수강 신청',"tr"=>'수강 신청',"vi"=>'수강 신청',"mn"=>'수강 신청',); print $_names[$lang_type]; }?>" url="<?php print(true?"/myroom/academy/mentor/requests":"")?>" href="<?php print(true?"/myroom/academy/mentor/requests":"")?>" is_shortcut="Y" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="167" parent_srl="143" menu_name_key='라운지' text="<?php if(true) { $_names = array("en"=>'아카데미',"ko"=>'아카데미',"jp"=>'아카데미',"zh-CN"=>'아카데미',"zh-TW"=>'아카데미',"fr"=>'아카데미',"de"=>'아카데미',"ru"=>'아카데미',"es"=>'아카데미',"tr"=>'아카데미',"vi"=>'아카데미',"mn"=>'아카데미',"en"=>'라운지',"ko"=>'라운지',"jp"=>'라운지',"zh-CN"=>'라운지',"zh-TW"=>'라운지',"fr"=>'라운지',"de"=>'라운지',"ru"=>'라운지',"es"=>'라운지',"tr"=>'라운지',"vi"=>'라운지',"mn"=>'라운지',); print $_names[$lang_type]; }?>" url="<?php print(true?"myroom_lounge":"")?>" href="<?php print(true?getSiteUrl('', '','mid','myroom_lounge'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="163" parent_srl="143" menu_name_key='회원정보' text="<?php if(true) { $_names = array("en"=>'아카데미',"ko"=>'아카데미',"jp"=>'아카데미',"zh-CN"=>'아카데미',"zh-TW"=>'아카데미',"fr"=>'아카데미',"de"=>'아카데미',"ru"=>'아카데미',"es"=>'아카데미',"tr"=>'아카데미',"vi"=>'아카데미',"mn"=>'아카데미',"en"=>'라운지',"ko"=>'라운지',"jp"=>'라운지',"zh-CN"=>'라운지',"zh-TW"=>'라운지',"fr"=>'라운지',"de"=>'라운지',"ru"=>'라운지',"es"=>'라운지',"tr"=>'라운지',"vi"=>'라운지',"mn"=>'라운지',"en"=>'회원정보',"ko"=>'회원정보',"jp"=>'회원정보',"zh-CN"=>'회원정보',"zh-TW"=>'회원정보',"fr"=>'회원정보',"de"=>'회원정보',"ru"=>'회원정보',"es"=>'회원정보',"tr"=>'회원정보',"vi"=>'회원정보',"mn"=>'회원정보',); print $_names[$lang_type]; }?>" url="<?php print(true?"memberinfo":"")?>" href="<?php print(true?getSiteUrl('', '','mid','memberinfo'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="382" parent_srl="163" menu_name_key='관심 토픽' text="<?php if(true) { $_names = array("en"=>'관심 토픽',"ko"=>'관심 토픽',"jp"=>'관심 토픽',"zh-CN"=>'관심 토픽',"zh-TW"=>'관심 토픽',"fr"=>'관심 토픽',"de"=>'관심 토픽',"ru"=>'관심 토픽',"es"=>'관심 토픽',"tr"=>'관심 토픽',"vi"=>'관심 토픽',"mn"=>'관심 토픽',); print $_names[$lang_type]; }?>" url="<?php print(true?"/myroom/memberinfo/topics":"")?>" href="<?php print(true?"/myroom/memberinfo/topics":"")?>" is_shortcut="Y" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node></node></root>