<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_header.html') ?>
<!--#Meta:modules/admin/tpl/js/excanvas.min.js--><?php $__tmp=array('modules/admin/tpl/js/excanvas.min.js','','lt IE 9','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/admin/tpl/js/jquery.jqplot.min.js--><?php $__tmp=array('modules/admin/tpl/js/jquery.jqplot.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/admin/tpl/js/jqplot.barRenderer.min.js--><?php $__tmp=array('modules/admin/tpl/js/jqplot.barRenderer.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/admin/tpl/js/jqplot.categoryAxisRenderer.min.js--><?php $__tmp=array('modules/admin/tpl/js/jqplot.categoryAxisRenderer.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/admin/tpl/js/jqplot.pointLabels.min.js--><?php $__tmp=array('modules/admin/tpl/js/jqplot.pointLabels.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/admin/tpl/css/jquery.jqplot.min.css--><?php $__tmp=array('modules/admin/tpl/css/jquery.jqplot.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="content" id="content">
	<div class="x_page-header">
		<h1><?php echo $__Context->lang->control_panel ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_dashboard" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
	</div>
	<div id="checkBrowserMessage" class="message error" style="display:none;">
		<h2><?php echo $__Context->lang->checkBrowserIE8 ?></h2>
	</div>
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/admin/tpl/index/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<?php if(!$__Context->isEnviromentGatheringAgreement){ ?><form action="./" method="post" class="message info x_clearfix"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="admin" />
		<input type="hidden" name="act" value="procAdminEnviromentGatheringAgreement" />
		<input type="hidden" name="xe_validator_id" value="modules/admin/tpl/index/1" />
		<h2><?php echo $__Context->lang->install_env_agreement ?></h2>
		<p><?php echo $__Context->lang->install_env_agreement_desc ?></p>
		<div class="x_btn-group x_pull-right" style="margin-bottom:10px">
			<button type="submit" name="is_agree" value="false" class="x_btn x_btn-small"><?php echo $__Context->lang->disagree ?></button>
			<button type="submit" name="is_agree" value="true" class="x_btn x_btn-small x_btn-primary"><?php echo $__Context->lang->agree ?></button>
		</div>
	</form><?php } ?>
	<?php if($__Context->addTables || $__Context->needUpdate){ ?><div class="message update">
		<?php if($__Context->needUpdate && $__Context->addTables){ ?><h2><?php echo $__Context->lang->need_update_and_table ?></h2><?php } ?>
		<?php if($__Context->needUpdate && !$__Context->addTables){ ?><h2><?php echo $__Context->lang->need_update ?></h2><?php } ?>
		<?php if(!$__Context->needUpdate && $__Context->addTables){ ?><h2><?php echo $__Context->lang->need_table ?></h2><?php } ?>
		<ul>
		<?php if($__Context->module_list&&count($__Context->module_list))foreach($__Context->module_list as $__Context->key=>$__Context->value){ ?>
			<?php if($__Context->value->need_install){ ?><li style="margin:0 0 4px 0"><?php echo $__Context->value->module ?> - <button type="button" onclick="doInstallModule('<?php echo $__Context->value->module ?>')" class="x_btn x_btn-small"><?php echo $__Context->lang->cmd_create_db_table ?></button></li><?php } ?>
			<?php if($__Context->value->need_update){ ?><li style="margin:0 0 4px 0"><?php echo $__Context->value->module ?> - <button type="button" onclick="doUpdateModule('<?php echo $__Context->value->module ?>')" class="x_btn x_btn-small"><?php echo $__Context->lang->cmd_module_update ?></button></li><?php } ?>
		<?php } ?>
		</ul>
	</div><?php } ?>
	<?php if(count($__Context->newVersionList)){ ?><div class="message update">
		<h2><?php echo $__Context->lang->available_new_version ?></h2>
		<ul>
			<?php if($__Context->newVersionList&&count($__Context->newVersionList))foreach($__Context->newVersionList as $__Context->key=>$__Context->package){ ?><li style="margin:0 0 4px 0">
				[<?php echo $__Context->lang->typename[$__Context->package->type] ?> <?php if($__Context->package->helpUrl){ ?><a class="x_icon-question-sign" href="<?php echo $__Context->package->helpUrl ?>" target="_blank"><?php echo $__Context->lang->help ?></a><?php } ?>] <?php echo $__Context->package->title ?> ver. <?php echo $__Context->package->version ?> - <a href="<?php echo $__Context->package->url ?>&amp;return_url=<?php echo urlencode(getRequestUriByServerEnviroment()) ?>"><?php echo $__Context->lang->update ?></a>
			</li><?php } ?>
		</ul>
	</div><?php } ?>
	
	<div class="dashboard">
		<?php if($__Context->counterAddonActivated){ ?>
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_dashboard_counter.html') ?>
		<?php } ?>
		<?php if(!$__Context->counterAddonActivated){ ?>
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_dashboard_default.html') ?>
		<?php } ?>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_footer.html') ?>
