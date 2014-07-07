<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertActionForward");
$query->setAction("insert");
$query->setPriority("");

${'act64_argument'} = new Argument('act', $args->{'act'});
${'act64_argument'}->checkNotNull();
if(!${'act64_argument'}->isValid()) return ${'act64_argument'}->getErrorMessage();
if(${'act64_argument'} !== null) ${'act64_argument'}->setColumnType('varchar');

${'module65_argument'} = new Argument('module', $args->{'module'});
${'module65_argument'}->checkNotNull();
if(!${'module65_argument'}->isValid()) return ${'module65_argument'}->getErrorMessage();
if(${'module65_argument'} !== null) ${'module65_argument'}->setColumnType('varchar');

${'type66_argument'} = new Argument('type', $args->{'type'});
${'type66_argument'}->checkNotNull();
if(!${'type66_argument'}->isValid()) return ${'type66_argument'}->getErrorMessage();
if(${'type66_argument'} !== null) ${'type66_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`act`', ${'act64_argument'})
,new InsertExpression('`module`', ${'module65_argument'})
,new InsertExpression('`type`', ${'type66_argument'})
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>