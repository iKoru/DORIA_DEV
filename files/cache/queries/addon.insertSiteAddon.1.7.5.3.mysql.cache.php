<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl55_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl55_argument'}->checkNotNull();
if(!${'site_srl55_argument'}->isValid()) return ${'site_srl55_argument'}->getErrorMessage();
if(${'site_srl55_argument'} !== null) ${'site_srl55_argument'}->setColumnType('number');

${'addon56_argument'} = new Argument('addon', $args->{'addon'});
${'addon56_argument'}->checkNotNull();
if(!${'addon56_argument'}->isValid()) return ${'addon56_argument'}->getErrorMessage();
if(${'addon56_argument'} !== null) ${'addon56_argument'}->setColumnType('varchar');

${'is_used57_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used57_argument'}->ensureDefaultValue('N');
${'is_used57_argument'}->checkNotNull();
if(!${'is_used57_argument'}->isValid()) return ${'is_used57_argument'}->getErrorMessage();
if(${'is_used57_argument'} !== null) ${'is_used57_argument'}->setColumnType('char');

${'is_used_m58_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m58_argument'}->ensureDefaultValue('N');
if(!${'is_used_m58_argument'}->isValid()) return ${'is_used_m58_argument'}->getErrorMessage();
if(${'is_used_m58_argument'} !== null) ${'is_used_m58_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars59_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars59_argument'}->isValid()) return ${'extra_vars59_argument'}->getErrorMessage();
} else
${'extra_vars59_argument'} = NULL;if(${'extra_vars59_argument'} !== null) ${'extra_vars59_argument'}->setColumnType('text');

${'regdate60_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate60_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate60_argument'}->isValid()) return ${'regdate60_argument'}->getErrorMessage();
if(${'regdate60_argument'} !== null) ${'regdate60_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl55_argument'})
,new InsertExpression('`addon`', ${'addon56_argument'})
,new InsertExpression('`is_used`', ${'is_used57_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m58_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars59_argument'})
,new InsertExpression('`regdate`', ${'regdate60_argument'})
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>