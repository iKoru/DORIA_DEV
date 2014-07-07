<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenu");
$query->setAction("insert");
$query->setPriority("");

${'menu_srl67_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl67_argument'}->checkFilter('number');
${'menu_srl67_argument'}->checkNotNull();
if(!${'menu_srl67_argument'}->isValid()) return ${'menu_srl67_argument'}->getErrorMessage();
if(${'menu_srl67_argument'} !== null) ${'menu_srl67_argument'}->setColumnType('number');

${'site_srl68_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl68_argument'}->checkFilter('number');
${'site_srl68_argument'}->ensureDefaultValue('0');
${'site_srl68_argument'}->checkNotNull();
if(!${'site_srl68_argument'}->isValid()) return ${'site_srl68_argument'}->getErrorMessage();
if(${'site_srl68_argument'} !== null) ${'site_srl68_argument'}->setColumnType('number');

${'title69_argument'} = new Argument('title', $args->{'title'});
${'title69_argument'}->checkNotNull();
if(!${'title69_argument'}->isValid()) return ${'title69_argument'}->getErrorMessage();
if(${'title69_argument'} !== null) ${'title69_argument'}->setColumnType('varchar');

${'listorder70_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder70_argument'}->checkNotNull();
if(!${'listorder70_argument'}->isValid()) return ${'listorder70_argument'}->getErrorMessage();
if(${'listorder70_argument'} !== null) ${'listorder70_argument'}->setColumnType('number');

${'regdate71_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate71_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate71_argument'}->isValid()) return ${'regdate71_argument'}->getErrorMessage();
if(${'regdate71_argument'} !== null) ${'regdate71_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_srl`', ${'menu_srl67_argument'})
,new InsertExpression('`site_srl`', ${'site_srl68_argument'})
,new InsertExpression('`title`', ${'title69_argument'})
,new InsertExpression('`listorder`', ${'listorder70_argument'})
,new InsertExpression('`regdate`', ${'regdate71_argument'})
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>