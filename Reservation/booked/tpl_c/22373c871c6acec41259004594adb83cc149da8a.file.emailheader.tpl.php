<?php /* Smarty version Smarty-3.1.16, created on 2015-06-17 09:48:27
         compiled from "/var/www/booked/tpl/Email/emailheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20404851015581264bb417d5-07820549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22373c871c6acec41259004594adb83cc149da8a' => 
    array (
      0 => '/var/www/booked/tpl/Email/emailheader.tpl',
      1 => 1426869478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20404851015581264bb417d5-07820549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Charset' => 0,
    'ScriptUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5581264bb98727_04185917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5581264bb98727_04185917')) {function content_5581264bb98727_04185917($_smarty_tpl) {?>
<?php echo '<?xml';?> version="1.0" encoding="<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
"<?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
" />
		<style type="text/css">
			@import url(<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/css/email.css);
		</style>
	</head>
	<body><?php }} ?>
