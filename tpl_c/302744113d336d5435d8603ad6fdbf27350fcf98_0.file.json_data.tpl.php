<?php
/* Smarty version 3.1.30, created on 2020-07-07 23:48:51
  from "C:\xampp2\htdocs\booked\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f04edc390b670_10887999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '302744113d336d5435d8603ad6fdbf27350fcf98' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\booked\\tpl\\json_data.tpl',
      1 => 1568811098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f04edc390b670_10887999 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
