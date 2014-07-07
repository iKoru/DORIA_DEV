<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'user_id51_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id51_argument'}->checkNotNull();
if(!${'user_id51_argument'}->isValid()) return ${'user_id51_argument'}->getErrorMessage();
if(${'user_id51_argument'} !== null) ${'user_id51_argument'}->setColumnType('varchar');

${'regdate52_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate52_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate52_argument'}->isValid()) return ${'regdate52_argument'}->getErrorMessage();
if(${'regdate52_argument'} !== null) ${'regdate52_argument'}->setColumnType('date');

${'description53_argument'} = new Argument('description', $args->{'description'});
${'description53_argument'}->ensureDefaultValue('');
if(!${'description53_argument'}->isValid()) return ${'description53_argument'}->getErrorMessage();
if(${'description53_argument'} !== null) ${'description53_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order54_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order54_argument'}->isValid()) return ${'list_order54_argument'}->getErrorMessage();
} else
${'list_order54_argument'} = NULL;if(${'list_order54_argument'} !== null) ${'list_order54_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`user_id`', ${'user_id51_argument'})
,new InsertExpression('`regdate`', ${'regdate52_argument'})
,new InsertExpression('`description`', ${'description53_argument'})
,new InsertExpression('`list_order`', ${'list_order54_argument'})
));
$query->setTables(array(
new Table('`xe_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>