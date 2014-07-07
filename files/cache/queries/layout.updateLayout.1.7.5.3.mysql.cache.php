<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title150_argument'} = new Argument('title', $args->{'title'});
if(!${'title150_argument'}->isValid()) return ${'title150_argument'}->getErrorMessage();
} else
${'title150_argument'} = NULL;if(${'title150_argument'} !== null) ${'title150_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars151_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars151_argument'}->isValid()) return ${'extra_vars151_argument'}->getErrorMessage();
} else
${'extra_vars151_argument'} = NULL;if(${'extra_vars151_argument'} !== null) ${'extra_vars151_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout152_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout152_argument'}->isValid()) return ${'layout152_argument'}->getErrorMessage();
} else
${'layout152_argument'} = NULL;if(${'layout152_argument'} !== null) ${'layout152_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path153_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path153_argument'}->isValid()) return ${'layout_path153_argument'}->getErrorMessage();
} else
${'layout_path153_argument'} = NULL;if(${'layout_path153_argument'} !== null) ${'layout_path153_argument'}->setColumnType('varchar');

${'layout_srl154_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl154_argument'}->checkFilter('number');
${'layout_srl154_argument'}->checkNotNull();
${'layout_srl154_argument'}->createConditionValue();
if(!${'layout_srl154_argument'}->isValid()) return ${'layout_srl154_argument'}->getErrorMessage();
if(${'layout_srl154_argument'} !== null) ${'layout_srl154_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title150_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars151_argument'})
,new UpdateExpression('`layout`', ${'layout152_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path153_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl154_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>