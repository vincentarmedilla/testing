<?php
/* Smarty version 3.1.30, created on 2020-06-13 16:40:03
  from "C:\xampp2\htdocs\booked\tpl\Admin\Reservations\import_reservations_template_csv.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ee4e543798834_96920283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e0305672ea432fb4195143536b4935cd8753c7a' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\booked\\tpl\\Admin\\Reservations\\import_reservations_template_csv.tpl',
      1 => 1568811096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee4e543798834_96920283 (Smarty_Internal_Template $_smarty_tpl) {
?>
email,resource names,title,description,begin,end<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Attributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>,<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['attribute']->value->Label());
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
