<?php define('__XE__', true); require_once('C:/Dev/GitHub/DORIA_DEV/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="192" parent_srl="0" menu_name_key='xewall' text="<?php if(true) { $_names = array("en"=>'xewall',"ko"=>'xewall',"jp"=>'xewall',"zh-CN"=>'xewall',"zh-TW"=>'xewall',"fr"=>'xewall',"de"=>'xewall',"ru"=>'xewall',"es"=>'xewall',"tr"=>'xewall',"vi"=>'xewall',"mn"=>'xewall',); print $_names[$lang_type]; }?>" url="<?php print(true?"xewall":"")?>" href="<?php print(true?getSiteUrl('', '','mid','xewall'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="465" parent_srl="0" menu_name_key='Test Page' text="<?php if(true) { $_names = array("en"=>'xewall',"ko"=>'xewall',"jp"=>'xewall',"zh-CN"=>'xewall',"zh-TW"=>'xewall',"fr"=>'xewall',"de"=>'xewall',"ru"=>'xewall',"es"=>'xewall',"tr"=>'xewall',"vi"=>'xewall',"mn"=>'xewall',"en"=>'Test Page',"ko"=>'Test Page',"jp"=>'Test Page',"zh-CN"=>'Test Page',"zh-TW"=>'Test Page',"fr"=>'Test Page',"de"=>'Test Page',"ru"=>'Test Page',"es"=>'Test Page',"tr"=>'Test Page',"vi"=>'Test Page',"mn"=>'Test Page',); print $_names[$lang_type]; }?>" url="<?php print(true?"test":"")?>" href="<?php print(true?getSiteUrl('', '','mid','test'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="467" parent_srl="0" menu_name_key='서울대학교' text="<?php if(true) { $_names = array("en"=>'xewall',"ko"=>'xewall',"jp"=>'xewall',"zh-CN"=>'xewall',"zh-TW"=>'xewall',"fr"=>'xewall',"de"=>'xewall',"ru"=>'xewall',"es"=>'xewall',"tr"=>'xewall',"vi"=>'xewall',"mn"=>'xewall',"en"=>'Test Page',"ko"=>'Test Page',"jp"=>'Test Page',"zh-CN"=>'Test Page',"zh-TW"=>'Test Page',"fr"=>'Test Page',"de"=>'Test Page',"ru"=>'Test Page',"es"=>'Test Page',"tr"=>'Test Page',"vi"=>'Test Page',"mn"=>'Test Page',"en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"mentors_snu":"")?>" href="<?php print(true?getSiteUrl('', '','mid','mentors_snu'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="500" parent_srl="0" menu_name_key='고려대학교' text="<?php if(true) { $_names = array("en"=>'xewall',"ko"=>'xewall',"jp"=>'xewall',"zh-CN"=>'xewall',"zh-TW"=>'xewall',"fr"=>'xewall',"de"=>'xewall',"ru"=>'xewall',"es"=>'xewall',"tr"=>'xewall',"vi"=>'xewall',"mn"=>'xewall',"en"=>'Test Page',"ko"=>'Test Page',"jp"=>'Test Page',"zh-CN"=>'Test Page',"zh-TW"=>'Test Page',"fr"=>'Test Page',"de"=>'Test Page',"ru"=>'Test Page',"es"=>'Test Page',"tr"=>'Test Page',"vi"=>'Test Page',"mn"=>'Test Page',"en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',); print $_names[$lang_type]; }?>" url="<?php print(true?"mentors_korea":"")?>" href="<?php print(true?getSiteUrl('', '','mid','mentors_korea'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="510" parent_srl="0" menu_name_key='신청 게시판 테스트' text="<?php if(true) { $_names = array("en"=>'xewall',"ko"=>'xewall',"jp"=>'xewall',"zh-CN"=>'xewall',"zh-TW"=>'xewall',"fr"=>'xewall',"de"=>'xewall',"ru"=>'xewall',"es"=>'xewall',"tr"=>'xewall',"vi"=>'xewall',"mn"=>'xewall',"en"=>'Test Page',"ko"=>'Test Page',"jp"=>'Test Page',"zh-CN"=>'Test Page',"zh-TW"=>'Test Page',"fr"=>'Test Page',"de"=>'Test Page',"ru"=>'Test Page',"es"=>'Test Page',"tr"=>'Test Page',"vi"=>'Test Page',"mn"=>'Test Page',"en"=>'서울대학교',"ko"=>'서울대학교',"jp"=>'서울대학교',"zh-CN"=>'서울대학교',"zh-TW"=>'서울대학교',"fr"=>'서울대학교',"de"=>'서울대학교',"ru"=>'서울대학교',"es"=>'서울대학교',"tr"=>'서울대학교',"vi"=>'서울대학교',"mn"=>'서울대학교',"en"=>'고려대학교',"ko"=>'고려대학교',"jp"=>'고려대학교',"zh-CN"=>'고려대학교',"zh-TW"=>'고려대학교',"fr"=>'고려대학교',"de"=>'고려대학교',"ru"=>'고려대학교',"es"=>'고려대학교',"tr"=>'고려대학교',"vi"=>'고려대학교',"mn"=>'고려대학교',"en"=>'신청 게시판 테스트',"ko"=>'신청 게시판 테스트',"jp"=>'신청 게시판 테스트',"zh-CN"=>'신청 게시판 테스트',"zh-TW"=>'신청 게시판 테스트',"fr"=>'신청 게시판 테스트',"de"=>'신청 게시판 테스트',"ru"=>'신청 게시판 테스트',"es"=>'신청 게시판 테스트',"tr"=>'신청 게시판 테스트',"vi"=>'신청 게시판 테스트',"mn"=>'신청 게시판 테스트',); print $_names[$lang_type]; }?>" url="<?php print(true?"apply_test":"")?>" href="<?php print(true?getSiteUrl('', '','mid','apply_test'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></root>