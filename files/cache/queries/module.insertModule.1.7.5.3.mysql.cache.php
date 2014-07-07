<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModule");
$query->setAction("insert");
$query->setPriority("");

${'site_srl101_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl101_argument'}->ensureDefaultValue('0');
${'site_srl101_argument'}->checkNotNull();
if(!${'site_srl101_argument'}->isValid()) return ${'site_srl101_argument'}->getErrorMessage();
if(${'site_srl101_argument'} !== null) ${'site_srl101_argument'}->setColumnType('number');

${'module_srl102_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl102_argument'}->checkNotNull();
if(!${'module_srl102_argument'}->isValid()) return ${'module_srl102_argument'}->getErrorMessage();
if(${'module_srl102_argument'} !== null) ${'module_srl102_argument'}->setColumnType('number');

${'module_category_srl103_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
${'module_category_srl103_argument'}->ensureDefaultValue('0');
if(!${'module_category_srl103_argument'}->isValid()) return ${'module_category_srl103_argument'}->getErrorMessage();
if(${'module_category_srl103_argument'} !== null) ${'module_category_srl103_argument'}->setColumnType('number');

${'mid104_argument'} = new Argument('mid', $args->{'mid'});
${'mid104_argument'}->checkNotNull();
if(!${'mid104_argument'}->isValid()) return ${'mid104_argument'}->getErrorMessage();
if(${'mid104_argument'} !== null) ${'mid104_argument'}->setColumnType('varchar');
if(isset($args->skin)) {
${'skin105_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin105_argument'}->isValid()) return ${'skin105_argument'}->getErrorMessage();
} else
${'skin105_argument'} = NULL;if(${'skin105_argument'} !== null) ${'skin105_argument'}->setColumnType('varchar');

${'is_skin_fix106_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix106_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix106_argument'}->isValid()) return ${'is_skin_fix106_argument'}->getErrorMessage();
if(${'is_skin_fix106_argument'} !== null) ${'is_skin_fix106_argument'}->setColumnType('char');

${'is_mskin_fix107_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix107_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix107_argument'}->isValid()) return ${'is_mskin_fix107_argument'}->getErrorMessage();
if(${'is_mskin_fix107_argument'} !== null) ${'is_mskin_fix107_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin108_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin108_argument'}->isValid()) return ${'mskin108_argument'}->getErrorMessage();
} else
${'mskin108_argument'} = NULL;if(${'mskin108_argument'} !== null) ${'mskin108_argument'}->setColumnType('varchar');

${'browser_title109_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title109_argument'}->checkNotNull();
if(!${'browser_title109_argument'}->isValid()) return ${'browser_title109_argument'}->getErrorMessage();
if(${'browser_title109_argument'} !== null) ${'browser_title109_argument'}->setColumnType('varchar');
if(isset($args->layout_srl)) {
${'layout_srl110_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl110_argument'}->isValid()) return ${'layout_srl110_argument'}->getErrorMessage();
} else
${'layout_srl110_argument'} = NULL;if(${'layout_srl110_argument'} !== null) ${'layout_srl110_argument'}->setColumnType('number');
if(isset($args->description)) {
${'description111_argument'} = new Argument('description', $args->{'description'});
if(!${'description111_argument'}->isValid()) return ${'description111_argument'}->getErrorMessage();
} else
${'description111_argument'} = NULL;if(${'description111_argument'} !== null) ${'description111_argument'}->setColumnType('text');
if(isset($args->content)) {
${'content112_argument'} = new Argument('content', $args->{'content'});
if(!${'content112_argument'}->isValid()) return ${'content112_argument'}->getErrorMessage();
} else
${'content112_argument'} = NULL;if(${'content112_argument'} !== null) ${'content112_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent113_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent113_argument'}->isValid()) return ${'mcontent113_argument'}->getErrorMessage();
} else
${'mcontent113_argument'} = NULL;if(${'mcontent113_argument'} !== null) ${'mcontent113_argument'}->setColumnType('bigtext');

${'module114_argument'} = new Argument('module', $args->{'module'});
${'module114_argument'}->checkNotNull();
if(!${'module114_argument'}->isValid()) return ${'module114_argument'}->getErrorMessage();
if(${'module114_argument'} !== null) ${'module114_argument'}->setColumnType('varchar');

${'is_default115_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default115_argument'}->ensureDefaultValue('N');
${'is_default115_argument'}->checkNotNull();
if(!${'is_default115_argument'}->isValid()) return ${'is_default115_argument'}->getErrorMessage();
if(${'is_default115_argument'} !== null) ${'is_default115_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl116_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl116_argument'}->checkFilter('number');
if(!${'menu_srl116_argument'}->isValid()) return ${'menu_srl116_argument'}->getErrorMessage();
} else
${'menu_srl116_argument'} = NULL;if(${'menu_srl116_argument'} !== null) ${'menu_srl116_argument'}->setColumnType('number');

${'open_rss117_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss117_argument'}->ensureDefaultValue('Y');
${'open_rss117_argument'}->checkNotNull();
if(!${'open_rss117_argument'}->isValid()) return ${'open_rss117_argument'}->getErrorMessage();
if(${'open_rss117_argument'} !== null) ${'open_rss117_argument'}->setColumnType('char');
if(isset($args->header_text)) {
${'header_text118_argument'} = new Argument('header_text', $args->{'header_text'});
if(!${'header_text118_argument'}->isValid()) return ${'header_text118_argument'}->getErrorMessage();
} else
${'header_text118_argument'} = NULL;if(${'header_text118_argument'} !== null) ${'header_text118_argument'}->setColumnType('text');
if(isset($args->footer_text)) {
${'footer_text119_argument'} = new Argument('footer_text', $args->{'footer_text'});
if(!${'footer_text119_argument'}->isValid()) return ${'footer_text119_argument'}->getErrorMessage();
} else
${'footer_text119_argument'} = NULL;if(${'footer_text119_argument'} !== null) ${'footer_text119_argument'}->setColumnType('text');

${'regdate120_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate120_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate120_argument'}->isValid()) return ${'regdate120_argument'}->getErrorMessage();
if(${'regdate120_argument'} !== null) ${'regdate120_argument'}->setColumnType('date');
if(isset($args->mlayout_srl)) {
${'mlayout_srl121_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl121_argument'}->isValid()) return ${'mlayout_srl121_argument'}->getErrorMessage();
} else
${'mlayout_srl121_argument'} = NULL;if(${'mlayout_srl121_argument'} !== null) ${'mlayout_srl121_argument'}->setColumnType('number');

${'use_mobile122_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile122_argument'}->ensureDefaultValue('N');
if(!${'use_mobile122_argument'}->isValid()) return ${'use_mobile122_argument'}->getErrorMessage();
if(${'use_mobile122_argument'} !== null) ${'use_mobile122_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl101_argument'})
,new InsertExpression('`module_srl`', ${'module_srl102_argument'})
,new InsertExpression('`module_category_srl`', ${'module_category_srl103_argument'})
,new InsertExpression('`mid`', ${'mid104_argument'})
,new InsertExpression('`skin`', ${'skin105_argument'})
,new InsertExpression('`is_skin_fix`', ${'is_skin_fix106_argument'})
,new InsertExpression('`is_mskin_fix`', ${'is_mskin_fix107_argument'})
,new InsertExpression('`mskin`', ${'mskin108_argument'})
,new InsertExpression('`browser_title`', ${'browser_title109_argument'})
,new InsertExpression('`layout_srl`', ${'layout_srl110_argument'})
,new InsertExpression('`description`', ${'description111_argument'})
,new InsertExpression('`content`', ${'content112_argument'})
,new InsertExpression('`mcontent`', ${'mcontent113_argument'})
,new InsertExpression('`module`', ${'module114_argument'})
,new InsertExpression('`is_default`', ${'is_default115_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl116_argument'})
,new InsertExpression('`open_rss`', ${'open_rss117_argument'})
,new InsertExpression('`header_text`', ${'header_text118_argument'})
,new InsertExpression('`footer_text`', ${'footer_text119_argument'})
,new InsertExpression('`regdate`', ${'regdate120_argument'})
,new InsertExpression('`mlayout_srl`', ${'mlayout_srl121_argument'})
,new InsertExpression('`use_mobile`', ${'use_mobile122_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>