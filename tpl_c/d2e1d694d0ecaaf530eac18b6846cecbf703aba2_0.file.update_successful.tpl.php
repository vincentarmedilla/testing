<?php
/* Smarty version 3.1.30, created on 2020-06-24 09:19:45
  from "C:\xampp2\htdocs\booked\tpl\Ajax\reservation\update_successful.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef2fe912e8972_23220800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2e1d694d0ecaaf530eac18b6846cecbf703aba2' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\booked\\tpl\\Ajax\\reservation\\update_successful.tpl',
      1 => 1568811098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Ajax/reservation/save_successful.tpl' => 1,
  ),
),false)) {
function content_5ef2fe912e8972_23220800 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:Ajax/reservation/save_successful.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('divId'=>"reservation-updated",'messageKey'=>"ReservationUpdated"), 0, false);
}
}
