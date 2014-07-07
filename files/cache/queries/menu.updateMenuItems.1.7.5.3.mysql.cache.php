<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItems");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl72_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl72_argument'}->isValid()) return ${'menu_srl72_argument'}->getErrorMessage();
} else
${'menu_srl72_argument'} = NULL;if(${'menu_srl72_argument'} !== null) ${'menu_srl72_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl73_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl73_argument'}->isValid()) return ${'parent_srl73_argument'}->getErrorMessage();
} else
${'parent_srl73_argument'} = NULL;if(${'parent_srl73_argument'} !== null) ${'parent_srl73_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name74_argument'} = new Argument('name', $args->{'name'});
if(!${'name74_argument'}->isValid()) return ${'name74_argument'}->getErrorMessage();
} else
${'name74_argument'} = NULL;if(${'name74_argument'} !== null) ${'name74_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url75_argument'} = new Argument('url', $args->{'url'});
if(!${'url75_argument'}->isValid()) return ${'url75_argument'}->getErrorMessage();
} else
${'url75_argument'} = NULL;if(${'url75_argument'} !== null) ${'url75_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut76_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut76_argument'}->isValid()) return ${'is_shortcut76_argument'}->getErrorMessage();
} else
${'is_shortcut76_argument'} = NULL;if(${'is_shortcut76_argument'} !== null) ${'is_shortcut76_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window77_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window77_argument'}->isValid()) return ${'open_window77_argument'}->getErrorMessage();
} else
${'open_window77_argument'} = NULL;if(${'open_window77_argument'} !== null) ${'open_window77_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand78_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand78_argument'}->isValid()) return ${'expand78_argument'}->getErrorMessage();
} else
${'expand78_argument'} = NULL;if(${'expand78_argument'} !== null) ${'expand78_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn79_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn79_argument'}->isValid()) return ${'normal_btn79_argument'}->getErrorMessage();
} else
${'normal_btn79_argument'} = NULL;if(${'normal_btn79_argument'} !== null) ${'normal_btn79_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn80_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn80_argument'}->isValid()) return ${'hover_btn80_argument'}->getErrorMessage();
} else
${'hover_btn80_argument'} = NULL;if(${'hover_btn80_argument'} !== null) ${'hover_btn80_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn81_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn81_argument'}->isValid()) return ${'active_btn81_argument'}->getErrorMessage();
} else
${'active_btn81_argument'} = NULL;if(${'active_btn81_argument'} !== null) ${'active_btn81_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls82_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls82_argument'}->isValid()) return ${'group_srls82_argument'}->getErrorMessage();
} else
${'group_srls82_argument'} = NULL;if(${'group_srls82_argument'} !== null) ${'group_srls82_argument'}->setColumnType('text');

${'current_menu_srl83_argument'} = new ConditionArgument('current_menu_srl', $args->current_menu_srl, 'equal');
${'current_menu_srl83_argument'}->checkFilter('number');
${'current_menu_srl83_argument'}->checkNotNull();
${'current_menu_srl83_argument'}->createConditionValue();
if(!${'current_menu_srl83_argument'}->isValid()) return ${'current_menu_srl83_argument'}->getErrorMessage();
if(${'current_menu_srl83_argument'} !== null) ${'current_menu_srl83_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl72_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl73_argument'})
,new UpdateExpression('`name`', ${'name74_argument'})
,new UpdateExpression('`url`', ${'url75_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut76_argument'})
,new UpdateExpression('`open_window`', ${'open_window77_argument'})
,new UpdateExpression('`expand`', ${'expand78_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn79_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn80_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn81_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls82_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$current_menu_srl83_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>