<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDeniedWordList");
$query->setAction("select");
$query->setPriority("");

${'sort_index163_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index163_argument'}->ensureDefaultValue('regdate');
if(!${'sort_index163_argument'}->isValid()) return ${'sort_index163_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_spamfilter_denied_word`', '`spamfilter_denied_word`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index163_argument'}, "desc")
));
$query->setLimit();
return $query; ?>