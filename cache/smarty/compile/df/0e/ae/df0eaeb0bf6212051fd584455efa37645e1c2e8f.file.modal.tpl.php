<?php /* Smarty version Smarty-3.1.19, created on 2015-02-14 17:52:01
         compiled from "C:\wamp\www\prestashop\manager\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1352654df7d318d8883-91510126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df0eaeb0bf6212051fd584455efa37645e1c2e8f' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\manager\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1420625154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352654df7d318d8883-91510126',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54df7d318e1927_83923149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df7d318e1927_83923149')) {function content_54df7d318e1927_83923149($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
