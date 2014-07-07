<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDeniedIPList");
$query->setAction("select");
$query->setPriority("");

${'sort_index162_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index162_argument'}->ensureDefaultValue('regdate');
if(!${'sort_index162_argument'}->isValid()) return ${'sort_index162_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_spamfilter_denied_ip`', '`spamfilter_denied_ip`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index162_argument'}, "desc")
));
$query->setLimit();
return $query; ?>