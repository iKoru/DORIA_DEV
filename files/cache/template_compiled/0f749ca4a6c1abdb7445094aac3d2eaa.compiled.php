<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/doria/default.layout.css--><?php $__tmp=array('layouts/doria/default.layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/doria/default.layout.ie78.css--><?php $__tmp=array('layouts/doria/default.layout.ie78.css','','lt IE 9','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/doria/default.layout.ie7.css--><?php $__tmp=array('layouts/doria/default.layout.ie7.css','','IE 7','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->WEB_FONT == 'YES'){ ?><!--#Meta:layouts/doria/default.layout.webfont.css--><?php $__tmp=array('layouts/doria/default.layout.webfont.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:common/js/respond.min.js--><?php $__tmp=array('common/js/respond.min.js','','lt IE 9','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/doria/default.layout.js--><?php $__tmp=array('layouts/doria/default.layout.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="gnb_extended"> </div>
<div class="container">
	<header class="header">
		<!-- GNB -->
		<nav class="gnb" id="gnb">
			<h1>
				<a href="<?php echo geturl('') ?>" id="siteTitle">
					<?php if(!Context::getSiteTitle() && !$__Context->layout_info->LOGO_IMG && !$__Context->layout_info->LOGO_TEXT){ ?><img src="/layouts/doria/siteTitle.png" alt="XpressEngine"><?php } ?>
					<?php if(Context::getSiteTitle() && !$__Context->layout_info->LOGO_IMG && !$__Context->layout_info->LOGO_TEXT){;
echo Context::getSiteTitle();
} ?>
					<?php if($__Context->layout_info->LOGO_IMG){ ?><img src="<?php echo $__Context->layout_info->LOGO_IMG ?>" alt="<?php echo $__Context->layout_info->LOGO_TEXT ?>"><?php } ?>
					<?php if(!$__Context->layout_info->LOGO_IMG && $__Context->layout_info->LOGO_TEXT){;
echo $__Context->layout_info->LOGO_TEXT;
} ?>
				</a>
			</h1>
			<ul>
				<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['url']!='home'){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
					<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
				</li><?php }} ?>
			</ul>
			<div class="side">
				<?php if($__Context->logged_info->is_admin=='Y'){ ?>
				<a href="/?module=admin" style="text-decoration: none; font-size: 18px; line-height:42px; color: white;">Admin Page</a>
				<?php } ?>
				<!-- ACCOUNT -->
				<img widget="login_info" skin="doria_application" />
				<!-- /ACCOUNT -->
			</div>
		</nav>
		<!-- /GNB -->
	</header>
	<div class="gnb_dummy"> </div>
	<div<?php if($__Context->layout_info->LAYOUT_TYPE=='MAIN_PAGE'){ ?> class="body main"<?php };
if($__Context->layout_info->LAYOUT_TYPE=='SUB_PAGE'){ ?> class="body sub"<?php } ?>>
		<!-- LNB -->
		<?php if($__Context->layout_info->LAYOUT_TYPE !== 'MAIN_PAGE'){ ?><nav class="lnb">
			<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><ul>
				<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['selected']){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
					<?php if($__Context->val2['list']){ ?><ul>
						<?php if($__Context->val2['menu_name_key']=='대학'){ ?><div id="menu_change">
						  <div id="to_univ" class="btn_menu_change">대학</div>
						  <div id="to_college" class="btn_menu_change">단과대</div>
						  <div class="clear_both">
						  </div>
						</div><?php } ?>
						<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li<?php if($__Context->val3['selected']){ ?> class="active"<?php };
if(substr($__Context->val3['link'],0,1)=='*'){ ?> type="college_menu"<?php } ?> ><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php if(substr($__Context->val3['link'],0,1)=='*'){;
echo substr($__Context->val3['link'],1);
}else{;
echo $__Context->val3['link'];
} ?></a>
						</li><?php } ?>
					</ul><?php } ?>
				</li><?php }} ?>
			</ul><?php }} ?>
		</nav><?php } ?>
		<!-- /LNB -->
		<!-- CONTENT -->
		<div class="content" id="content">
			<?php echo $__Context->content ?>
		</div>
		<!-- /CONTENT -->
	</div>
</div>
<footer class="footer">
	<?php if(!$__Context->layout_info->FOOTER){ ?><p>Powered by <a href="http://xpressengine.com/">XE</a>.</p><?php } ?>
	<?php if($__Context->layout_info->FOOTER){ ?><p><?php echo $__Context->layout_info->FOOTER ?></p><?php } ?>
</footer>
