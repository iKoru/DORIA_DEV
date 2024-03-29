<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl73_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl73_argument'}->checkNotNull();
${'site_srl73_argument'}->createConditionValue();
if(!${'site_srl73_argument'}->isValid()) return ${'site_srl73_argument'}->getErrorMessage();
if(${'site_srl73_argument'} !== null) ${'site_srl73_argument'}->setColumnType('number');

${'addon74_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon74_argument'}->checkNotNull();
${'addon74_argument'}->createConditionValue();
if(!${'addon74_argument'}->isValid()) return ${'addon74_argument'}->getErrorMessage();
if(${'addon74_argument'} !== null) ${'addon74_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl73_argument,"equal")
,new ConditionWithArgument('`addon`',$addon74_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>