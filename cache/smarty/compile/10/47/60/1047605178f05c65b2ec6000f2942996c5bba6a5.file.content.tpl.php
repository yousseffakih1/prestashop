<?php /* Smarty version Smarty-3.1.19, created on 2015-02-14 17:52:01
         compiled from "C:\wamp\www\prestashop\manager\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2882454df7d312ee4c1-62816621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1047605178f05c65b2ec6000f2942996c5bba6a5' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\manager\\themes\\default\\template\\content.tpl',
      1 => 1420625154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2882454df7d312ee4c1-62816621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54df7d3133b911_51259881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df7d3133b911_51259881')) {function content_54df7d3133b911_51259881($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
