<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title48_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title48_argument'}->checkNotNull();
${'title48_argument'}->createConditionValue();
if(!${'title48_argument'}->isValid()) return ${'title48_argument'}->getErrorMessage();
if(${'title48_argument'} !== null) ${'title48_argument'}->setColumnType('varchar');

${'site_srl49_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl49_argument'}->ensureDefaultValue('0');
${'site_srl49_argument'}->createConditionValue();
if(!${'site_srl49_argument'}->isValid()) return ${'site_srl49_argument'}->getErrorMessage();
if(${'site_srl49_argument'} !== null) ${'site_srl49_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title48_argument,"in")
,new ConditionWithArgument('`site_srl`',$site_srl49_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>