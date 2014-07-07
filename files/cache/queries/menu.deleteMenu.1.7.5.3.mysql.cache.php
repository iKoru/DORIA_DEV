<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteMenu");
$query->setAction("delete");
$query->setPriority("");

${'menu_srl89_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl89_argument'}->checkFilter('number');
${'menu_srl89_argument'}->checkNotNull();
${'menu_srl89_argument'}->createConditionValue();
if(!${'menu_srl89_argument'}->isValid()) return ${'menu_srl89_argument'}->getErrorMessage();
if(${'menu_srl89_argument'} !== null) ${'menu_srl89_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl89_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>