<?php /* Smarty version Smarty-3.1.19, created on 2015-02-13 17:53:52
         compiled from "C:\wamp\www\prestashop\modules\blockcategories\views\blockcategories_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2073054de2c20a16ce5-75971933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c184b0a14a20f88c837ebdfb00132d9a1eb85860' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blockcategories\\views\\blockcategories_admin.tpl',
      1 => 1420625192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2073054de2c20a16ce5-75971933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helper' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54de2c20a92028_90046109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54de2c20a92028_90046109')) {function content_54de2c20a92028_90046109($_smarty_tpl) {?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'You can upload a maximum of 3 images.','mod'=>'blockcategories'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Thumbnails','mod'=>'blockcategories'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>

	</div>
</div>
<?php }} ?>
