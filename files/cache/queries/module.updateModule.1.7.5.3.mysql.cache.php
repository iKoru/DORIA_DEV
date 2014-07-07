<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module12_argument'} = new Argument('module', $args->{'module'});
${'module12_argument'}->checkNotNull();
if(!${'module12_argument'}->isValid()) return ${'module12_argument'}->getErrorMessage();
if(${'module12_argument'} !== null) ${'module12_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl13_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl13_argument'}->isValid()) return ${'module_category_srl13_argument'}->getErrorMessage();
} else
${'module_category_srl13_argument'} = NULL;if(${'module_category_srl13_argument'} !== null) ${'module_category_srl13_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl14_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl14_argument'}->isValid()) return ${'layout_srl14_argument'}->getErrorMessage();
} else
${'layout_srl14_argument'} = NULL;if(${'layout_srl14_argument'} !== null) ${'layout_srl14_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin15_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin15_argument'}->isValid()) return ${'skin15_argument'}->getErrorMessage();
} else
${'skin15_argument'} = NULL;if(${'skin15_argument'} !== null) ${'skin15_argument'}->setColumnType('varchar');

${'is_skin_fix16_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix16_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix16_argument'}->isValid()) return ${'is_skin_fix16_argument'}->getErrorMessage();
if(${'is_skin_fix16_argument'} !== null) ${'is_skin_fix16_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin17_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin17_argument'}->isValid()) return ${'mskin17_argument'}->getErrorMessage();
} else
${'mskin17_argument'} = NULL;if(${'mskin17_argument'} !== null) ${'mskin17_argument'}->setColumnType('varchar');

${'is_mskin_fix18_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix18_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix18_argument'}->isValid()) return ${'is_mskin_fix18_argument'}->getErrorMessage();
if(${'is_mskin_fix18_argument'} !== null) ${'is_mskin_fix18_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl19_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl19_argument'}->checkFilter('number');
if(!${'menu_srl19_argument'}->isValid()) return ${'menu_srl19_argument'}->getErrorMessage();
} else
${'menu_srl19_argument'} = NULL;if(${'menu_srl19_argument'} !== null) ${'menu_srl19_argument'}->setColumnType('number');

${'mid20_argument'} = new Argument('mid', $args->{'mid'});
${'mid20_argument'}->checkNotNull();
if(!${'mid20_argument'}->isValid()) return ${'mid20_argument'}->getErrorMessage();
if(${'mid20_argument'} !== null) ${'mid20_argument'}->setColumnType('varchar');

${'browser_title21_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title21_argument'}->checkNotNull();
if(!${'browser_title21_argument'}->isValid()) return ${'browser_title21_argument'}->getErrorMessage();
if(${'browser_title21_argument'} !== null) ${'browser_title21_argument'}->setColumnType('varchar');

${'description22_argument'} = new Argument('description', $args->{'description'});
${'description22_argument'}->ensureDefaultValue('');
if(!${'description22_argument'}->isValid()) return ${'description22_argument'}->getErrorMessage();
if(${'description22_argument'} !== null) ${'description22_argument'}->setColumnType('text');

${'is_default23_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default23_argument'}->ensureDefaultValue('N');
${'is_default23_argument'}->checkNotNull();
if(!${'is_default23_argument'}->isValid()) return ${'is_default23_argument'}->getErrorMessage();
if(${'is_default23_argument'} !== null) ${'is_default23_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content24_argument'} = new Argument('content', $args->{'content'});
if(!${'content24_argument'}->isValid()) return ${'content24_argument'}->getErrorMessage();
} else
${'content24_argument'} = NULL;if(${'content24_argument'} !== null) ${'content24_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent25_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent25_argument'}->isValid()) return ${'mcontent25_argument'}->getErrorMessage();
} else
${'mcontent25_argument'} = NULL;if(${'mcontent25_argument'} !== null) ${'mcontent25_argument'}->setColumnType('bigtext');

${'open_rss26_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss26_argument'}->ensureDefaultValue('Y');
${'open_rss26_argument'}->checkNotNull();
if(!${'open_rss26_argument'}->isValid()) return ${'open_rss26_argument'}->getErrorMessage();
if(${'open_rss26_argument'} !== null) ${'open_rss26_argument'}->setColumnType('char');

${'header_text27_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text27_argument'}->ensureDefaultValue('');
if(!${'header_text27_argument'}->isValid()) return ${'header_text27_argument'}->getErrorMessage();
if(${'header_text27_argument'} !== null) ${'header_text27_argument'}->setColumnType('text');

${'footer_text28_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text28_argument'}->ensureDefaultValue('');
if(!${'footer_text28_argument'}->isValid()) return ${'footer_text28_argument'}->getErrorMessage();
if(${'footer_text28_argument'} !== null) ${'footer_text28_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl29_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl29_argument'}->isValid()) return ${'mlayout_srl29_argument'}->getErrorMessage();
} else
${'mlayout_srl29_argument'} = NULL;if(${'mlayout_srl29_argument'} !== null) ${'mlayout_srl29_argument'}->setColumnType('number');

${'use_mobile30_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile30_argument'}->ensureDefaultValue('N');
if(!${'use_mobile30_argument'}->isValid()) return ${'use_mobile30_argument'}->getErrorMessage();
if(${'use_mobile30_argument'} !== null) ${'use_mobile30_argument'}->setColumnType('char');

${'site_srl31_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl31_argument'}->checkFilter('number');
${'site_srl31_argument'}->ensureDefaultValue('0');
${'site_srl31_argument'}->checkNotNull();
${'site_srl31_argument'}->createConditionValue();
if(!${'site_srl31_argument'}->isValid()) return ${'site_srl31_argument'}->getErrorMessage();
if(${'site_srl31_argument'} !== null) ${'site_srl31_argument'}->setColumnType('number');

${'module_srl32_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl32_argument'}->checkFilter('number');
${'module_srl32_argument'}->checkNotNull();
${'module_srl32_argument'}->createConditionValue();
if(!${'module_srl32_argument'}->isValid()) return ${'module_srl32_argument'}->getErrorMessage();
if(${'module_srl32_argument'} !== null) ${'module_srl32_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module12_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl13_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl14_argument'})
,new UpdateExpression('`skin`', ${'skin15_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix16_argument'})
,new UpdateExpression('`mskin`', ${'mskin17_argument'})
,new UpdateExpression('`is_mskin_fix`', ${'is_mskin_fix18_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl19_argument'})
,new UpdateExpression('`mid`', ${'mid20_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title21_argument'})
,new UpdateExpression('`description`', ${'description22_argument'})
,new UpdateExpression('`is_default`', ${'is_default23_argument'})
,new UpdateExpression('`content`', ${'content24_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent25_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss26_argument'})
,new UpdateExpression('`header_text`', ${'header_text27_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text28_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl29_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile30_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl31_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl32_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>