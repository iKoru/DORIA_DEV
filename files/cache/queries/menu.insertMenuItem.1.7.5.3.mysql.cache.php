<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl127_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl127_argument'}->checkFilter('number');
${'menu_item_srl127_argument'}->checkNotNull();
if(!${'menu_item_srl127_argument'}->isValid()) return ${'menu_item_srl127_argument'}->getErrorMessage();
if(${'menu_item_srl127_argument'} !== null) ${'menu_item_srl127_argument'}->setColumnType('number');

${'parent_srl128_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl128_argument'}->checkFilter('number');
${'parent_srl128_argument'}->ensureDefaultValue('0');
if(!${'parent_srl128_argument'}->isValid()) return ${'parent_srl128_argument'}->getErrorMessage();
if(${'parent_srl128_argument'} !== null) ${'parent_srl128_argument'}->setColumnType('number');

${'menu_srl129_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl129_argument'}->checkFilter('number');
${'menu_srl129_argument'}->checkNotNull();
if(!${'menu_srl129_argument'}->isValid()) return ${'menu_srl129_argument'}->getErrorMessage();
if(${'menu_srl129_argument'} !== null) ${'menu_srl129_argument'}->setColumnType('number');

${'name130_argument'} = new Argument('name', $args->{'name'});
${'name130_argument'}->checkNotNull();
if(!${'name130_argument'}->isValid()) return ${'name130_argument'}->getErrorMessage();
if(${'name130_argument'} !== null) ${'name130_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url131_argument'} = new Argument('url', $args->{'url'});
if(!${'url131_argument'}->isValid()) return ${'url131_argument'}->getErrorMessage();
} else
${'url131_argument'} = NULL;if(${'url131_argument'} !== null) ${'url131_argument'}->setColumnType('varchar');

${'is_shortcut132_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut132_argument'}->ensureDefaultValue('N');
${'is_shortcut132_argument'}->checkNotNull();
if(!${'is_shortcut132_argument'}->isValid()) return ${'is_shortcut132_argument'}->getErrorMessage();
if(${'is_shortcut132_argument'} !== null) ${'is_shortcut132_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window133_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window133_argument'}->isValid()) return ${'open_window133_argument'}->getErrorMessage();
} else
${'open_window133_argument'} = NULL;if(${'open_window133_argument'} !== null) ${'open_window133_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand134_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand134_argument'}->isValid()) return ${'expand134_argument'}->getErrorMessage();
} else
${'expand134_argument'} = NULL;if(${'expand134_argument'} !== null) ${'expand134_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn135_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn135_argument'}->isValid()) return ${'normal_btn135_argument'}->getErrorMessage();
} else
${'normal_btn135_argument'} = NULL;if(${'normal_btn135_argument'} !== null) ${'normal_btn135_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn136_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn136_argument'}->isValid()) return ${'hover_btn136_argument'}->getErrorMessage();
} else
${'hover_btn136_argument'} = NULL;if(${'hover_btn136_argument'} !== null) ${'hover_btn136_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn137_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn137_argument'}->isValid()) return ${'active_btn137_argument'}->getErrorMessage();
} else
${'active_btn137_argument'} = NULL;if(${'active_btn137_argument'} !== null) ${'active_btn137_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls138_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls138_argument'}->isValid()) return ${'group_srls138_argument'}->getErrorMessage();
} else
${'group_srls138_argument'} = NULL;if(${'group_srls138_argument'} !== null) ${'group_srls138_argument'}->setColumnType('text');

${'listorder139_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder139_argument'}->checkNotNull();
if(!${'listorder139_argument'}->isValid()) return ${'listorder139_argument'}->getErrorMessage();
if(${'listorder139_argument'} !== null) ${'listorder139_argument'}->setColumnType('number');

${'regdate140_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate140_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate140_argument'}->isValid()) return ${'regdate140_argument'}->getErrorMessage();
if(${'regdate140_argument'} !== null) ${'regdate140_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl127_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl128_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl129_argument'})
,new InsertExpression('`name`', ${'name130_argument'})
,new InsertExpression('`url`', ${'url131_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut132_argument'})
,new InsertExpression('`open_window`', ${'open_window133_argument'})
,new InsertExpression('`expand`', ${'expand134_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn135_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn136_argument'})
,new InsertExpression('`active_btn`', ${'active_btn137_argument'})
,new InsertExpression('`group_srls`', ${'group_srls138_argument'})
,new InsertExpression('`listorder`', ${'listorder139_argument'})
,new InsertExpression('`regdate`', ${'regdate140_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>