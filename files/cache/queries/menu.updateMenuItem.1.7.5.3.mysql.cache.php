<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl36_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl36_argument'}->isValid()) return ${'menu_srl36_argument'}->getErrorMessage();
} else
${'menu_srl36_argument'} = NULL;if(${'menu_srl36_argument'} !== null) ${'menu_srl36_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl37_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl37_argument'}->isValid()) return ${'parent_srl37_argument'}->getErrorMessage();
} else
${'parent_srl37_argument'} = NULL;if(${'parent_srl37_argument'} !== null) ${'parent_srl37_argument'}->setColumnType('number');

${'name38_argument'} = new Argument('name', $args->{'name'});
${'name38_argument'}->checkNotNull();
if(!${'name38_argument'}->isValid()) return ${'name38_argument'}->getErrorMessage();
if(${'name38_argument'} !== null) ${'name38_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url39_argument'} = new Argument('url', $args->{'url'});
if(!${'url39_argument'}->isValid()) return ${'url39_argument'}->getErrorMessage();
} else
${'url39_argument'} = NULL;if(${'url39_argument'} !== null) ${'url39_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut40_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut40_argument'}->isValid()) return ${'is_shortcut40_argument'}->getErrorMessage();
} else
${'is_shortcut40_argument'} = NULL;if(${'is_shortcut40_argument'} !== null) ${'is_shortcut40_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window41_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window41_argument'}->isValid()) return ${'open_window41_argument'}->getErrorMessage();
} else
${'open_window41_argument'} = NULL;if(${'open_window41_argument'} !== null) ${'open_window41_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand42_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand42_argument'}->isValid()) return ${'expand42_argument'}->getErrorMessage();
} else
${'expand42_argument'} = NULL;if(${'expand42_argument'} !== null) ${'expand42_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn43_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn43_argument'}->isValid()) return ${'normal_btn43_argument'}->getErrorMessage();
} else
${'normal_btn43_argument'} = NULL;if(${'normal_btn43_argument'} !== null) ${'normal_btn43_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn44_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn44_argument'}->isValid()) return ${'hover_btn44_argument'}->getErrorMessage();
} else
${'hover_btn44_argument'} = NULL;if(${'hover_btn44_argument'} !== null) ${'hover_btn44_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn45_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn45_argument'}->isValid()) return ${'active_btn45_argument'}->getErrorMessage();
} else
${'active_btn45_argument'} = NULL;if(${'active_btn45_argument'} !== null) ${'active_btn45_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls46_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls46_argument'}->isValid()) return ${'group_srls46_argument'}->getErrorMessage();
} else
${'group_srls46_argument'} = NULL;if(${'group_srls46_argument'} !== null) ${'group_srls46_argument'}->setColumnType('text');

${'menu_item_srl47_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl47_argument'}->checkFilter('number');
${'menu_item_srl47_argument'}->checkNotNull();
${'menu_item_srl47_argument'}->createConditionValue();
if(!${'menu_item_srl47_argument'}->isValid()) return ${'menu_item_srl47_argument'}->getErrorMessage();
if(${'menu_item_srl47_argument'} !== null) ${'menu_item_srl47_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl36_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl37_argument'})
,new UpdateExpression('`name`', ${'name38_argument'})
,new UpdateExpression('`url`', ${'url39_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut40_argument'})
,new UpdateExpression('`open_window`', ${'open_window41_argument'})
,new UpdateExpression('`expand`', ${'expand42_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn43_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn44_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn45_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls46_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl47_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>