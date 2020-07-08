<?php
/* Smarty version 3.1.30, created on 2020-06-25 12:43:01
  from "C:\xampp2\htdocs\booked\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef47fb5207818_02996689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c2e1a6d832a389e21f1feea340e7a79335f2bb3' => 
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
function content_5ef47fb5207818_02996689 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
