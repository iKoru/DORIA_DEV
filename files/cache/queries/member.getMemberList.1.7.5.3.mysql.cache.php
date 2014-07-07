<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin24_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin24_argument'}->createConditionValue();
if(!${'is_admin24_argument'}->isValid()) return ${'is_admin24_argument'}->getErrorMessage();
} else
${'is_admin24_argument'} = NULL;if(${'is_admin24_argument'} !== null) ${'is_admin24_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied25_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied25_argument'}->createConditionValue();
if(!${'is_denied25_argument'}->isValid()) return ${'is_denied25_argument'}->getErrorMessage();
} else
${'is_denied25_argument'} = NULL;if(${'is_denied25_argument'} !== null) ${'is_denied25_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls26_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls26_argument'}->createConditionValue();
if(!${'member_srls26_argument'}->isValid()) return ${'member_srls26_argument'}->getErrorMessage();
} else
${'member_srls26_argument'} = NULL;if(${'member_srls26_argument'} !== null) ${'member_srls26_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id27_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id27_argument'}->createConditionValue();
if(!${'s_user_id27_argument'}->isValid()) return ${'s_user_id27_argument'}->getErrorMessage();
} else
${'s_user_id27_argument'} = NULL;if(${'s_user_id27_argument'} !== null) ${'s_user_id27_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name28_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name28_argument'}->createConditionValue();
if(!${'s_user_name28_argument'}->isValid()) return ${'s_user_name28_argument'}->getErrorMessage();
} else
${'s_user_name28_argument'} = NULL;if(${'s_user_name28_argument'} !== null) ${'s_user_name28_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name29_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name29_argument'}->createConditionValue();
if(!${'s_nick_name29_argument'}->isValid()) return ${'s_nick_name29_argument'}->getErrorMessage();
} else
${'s_nick_name29_argument'} = NULL;if(${'s_nick_name29_argument'} !== null) ${'s_nick_name29_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name30_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name30_argument'}->createConditionValue();
if(!${'html_nick_name30_argument'}->isValid()) return ${'html_nick_name30_argument'}->getErrorMessage();
} else
${'html_nick_name30_argument'} = NULL;if(${'html_nick_name30_argument'} !== null) ${'html_nick_name30_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address31_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address31_argument'}->createConditionValue();
if(!${'s_email_address31_argument'}->isValid()) return ${'s_email_address31_argument'}->getErrorMessage();
} else
${'s_email_address31_argument'} = NULL;if(${'s_email_address31_argument'} !== null) ${'s_email_address31_argument'}->setColumnType('varchar');
if(isset($args->s_extra_vars)) {
${'s_extra_vars32_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars32_argument'}->createConditionValue();
if(!${'s_extra_vars32_argument'}->isValid()) return ${'s_extra_vars32_argument'}->getErrorMessage();
} else
${'s_extra_vars32_argument'} = NULL;if(${'s_extra_vars32_argument'} !== null) ${'s_extra_vars32_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate33_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate33_argument'}->createConditionValue();
if(!${'s_regdate33_argument'}->isValid()) return ${'s_regdate33_argument'}->getErrorMessage();
} else
${'s_regdate33_argument'} = NULL;if(${'s_regdate33_argument'} !== null) ${'s_regdate33_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login34_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login34_argument'}->createConditionValue();
if(!${'s_last_login34_argument'}->isValid()) return ${'s_last_login34_argument'}->getErrorMessage();
} else
${'s_last_login34_argument'} = NULL;if(${'s_last_login34_argument'} !== null) ${'s_last_login34_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more35_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more35_argument'}->createConditionValue();
if(!${'s_regdate_more35_argument'}->isValid()) return ${'s_regdate_more35_argument'}->getErrorMessage();
} else
${'s_regdate_more35_argument'} = NULL;if(${'s_regdate_more35_argument'} !== null) ${'s_regdate_more35_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less36_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less36_argument'}->createConditionValue();
if(!${'s_regdate_less36_argument'}->isValid()) return ${'s_regdate_less36_argument'}->getErrorMessage();
} else
${'s_regdate_less36_argument'} = NULL;if(${'s_regdate_less36_argument'} !== null) ${'s_regdate_less36_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more37_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more37_argument'}->createConditionValue();
if(!${'s_last_login_more37_argument'}->isValid()) return ${'s_last_login_more37_argument'}->getErrorMessage();
} else
${'s_last_login_more37_argument'} = NULL;if(${'s_last_login_more37_argument'} !== null) ${'s_last_login_more37_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less38_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less38_argument'}->createConditionValue();
if(!${'s_last_login_less38_argument'}->isValid()) return ${'s_last_login_less38_argument'}->getErrorMessage();
} else
${'s_last_login_less38_argument'} = NULL;if(${'s_last_login_less38_argument'} !== null) ${'s_last_login_less38_argument'}->setColumnType('date');

${'page41_argument'} = new Argument('page', $args->{'page'});
${'page41_argument'}->ensureDefaultValue('1');
if(!${'page41_argument'}->isValid()) return ${'page41_argument'}->getErrorMessage();

${'page_count42_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count42_argument'}->ensureDefaultValue('10');
if(!${'page_count42_argument'}->isValid()) return ${'page_count42_argument'}->getErrorMessage();

${'list_count43_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count43_argument'}->ensureDefaultValue('20');
if(!${'list_count43_argument'}->isValid()) return ${'list_count43_argument'}->getErrorMessage();

${'sort_index39_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index39_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index39_argument'}->isValid()) return ${'sort_index39_argument'}->getErrorMessage();

${'sort_order40_argument'} = new SortArgument('sort_order40', $args->sort_order);
${'sort_order40_argument'}->ensureDefaultValue('asc');
if(!${'sort_order40_argument'}->isValid()) return ${'sort_order40_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin24_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied25_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls26_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id27_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name28_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name29_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name30_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address31_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars32_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate33_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login34_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more35_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less36_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more37_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less38_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index39_argument'}, $sort_order40_argument)
));
$query->setLimit(new Limit(${'list_count43_argument'}, ${'page41_argument'}, ${'page_count42_argument'}));
return $query; ?>