<?php define('__XE__', true); require_once('C:/Dev/GitHub/DORIA_DEV/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="185" parent_srl="0" menu_name_key='회원 유형 선택' text="<?php if(true) { $_names = array("en"=>'회원 유형 선택',"ko"=>'회원 유형 선택',"jp"=>'회원 유형 선택',"zh-CN"=>'회원 유형 선택',"zh-TW"=>'회원 유형 선택',"fr"=>'회원 유형 선택',"de"=>'회원 유형 선택',"ru"=>'회원 유형 선택',"es"=>'회원 유형 선택',"tr"=>'회원 유형 선택',"vi"=>'회원 유형 선택',"mn"=>'회원 유형 선택',); print $_names[$lang_type]; }?>" url="<?php print(true?"membertype":"")?>" href="<?php print(true?getSiteUrl('', '','mid','membertype'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="143" parent_srl="0" menu_name_key='My Room' text="<?php if(true) { $_names = array("en"=>'회원 유형 선택',"ko"=>'회원 유형 선택',"jp"=>'회원 유형 선택',"zh-CN"=>'회원 유형 선택',"zh-TW"=>'회원 유형 선택',"fr"=>'회원 유형 선택',"de"=>'회원 유형 선택',"ru"=>'회원 유형 선택',"es"=>'회원 유형 선택',"tr"=>'회원 유형 선택',"vi"=>'회원 유형 선택',"mn"=>'회원 유형 선택',"en"=>'My Room',"ko"=>'My Room',"jp"=>'My Room',"zh-CN"=>'My Room',"zh-TW"=>'My Room',"fr"=>'My Room',"de"=>'My Room',"ru"=>'My Room',"es"=>'My Room',"tr"=>'My Room',"vi"=>'My Room',"mn"=>'My Room',); print $_names[$lang_type]; }?>" url="<?php print(true?"myroom":"")?>" href="<?php print(true?getSiteUrl('', '','mid','myroom'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="165" parent_srl="143" menu_name_key='아카데미' text="<?php if(true) { $_names = array("en"=>'아카데미',"ko"=>'아카데미',"jp"=>'아카데미',"zh-CN"=>'아카데미',"zh-TW"=>'아카데미',"fr"=>'아카데미',"de"=>'아카데미',"ru"=>'아카데미',"es"=>'아카데미',"tr"=>'아카데미',"vi"=>'아카데미',"mn"=>'아카데미',); print $_names[$lang_type]; }?>" url="<?php print(true?"myroom_academy":"")?>" href="<?php print(true?getSiteUrl('', '','mid','myroom_academy'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="427" parent_srl="165" menu_name_key='멘토 비교함' text="<?php if(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(161))))||($is_logged&&0))) { $_names = array("en"=>'멘토 비교함',"ko"=>'멘토 비교함',"jp"=>'멘토 비교함',"zh-CN"=>'멘토 비교함',"zh-TW"=>'멘토 비교함',"fr"=>'멘토 비교함',"de"=>'멘토 비교함',"ru"=>'멘토 비교함',"es"=>'멘토 비교함',"tr"=>'멘토 비교함',"vi"=>'멘토 비교함',"mn"=>'멘토 비교함',); print $_names[$lang_type]; }?>" url="<?php print(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(161))))||($is_logged&&0))?"/myroom/academy/comparebox":"")?>" href="<?php print(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(161))))||($is_logged&&0))?"/myroom/academy/comparebox":"")?>" is_shortcut="Y" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(161))))||($is_logged&&0))) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="458" parent_srl="165" menu_name_key='수강 신청' text="<?php if(true) { $_names = array("en"=>'멘토 비교함',"ko"=>'멘토 비교함',"jp"=>'멘토 비교함',"zh-CN"=>'멘토 비교함',"zh-TW"=>'멘토 비교함',"fr"=>'멘토 비교함',"de"=>'멘토 비교함',"ru"=>'멘토 비교함',"es"=>'멘토 비교함',"tr"=>'멘토 비교함',"vi"=>'멘토 비교함',"mn"=>'멘토 비교함',"en"=>'수강 신청',"ko"=>'수강 신청',"jp"=>'수강 신청',"zh-CN"=>'수강 신청',"zh-TW"=>'수강 신청',"fr"=>'수강 신청',"de"=>'수강 신청',"ru"=>'수강 신청',"es"=>'수강 신청',"tr"=>'수강 신청',"vi"=>'수강 신청',"mn"=>'수강 신청',); print $_names[$lang_type]; }?>" url="<?php print(true?"/myroom/academy/mentor/requests":"")?>" href="<?php print(true?"/myroom/academy/mentor/requests":"")?>" is_shortcut="Y" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="167" parent_srl="143" menu_name_key='라운지' text="<?php if(true) { $_names = array("en"=>'아카데미',"ko"=>'아카데미',"jp"=>'아카데미',"zh-CN"=>'아카데미',"zh-TW"=>'아카데미',"fr"=>'아카데미',"de"=>'아카데미',"ru"=>'아카데미',"es"=>'아카데미',"tr"=>'아카데미',"vi"=>'아카데미',"mn"=>'아카데미',"en"=>'라운지',"ko"=>'라운지',"jp"=>'라운지',"zh-CN"=>'라운지',"zh-TW"=>'라운지',"fr"=>'라운지',"de"=>'라운지',"ru"=>'라운지',"es"=>'라운지',"tr"=>'라운지',"vi"=>'라운지',"mn"=>'라운지',); print $_names[$lang_type]; }?>" url="<?php print(true?"myroom_lounge":"")?>" href="<?php print(true?getSiteUrl('', '','mid','myroom_lounge'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="163" parent_srl="143" menu_name_key='회원정보' text="<?php if(true) { $_names = array("en"=>'아카데미',"ko"=>'아카데미',"jp"=>'아카데미',"zh-CN"=>'아카데미',"zh-TW"=>'아카데미',"fr"=>'아카데미',"de"=>'아카데미',"ru"=>'아카데미',"es"=>'아카데미',"tr"=>'아카데미',"vi"=>'아카데미',"mn"=>'아카데미',"en"=>'라운지',"ko"=>'라운지',"jp"=>'라운지',"zh-CN"=>'라운지',"zh-TW"=>'라운지',"fr"=>'라운지',"de"=>'라운지',"ru"=>'라운지',"es"=>'라운지',"tr"=>'라운지',"vi"=>'라운지',"mn"=>'라운지',"en"=>'회원정보',"ko"=>'회원정보',"jp"=>'회원정보',"zh-CN"=>'회원정보',"zh-TW"=>'회원정보',"fr"=>'회원정보',"de"=>'회원정보',"ru"=>'회원정보',"es"=>'회원정보',"tr"=>'회원정보',"vi"=>'회원정보',"mn"=>'회원정보',); print $_names[$lang_type]; }?>" url="<?php print(true?"memberinfo":"")?>" href="<?php print(true?getSiteUrl('', '','mid','memberinfo'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="382" parent_srl="163" menu_name_key='관심 토픽' text="<?php if(true) { $_names = array("en"=>'관심 토픽',"ko"=>'관심 토픽',"jp"=>'관심 토픽',"zh-CN"=>'관심 토픽',"zh-TW"=>'관심 토픽',"fr"=>'관심 토픽',"de"=>'관심 토픽',"ru"=>'관심 토픽',"es"=>'관심 토픽',"tr"=>'관심 토픽',"vi"=>'관심 토픽',"mn"=>'관심 토픽',); print $_names[$lang_type]; }?>" url="<?php print(true?"/myroom/memberinfo/topics":"")?>" href="<?php print(true?"/myroom/memberinfo/topics":"")?>" is_shortcut="Y" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node></node></root>