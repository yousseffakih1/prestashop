<?php /*%%SmartyHeaderCode:1604754dceb5d90f9b3-55703850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54787488fa2c96cf7b433843f58c6722f2d98f04' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default-bootstrap\\modules\\blockstore\\blockstore.tpl',
      1 => 1420625156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1604754dceb5d90f9b3-55703850',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54dceb5da1f1b8_71271553',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dceb5da1f1b8_71271553')) {function content_54dceb5da1f1b8_71271553($_smarty_tpl) {?>
<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="http://localhost/prestashop/index.php?controller=stores" title="Nos magasins">
			Nos magasins
		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="http://localhost/prestashop/index.php?controller=stores" title="Nos magasins">
				<img class="img-responsive" src="http://localhost/prestashop/modules/blockstore/store.jpg" alt="Nos magasins" />
			</a>
		</p>
				<div>
			<a 
			class="btn btn-default button button-small" 
			href="http://localhost/prestashop/index.php?controller=stores" 
			title="Nos magasins">
				<span>Découvrez nos magasins<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
