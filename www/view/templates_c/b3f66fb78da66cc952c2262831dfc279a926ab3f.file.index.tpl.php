<?php /* Smarty version Smarty-3.1.13, created on 2015-07-20 15:44:53
         compiled from "/Users/kenny/fis3/fis3-plus/www/view/template/index/page/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150260092555aca47d9b1902-91430684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3f66fb78da66cc952c2262831dfc279a926ab3f' => 
    array (
      0 => '/Users/kenny/fis3/fis3-plus/www/view/template/index/page/index.tpl',
      1 => 1437378292,
      2 => 'file',
    ),
    'd31fcbc4cd78cb75aeb9654b2f6a7f5e52e9a0b5' => 
    array (
      0 => '/Users/kenny/fis3/fis3-plus/www/view/template/common/page/layout.tpl',
      1 => 1437378292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150260092555aca47d9b1902-91430684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aca47d9eba26_09784275',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aca47d9eba26_09784275')) {function content_55aca47d9eba26_09784275($_smarty_tpl) {?><!DOCTYPE html>
<?php if(!class_exists('FISResource', false)){require_once('/Users/kenny/fis3/fis3-plus/www/libs/smarty/plugins/FISResource.class.php');}FISResource::setFramework(FISResource::getUri("static/mod.js", $_smarty_tpl->smarty)); ?><html>
<head>
	
	<title>index.tpl</title>

    <!--[FIS_CSS_LINKS_HOOK]-->
</head>
<body>
	<div>layout</div>
    
    <?php if(!class_exists('FISResource', false)){require_once('/Users/kenny/fis3/fis3-plus/www/libs/smarty/plugins/FISResource.class.php');}$_tpl_path=FISResource::getUri("index/widget/header/header.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."index/widget/header/header.tpl".'"', E_USER_ERROR);}FISResource::load("index/widget/header/header.tpl", $_smarty_tpl->smarty);?>

    <!--[FIS_JS_SCRIPT_HOOK]-->
</body>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html><?php }} ?>