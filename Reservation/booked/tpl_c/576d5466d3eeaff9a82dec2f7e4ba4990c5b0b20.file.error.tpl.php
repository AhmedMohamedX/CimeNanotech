<?php /* Smarty version Smarty-3.1.16, created on 2015-06-12 09:27:06
         compiled from "/var/www/booked/tpl/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:949372670557a89cace5d65-88103574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '576d5466d3eeaff9a82dec2f7e4ba4990c5b0b20' => 
    array (
      0 => '/var/www/booked/tpl/error.tpl',
      1 => 1426869478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '949372670557a89cace5d65-88103574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ErrorMessage' => 0,
    'ReturnUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_557a89cad14fa8_06246757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557a89cad14fa8_06246757')) {function content_557a89cad14fa8_06246757($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="error">
    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['ErrorMessage']->value),$_smarty_tpl);?>
</h3>
    <h5><a href="<?php echo $_smarty_tpl->tpl_vars['ReturnUrl']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReturnToPreviousPage'),$_smarty_tpl);?>
</a></h5>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
