<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid94_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid94_argument'}->createConditionValue();
if(!${'mid94_argument'}->isValid()) return ${'mid94_argument'}->getErrorMessage();
} else
${'mid94_argument'} = NULL;if(${'mid94_argument'} !== null) ${'mid94_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl95_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl95_argument'}->createConditionValue();
if(!${'module_srl95_argument'}->isValid()) return ${'module_srl95_argument'}->getErrorMessage();
} else
${'module_srl95_argument'} = NULL;if(${'module_srl95_argument'} !== null) ${'module_srl95_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl96_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl96_argument'}->createConditionValue();
if(!${'site_srl96_argument'}->isValid()) return ${'site_srl96_argument'}->getErrorMessage();
} else
${'site_srl96_argument'} = NULL;if(${'site_srl96_argument'} !== null) ${'site_srl96_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid94_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl95_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl96_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>