<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act50_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act50_argument'}->createConditionValue();
if(!${'act50_argument'}->isValid()) return ${'act50_argument'}->getErrorMessage();
} else
${'act50_argument'} = NULL;if(${'act50_argument'} !== null) ${'act50_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act50_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>