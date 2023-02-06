<?php
/* Smarty version 3.1.39, created on 2023-02-06 11:51:11
  from '/home/fifonsi/PhpstormProjects/vtigercrm/layouts/v7/modules/Install/InstallPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63e0e9af359ec2_81021909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2019fd3941387a0ee36bc7a6b3b55ed8b4439acc' => 
    array (
      0 => '/home/fifonsi/PhpstormProjects/vtigercrm/layouts/v7/modules/Install/InstallPreProcess.tpl',
      1 => 1669872319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e0e9af359ec2_81021909 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }
}
