<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLog");
$query->setAction("insert");
$query->setPriority("");

${'spamfilter_log_srl164_argument'} = new Argument('spamfilter_log_srl', $args->{'spamfilter_log_srl'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'spamfilter_log_srl164_argument'}->ensureDefaultValue($sequence);
if(!${'spamfilter_log_srl164_argument'}->isValid()) return ${'spamfilter_log_srl164_argument'}->getErrorMessage();
if(${'spamfilter_log_srl164_argument'} !== null) ${'spamfilter_log_srl164_argument'}->setColumnType('number');

${'ipaddress165_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress165_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress165_argument'}->isValid()) return ${'ipaddress165_argument'}->getErrorMessage();
if(${'ipaddress165_argument'} !== null) ${'ipaddress165_argument'}->setColumnType('varchar');

${'regdate166_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate166_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate166_argument'}->isValid()) return ${'regdate166_argument'}->getErrorMessage();
if(${'regdate166_argument'} !== null) ${'regdate166_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`spamfilter_log_srl`', ${'spamfilter_log_srl164_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress165_argument'})
,new InsertExpression('`regdate`', ${'regdate166_argument'})
));
$query->setTables(array(
new Table('`xe_spamfilter_log`', '`spamfilter_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>