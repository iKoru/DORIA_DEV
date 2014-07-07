<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl44_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl44_argument'}->checkFilter('number');
${'site_srl44_argument'}->ensureDefaultValue('0');
${'site_srl44_argument'}->checkNotNull();
${'site_srl44_argument'}->createConditionValue();
if(!${'site_srl44_argument'}->isValid()) return ${'site_srl44_argument'}->getErrorMessage();
if(${'site_srl44_argument'} !== null) ${'site_srl44_argument'}->setColumnType('number');

${'layout_type45_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type45_argument'}->ensureDefaultValue('P');
${'layout_type45_argument'}->createConditionValue();
if(!${'layout_type45_argument'}->isValid()) return ${'layout_type45_argument'}->getErrorMessage();
if(${'layout_type45_argument'} !== null) ${'layout_type45_argument'}->setColumnType('char');

${'layout46_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout46_argument'}->ensureDefaultValue('.');
${'layout46_argument'}->createConditionValue();
if(!${'layout46_argument'}->isValid()) return ${'layout46_argument'}->getErrorMessage();
if(${'layout46_argument'} !== null) ${'layout46_argument'}->setColumnType('varchar');

${'sort_index47_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index47_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index47_argument'}->isValid()) return ${'sort_index47_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl44_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type45_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout46_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index47_argument'}, "desc")
));
$query->setLimit();
return $query; ?>