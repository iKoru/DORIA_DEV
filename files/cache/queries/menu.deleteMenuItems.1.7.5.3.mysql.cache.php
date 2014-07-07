<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteMenuItems");
$query->setAction("delete");
$query->setPriority("");

${'menu_srl88_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl88_argument'}->checkFilter('number');
${'menu_srl88_argument'}->checkNotNull();
${'menu_srl88_argument'}->createConditionValue();
if(!${'menu_srl88_argument'}->isValid()) return ${'menu_srl88_argument'}->getErrorMessage();
if(${'menu_srl88_argument'} !== null) ${'menu_srl88_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl88_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>