<?php /* Smarty version Smarty-3.1.16, created on 2015-10-06 08:14:39
         compiled from "/var/www/booked/tpl/Ajax/reservation/delete_failed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1206177168561366cf8d9c13-47145029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d20effbd18aeff7dfb1607758fb31311116134b' => 
    array (
      0 => '/var/www/booked/tpl/Ajax/reservation/delete_failed.tpl',
      1 => 1426869478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1206177168561366cf8d9c13-47145029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Errors' => 0,
    'each' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_561366cf95d516_04226287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561366cf95d516_04226287')) {function content_561366cf95d516_04226287($_smarty_tpl) {?>
<div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"dialog-warning.png"),$_smarty_tpl);?>
<br/>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationFailed'),$_smarty_tpl);?>

	<ul>
	<?php  $_smarty_tpl->tpl_vars['each'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['each']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['each']->key => $_smarty_tpl->tpl_vars['each']->value) {
$_smarty_tpl->tpl_vars['each']->_loop = true;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['each']->value;?>
</li>
	<?php } ?>
	</ul>

	<input type="button" id="btnSaveFailed" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CorrectErrors'),$_smarty_tpl);?>
" class="button" />
</div><?php }} ?>
