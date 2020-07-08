<?php
/* Smarty version 3.1.30, created on 2020-07-03 04:31:57
  from "C:\xampp2\htdocs\booked\tpl\Admin\Blackouts\manage_blackouts_response.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5efe989da9f328_62256187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baddc68cd5d1f092a7f52b00acdb2089b6d48213' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\booked\\tpl\\Admin\\Blackouts\\manage_blackouts_response.tpl',
      1 => 1568811096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efe989da9f328_62256187 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp2\\htdocs\\booked\\lib\\external\\Smarty\\plugins\\function.cycle.php';
?>

<div>
	<?php if ($_smarty_tpl->tpl_vars['Successful']->value) {?>
		<h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['SuccessKey']->value),$_smarty_tpl);?>
</h2>
		<button class="reload btn btn-primary"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"OK"),$_smarty_tpl);?>
</button>
	<?php } else { ?>
		<h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['FailKey']->value),$_smarty_tpl);?>
</h2>
		<button class="unblock btn btn-primary"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"OK"),$_smarty_tpl);?>
</button>
	<?php }?>

	<?php if (!empty($_smarty_tpl->tpl_vars['Message']->value)) {?>
		<h5><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</h5>
	<?php }?>

	<?php if (!empty($_smarty_tpl->tpl_vars['Blackouts']->value)) {?>
		<h5><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlackoutConflicts'),$_smarty_tpl);?>
</h5>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Blackouts']->value, 'blackout');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blackout']->value) {
?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['blackout']->value->StartDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value),$_smarty_tpl);?>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<?php }?>

	<?php if (!empty($_smarty_tpl->tpl_vars['Reservations']->value)) {?>
		<h5><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationConflicts'),$_smarty_tpl);?>
</h5>
		<table class="table" id="reservationTable" style="margin-left: auto; margin-right: auto;">
			<thead>
			<tr data-reservation-id="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReservationId;?>
">
				<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'User'),$_smarty_tpl);?>
</th>
				<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</th>
				<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</th>
				<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</th>
				<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReferenceNumber'),$_smarty_tpl);?>
</th>
			</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Reservations']->value, 'reservation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->value) {
?>
				<?php smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

				<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 editable">
					<td><?php echo $_smarty_tpl->tpl_vars['reservation']->value->FirstName;?>
 <?php echo $_smarty_tpl->tpl_vars['reservation']->value->LastName;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceName;?>
</td>
					<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->StartDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'res_popup'),$_smarty_tpl);?>
</td>
					<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->EndDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'res_popup'),$_smarty_tpl);?>
</td>
					<td class="referenceNumber"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
</td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</tbody>
		</table>
	<?php }?>
</div><?php }
}
