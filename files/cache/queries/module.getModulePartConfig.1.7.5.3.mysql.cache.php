<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module159_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module159_argument'}->checkNotNull();
${'module159_argument'}->createConditionValue();
if(!${'module159_argument'}->isValid()) return ${'module159_argument'}->getErrorMessage();
if(${'module159_argument'} !== null) ${'module159_argument'}->setColumnType('varchar');

${'module_srl160_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl160_argument'}->checkNotNull();
${'module_srl160_argument'}->createConditionValue();
if(!${'module_srl160_argument'}->isValid()) return ${'module_srl160_argument'}->getErrorMessage();
if(${'module_srl160_argument'} !== null) ${'module_srl160_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module159_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl160_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>