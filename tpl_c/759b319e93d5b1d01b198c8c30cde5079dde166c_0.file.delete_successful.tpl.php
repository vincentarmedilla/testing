<?php
/* Smarty version 3.1.30, created on 2020-06-24 08:31:18
  from "C:\xampp2\htdocs\booked\tpl\Ajax\reservation\delete_successful.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef2f3366e6588_33372106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '759b319e93d5b1d01b198c8c30cde5079dde166c' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\booked\\tpl\\Ajax\\reservation\\delete_successful.tpl',
      1 => 1568811098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef2f3366e6588_33372106 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
	<div id="reservation-response-image">
		<span class="fa fa-check fa-5x success"></span>
	</div>

	<div id="deleted-message" class="reservation-message"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationRemoved'),$_smarty_tpl);?>
</div>

	<input type="button" id="btnSaveSuccessful" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>
" class="btn btn-success" />
</div><?php }
}
