<?php /* Smarty version Smarty-3.1.16, created on 2015-08-12 14:05:12
         compiled from "../lang/en_us/AccountCreation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22923588355cb3678d98998-87789438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b5ea1e86ef4880cd7fc9dac76606245147c1fb7' => 
    array (
      0 => '../lang/en_us/AccountCreation.tpl',
      1 => 1426869462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22923588355cb3678d98998-87789438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'To' => 0,
    'EmailAddress' => 0,
    'FullName' => 0,
    'Phone' => 0,
    'Organization' => 0,
    'Position' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55cb3678dcbc24_12861881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cb3678dcbc24_12861881')) {function content_55cb3678dcbc24_12861881($_smarty_tpl) {?>
<p><?php echo $_smarty_tpl->tpl_vars['To']->value;?>
,</p>

<p>A new user has registered with the following information:<br/>
Email: <?php echo $_smarty_tpl->tpl_vars['EmailAddress']->value;?>
<br/>
Name: <?php echo $_smarty_tpl->tpl_vars['FullName']->value;?>
<br/>
Phone: <?php echo $_smarty_tpl->tpl_vars['Phone']->value;?>
<br/>
Organization: <?php echo $_smarty_tpl->tpl_vars['Organization']->value;?>
<br/>
Position: <?php echo $_smarty_tpl->tpl_vars['Position']->value;?>
</p><?php }} ?>
