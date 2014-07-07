<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl124_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl124_argument'}->checkFilter('number');
${'module_srl124_argument'}->checkNotNull();
if(!${'module_srl124_argument'}->isValid()) return ${'module_srl124_argument'}->getErrorMessage();
if(${'module_srl124_argument'} !== null) ${'module_srl124_argument'}->setColumnType('number');

${'name125_argument'} = new Argument('name', $args->{'name'});
${'name125_argument'}->checkNotNull();
if(!${'name125_argument'}->isValid()) return ${'name125_argument'}->getErrorMessage();
if(${'name125_argument'} !== null) ${'name125_argument'}->setColumnType('varchar');

${'value126_argument'} = new Argument('value', $args->{'value'});
${'value126_argument'}->checkNotNull();
if(!${'value126_argument'}->isValid()) return ${'value126_argument'}->getErrorMessage();
if(${'value126_argument'} !== null) ${'value126_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl124_argument'})
,new InsertExpression('`name`', ${'name125_argument'})
,new InsertExpression('`value`', ${'value126_argument'})
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>