<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");

${'site_srl97_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl97_argument'}->ensureDefaultValue('0');
${'site_srl97_argument'}->checkNotNull();
${'site_srl97_argument'}->createConditionValue();
if(!${'site_srl97_argument'}->isValid()) return ${'site_srl97_argument'}->getErrorMessage();
if(${'site_srl97_argument'} !== null) ${'site_srl97_argument'}->setColumnType('number');

${'mid98_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid98_argument'}->checkNotNull();
${'mid98_argument'}->createConditionValue();
if(!${'mid98_argument'}->isValid()) return ${'mid98_argument'}->getErrorMessage();
if(${'mid98_argument'} !== null) ${'mid98_argument'}->setColumnType('varchar');

${'module_srl99_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl99_argument'}->ensureDefaultValue('0');
${'module_srl99_argument'}->checkNotNull();
${'module_srl99_argument'}->createConditionValue();
if(!${'module_srl99_argument'}->isValid()) return ${'module_srl99_argument'}->getErrorMessage();
if(${'module_srl99_argument'} !== null) ${'module_srl99_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl97_argument,"equal")
,new ConditionWithArgument('`mid`',$mid98_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl99_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>