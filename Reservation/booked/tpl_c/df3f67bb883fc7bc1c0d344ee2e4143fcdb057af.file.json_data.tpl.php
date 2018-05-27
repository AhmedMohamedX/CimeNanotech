<?php /* Smarty version Smarty-3.1.16, created on 2015-06-11 16:52:14
         compiled from "/var/www/booked/tpl/json_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5252980755579a09ee67d02-20964524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df3f67bb883fc7bc1c0d344ee2e4143fcdb057af' => 
    array (
      0 => '/var/www/booked/tpl/json_data.tpl',
      1 => 1426869478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5252980755579a09ee67d02-20964524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5579a09ee9c564_87584607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5579a09ee9c564_87584607')) {function content_5579a09ee9c564_87584607($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['error']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?><?php }} ?>
