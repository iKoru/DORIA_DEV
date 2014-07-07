<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLayout");
$query->setAction("insert");
$query->setPriority("");

${'layout_srl141_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
${'layout_srl141_argument'}->checkFilter('number');
${'layout_srl141_argument'}->checkNotNull();
if(!${'layout_srl141_argument'}->isValid()) return ${'layout_srl141_argument'}->getErrorMessage();
if(${'layout_srl141_argument'} !== null) ${'layout_srl141_argument'}->setColumnType('number');

${'site_srl142_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl142_argument'}->checkFilter('number');
${'site_srl142_argument'}->ensureDefaultValue('0');
${'site_srl142_argument'}->checkNotNull();
if(!${'site_srl142_argument'}->isValid()) return ${'site_srl142_argument'}->getErrorMessage();
if(${'site_srl142_argument'} !== null) ${'site_srl142_argument'}->setColumnType('number');

${'layout143_argument'} = new Argument('layout', $args->{'layout'});
${'layout143_argument'}->checkNotNull();
if(!${'layout143_argument'}->isValid()) return ${'layout143_argument'}->getErrorMessage();
if(${'layout143_argument'} !== null) ${'layout143_argument'}->setColumnType('varchar');

${'title144_argument'} = new Argument('title', $args->{'title'});
${'title144_argument'}->checkNotNull();
if(!${'title144_argument'}->isValid()) return ${'title144_argument'}->getErrorMessage();
if(${'title144_argument'} !== null) ${'title144_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl145_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl145_argument'}->isValid()) return ${'module_srl145_argument'}->getErrorMessage();
} else
${'module_srl145_argument'} = NULL;if(${'module_srl145_argument'} !== null) ${'module_srl145_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars146_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars146_argument'}->isValid()) return ${'extra_vars146_argument'}->getErrorMessage();
} else
${'extra_vars146_argument'} = NULL;if(${'extra_vars146_argument'} !== null) ${'extra_vars146_argument'}->setColumnType('text');
if(isset($args->layout_path)) {
${'layout_path147_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path147_argument'}->isValid()) return ${'layout_path147_argument'}->getErrorMessage();
} else
${'layout_path147_argument'} = NULL;if(${'layout_path147_argument'} !== null) ${'layout_path147_argument'}->setColumnType('varchar');

${'regdate148_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate148_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate148_argument'}->isValid()) return ${'regdate148_argument'}->getErrorMessage();
if(${'regdate148_argument'} !== null) ${'regdate148_argument'}->setColumnType('date');

${'layout_type149_argument'} = new Argument('layout_type', $args->{'layout_type'});
${'layout_type149_argument'}->ensureDefaultValue('P');
if(!${'layout_type149_argument'}->isValid()) return ${'layout_type149_argument'}->getErrorMessage();
if(${'layout_type149_argument'} !== null) ${'layout_type149_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`layout_srl`', ${'layout_srl141_argument'})
,new InsertExpression('`site_srl`', ${'site_srl142_argument'})
,new InsertExpression('`layout`', ${'layout143_argument'})
,new InsertExpression('`title`', ${'title144_argument'})
,new InsertExpression('`module_srl`', ${'module_srl145_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars146_argument'})
,new InsertExpression('`layout_path`', ${'layout_path147_argument'})
,new InsertExpression('`regdate`', ${'regdate148_argument'})
,new InsertExpression('`layout_type`', ${'layout_type149_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>