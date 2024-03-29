<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenus");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl91_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl91_argument'}->checkFilter('number');
${'site_srl91_argument'}->createConditionValue();
if(!${'site_srl91_argument'}->isValid()) return ${'site_srl91_argument'}->getErrorMessage();
} else
${'site_srl91_argument'} = NULL;if(${'site_srl91_argument'} !== null) ${'site_srl91_argument'}->setColumnType('number');

${'sort_index92_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index92_argument'}->ensureDefaultValue('listorder');
if(!${'sort_index92_argument'}->isValid()) return ${'sort_index92_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl91_argument,"equal")
,new ConditionWithoutArgument('`title`',"'__ADMINMENU_V17__'","notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index92_argument'}, "desc")
));
$query->setLimit();
return $query; ?>