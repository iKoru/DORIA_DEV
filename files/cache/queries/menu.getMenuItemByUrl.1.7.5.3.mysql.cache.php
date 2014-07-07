<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItemByUrl");
$query->setAction("select");
$query->setPriority("");

${'url33_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url33_argument'}->checkNotNull();
${'url33_argument'}->createConditionValue();
if(!${'url33_argument'}->isValid()) return ${'url33_argument'}->getErrorMessage();
if(${'url33_argument'} !== null) ${'url33_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut34_argument'} = new ConditionArgument('is_shortcut', $args->is_shortcut, 'equal');
${'is_shortcut34_argument'}->createConditionValue();
if(!${'is_shortcut34_argument'}->isValid()) return ${'is_shortcut34_argument'}->getErrorMessage();
} else
${'is_shortcut34_argument'} = NULL;if(${'is_shortcut34_argument'} !== null) ${'is_shortcut34_argument'}->setColumnType('char');

${'site_srl35_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl35_argument'}->checkNotNull();
${'site_srl35_argument'}->createConditionValue();
if(!${'site_srl35_argument'}->isValid()) return ${'site_srl35_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu_item`', '`MI`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`MI`.`url`',$url33_argument,"equal")
,new ConditionWithArgument('`MI`.`is_shortcut`',$is_shortcut34_argument,"equal", 'and')
,new ConditionSubquery('`MI`.`menu_srl`',new Subquery('`getSiteSrl`', array(
new SelectExpression('`menu_srl`')
), 
array(
new Table('`xe_menu`', '`M`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('`M`.`site_srl`',$site_srl35_argument,"equal")))
),
array(),
array(),
null
),"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>