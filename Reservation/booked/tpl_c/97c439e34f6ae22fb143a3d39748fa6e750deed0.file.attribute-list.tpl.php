<?php /* Smarty version Smarty-3.1.16, created on 2015-06-12 08:52:18
         compiled from "/var/www/booked/tpl/Admin/Attributes/attribute-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:999738769557a81a20e0e25-21064796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c439e34f6ae22fb143a3d39748fa6e750deed0' => 
    array (
      0 => '/var/www/booked/tpl/Admin/Attributes/attribute-list.tpl',
      1 => 1426869478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '999738769557a81a20e0e25-21064796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Attributes' => 0,
    'rowCss' => 0,
    'attribute' => 0,
    'Types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_557a81a2188f85_32853213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557a81a2188f85_32853213')) {function content_557a81a2188f85_32853213($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/booked/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>

<h3><?php echo count($_smarty_tpl->tpl_vars['Attributes']->value);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Attributes'),$_smarty_tpl);?>
</h3>
<?php if (count($_smarty_tpl->tpl_vars['Attributes']->value)>0) {?>
<table class="list">
	<tr>
		<th>ID</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SortOrder'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DisplayLabel'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Type'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Required'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AppliesTo'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ValidationExpression'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PossibleValues'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
		<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

		<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 editable" attributeId="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
">
			<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->SortOrder();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>
</td>
			<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['Types']->value[$_smarty_tpl->tpl_vars['attribute']->value->Type()]),$_smarty_tpl);?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['attribute']->value->Required()) {?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Yes'),$_smarty_tpl);?>

				<?php } else { ?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'No'),$_smarty_tpl);?>

			<?php }?></td>
			<td><?php if ($_smarty_tpl->tpl_vars['attribute']->value->UniquePerEntity()) {?>
				<?php echo $_smarty_tpl->tpl_vars['attribute']->value->EntityDescription();?>

				<?php } else { ?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>

			<?php }?></td>
			<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Regex();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->PossibleValues();?>
</td>
			<td align="center"><a href="#" class="update delete" attributeId="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>'cross-button.png'),$_smarty_tpl);?>
</a></td>
		</tr>
	<?php } ?>
</table>
<?php }?>

<script type="text/javascript">
	var attributeList = new Object();

	<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
		attributeList[<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
] = {
						id: <?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
,
						label: "<?php echo strtr($_smarty_tpl->tpl_vars['attribute']->value->Label(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
						required: <?php echo $_smarty_tpl->tpl_vars['attribute']->value->Required();?>
,
						regex: "<?php echo strtr($_smarty_tpl->tpl_vars['attribute']->value->Regex(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
						possibleValues: "<?php echo strtr($_smarty_tpl->tpl_vars['attribute']->value->PossibleValues(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
						type: "<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Type();?>
",
						sortOrder: "<?php echo $_smarty_tpl->tpl_vars['attribute']->value->SortOrder();?>
",
						entityId: "<?php echo $_smarty_tpl->tpl_vars['attribute']->value->EntityId();?>
",
						entityDescription: "<?php echo strtr($_smarty_tpl->tpl_vars['attribute']->value->EntityDescription(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
					};
	<?php } ?>

	$('#attributeList').data('list', attributeList);
</script><?php }} ?>
