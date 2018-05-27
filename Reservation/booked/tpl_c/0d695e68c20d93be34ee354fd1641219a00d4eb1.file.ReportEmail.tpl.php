<?php /* Smarty version Smarty-3.1.16, created on 2015-08-12 10:52:59
         compiled from "/var/www/booked/lang/fr_fr/ReportEmail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121723994555cb096b2c1461-22857164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d695e68c20d93be34ee354fd1641219a00d4eb1' => 
    array (
      0 => '/var/www/booked/lang/fr_fr/ReportEmail.tpl',
      1 => 1426869462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121723994555cb096b2c1461-22857164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ScriptUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55cb096b2c47c2_90621921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cb096b2c47c2_90621921')) {function content_55cb096b2c47c2_90621921($_smarty_tpl) {?>


Votre rapport de Booked Scheduler est en piece jointe.<br/>

<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
">Connexion à Booked Scheduler</a>


<?php }} ?>
