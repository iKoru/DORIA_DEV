<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsSiteDomain");
$query->setAction("select");
$query->setPriority("");

${'domain100_argument'} = new ConditionArgument('domain', $args->domain, 'equal');
${'domain100_argument'}->checkNotNull();
${'domain100_argument'}->createConditionValue();
if(!${'domain100_argument'}->isValid()) return ${'domain100_argument'}->getErrorMessage();
if(${'domain100_argument'} !== null) ${'domain100_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`domain`',$domain100_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>