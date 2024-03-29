<?php if(!defined("__XE__"))exit;?><div>
	<section class="status">
		<h2><?php echo $__Context->lang->uv ?></h2>
		<div style="margin:10px 15px;height:142px" id="visitors"></div>
		<div class="more">
			<dl>
				<dt><?php echo $__Context->lang->menu_gnb['user'] ?>: </dt><dd><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList') ?>"><?php echo number_format($__Context->status->member->totalCount) ?> (<?php if($__Context->status->member->todayCount > 0){ ?>+<?php };
echo number_format($__Context->status->member->todayCount) ?>)</a></dd>
			</dl>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispCounterAdminIndex') ?>"><i>&rsaquo;</i> <?php echo $__Context->lang->details ?></a>
		</div>
	</section>
	<section class="status">
		<h2><?php echo $__Context->lang->pv ?></h2>
		<div style="margin:10px 15px;height:142px" id="page_views"></div>
		<div class="more">
			<dl>
				<dt><?php echo $__Context->lang->menu_gnb_sub['document'] ?>: </dt><dd><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminList') ?>"><?php echo number_format($__Context->status->document->totalCount) ?> (<?php if($__Context->status->document->todayCount > 0){ ?>+<?php };
echo number_format($__Context->status->document->todayCount) ?>)</a></dd>
			</dl>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispCounterAdminIndex') ?>"><i>&rsaquo;</i> <?php echo $__Context->lang->details ?></a>
		</div>
	</section>
	<style scoped>.jqplot-table-legend{background:#fff;top:13px!important}</style>
</div>
<div>
	<section class="document">
		<h2><?php echo $__Context->lang->latest_documents ?></h2>
		<ul>
			<?php if($__Context->latestDocumentList&&count($__Context->latestDocumentList))foreach($__Context->latestDocumentList as $__Context->key=>$__Context->value){ ?><li>
				<?php $__Context->document = $__Context->value->variables ?>
				<a href="<?php echo getUrl('', 'document_srl', $__Context->document['document_srl']) ?>" target="_blank"><?php if(trim($__Context->value->getTitle())){;
echo $__Context->value->getTitle();
}else{ ?><strong><?php echo $__Context->lang->no_title_document ?></strong><?php } ?></a> 
				<span class="side"><?php echo $__Context->value->getNickName() ?></span>
				<form class="action" method="POST"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="module" value="admin" />
					<input type="hidden" name="act" value="procDocumentManageCheckedDocument" />
					<input type="hidden" name="cart[]" value="<?php echo $__Context->document['document_srl'] ?>" />
					<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'module', 'admin') ?>" />
					<button type="submit" name="type" value="trash" class="x_icon-trash"><?php echo $__Context->lang->cmd_trash ?></button>
					<button type="submit" name="type" value="delete" class="x_icon-remove"><?php echo $__Context->lang->cmd_delete ?></button>
				</form>
			</li><?php } ?>
			<?php if(!is_array($__Context->latestDocumentList) || count($__Context->latestDocumentList) < 1){ ?><li><?php echo $__Context->lang->no_data ?></li><?php } ?>
		</ul>
		<p class="more"><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminList') ?>"><i>&rsaquo;</i> <?php echo $__Context->lang->more ?></a></p>
	</section>
	<section class="reply">
		<h2><?php echo $__Context->lang->latest_comments ?></h2>
		<ul>
			<?php if($__Context->latestCommentList&&count($__Context->latestCommentList))foreach($__Context->latestCommentList as $__Context->key=>$__Context->value){ ?><li>
				<a href="<?php echo getUrl('', 'document_srl', $__Context->value->document_srl) ?>#comment_<?php echo $__Context->value->comment_srl ?>" target="_blank"><?php if(trim($__Context->value->content)){;
echo $__Context->value->getSummary();
}else{ ?><strong><?php echo $__Context->lang->no_text_comment ?></strong><?php } ?></a> 
				<span class="side"><?php echo $__Context->value->getNickName() ?></span> 
				<form class="action"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="module" value="admin" />
					<input type="hidden" name="act" value="procCommentAdminDeleteChecked" />
					<input type="hidden" name="cart[]" value="<?php echo $__Context->value->comment_srl ?>" />
					<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'module', 'admin') ?>" />
					<button type="submit" name="is_trash" value="true" class="x_icon-trash"><?php echo $__Context->lang->cmd_trash ?></button>
					<button type="submit" name="is_trash" value="false" class="x_icon-remove"><?php echo $__Context->lang->cmd_delete ?></button>
				</form>
			</li><?php } ?>
			<?php if(!is_array($__Context->latestCommentList) || count($__Context->latestCommentList) < 1){ ?><li><?php echo $__Context->lang->no_data ?></li><?php } ?>
		</ul>
		<p class="more"><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispCommentAdminList') ?>"><i>&rsaquo;</i> <?php echo $__Context->lang->more ?></a></p>
	</section>
</div>
<script>
xe.lang.this_week = '<?php echo $__Context->lang->this_week ?>';
xe.lang.last_week = '<?php echo $__Context->lang->last_week ?>';
xe.lang.next_week = '<?php echo $__Context->lang->next_week ?>';
xe.lang.mon = '<?php echo $__Context->lang->mon ?>';
xe.lang.tue = '<?php echo $__Context->lang->tue ?>';
xe.lang.wed = '<?php echo $__Context->lang->wed ?>';
xe.lang.thu = '<?php echo $__Context->lang->thu ?>';
xe.lang.fri = '<?php echo $__Context->lang->fri ?>';
xe.lang.sat = '<?php echo $__Context->lang->sat ?>';
xe.lang.sun = '<?php echo $__Context->lang->sun ?>';
jQuery(function($)
{
	// Dashboard portlet UI
	$('.dashboard>div>section>ul>li')
	.bind('mouseenter focusin', function(){
		$(this).addClass('hover').find('>.action').show();
	})
	.bind('mouseleave focusout', function()
	{
		if(!$(this).find(':focus').length)
		{
			$(this).removeClass('hover').find('>.action').hide();
		}
	});
	// check browser version
	if($.browser.msie == true ) {
		var arrBrowserVersion = $.browser.version.split('.');
		if(parseInt(arrBrowserVersion[0]) <= 8) {
			$('#checkBrowserMessage').show();
		}
	}
});
function obj2Array(htObj)
{
	var aRes = [];
	for(var x in htObj)
	{
		if(!htObj.hasOwnProperty(x)) continue;
		aRes.push(htObj[x]);
	}
	return aRes;
}
jQuery(function ($)
{
	$.exec_json("counter.getWeeklyUniqueVisitor", {}, function(htRes)
	{
		var aLastWeek = obj2Array(htRes.last_week.list);
		var aThisWeek = obj2Array(htRes.this_week.list);
		drawChart("visitors", "Weekly Visitors", aLastWeek, aThisWeek);
	});
	$.exec_json("counter.getWeeklyPageView", {}, function(htRes)
	{
		var aLastWeek = obj2Array(htRes.last_week.list);
		var aThisWeek = obj2Array(htRes.this_week.list);
		drawChart("page_views", "Weekly Page Views", aLastWeek, aThisWeek);
	});
});
function drawChart(sContainerId, sTitle, aLastWeek, aThisWeek)
{
	$ = jQuery;
	var s1 = aLastWeek;
	var s2 = aThisWeek;
	// Can specify a custom tick Array.
	// Ticks should match up one for each y value (category) in the series.
	var ticks = [xe.lang.sun,xe.lang.mon,xe.lang.tue,xe.lang.wed,xe.lang.thu,xe.lang.fri,xe.lang.sat];
	var plot1 = $.jqplot(sContainerId, [s1, s2], {
		seriesDefaults:{
			renderer:$.jqplot.BarRenderer,
			rendererOptions: {fillToZero: true}
		},
		series:[
			{label: xe.lang.last_week},
			{label: xe.lang.this_week}
		],
		legend:
		{
			show: true,
			placement: 'outsideGrid'
		},
		axes: {
			xaxis: {
				renderer: $.jqplot.CategoryAxisRenderer, ticks: ticks
			},
			yaxis: {
				min: 0, ticks: 1, pad: 1.05
			}
		}
	});
};
</script>
