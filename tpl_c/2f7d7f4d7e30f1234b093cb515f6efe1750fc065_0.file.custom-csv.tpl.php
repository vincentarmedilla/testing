<?php
/* Smarty version 3.1.30, created on 2020-06-26 03:39:20
  from "C:\xampp2\htdocs\booked\tpl\Reports\custom-csv.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef551c8db6767_90939646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f7d7f4d7e30f1234b093cb515f6efe1750fc065' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\booked\\tpl\\Reports\\custom-csv.tpl',
      1 => 1568811098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef551c8db6767_90939646 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Definition']->value->GetColumnHeaders(), 'column', false, NULL, 'columnIterator', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_columnIterator']->value['index']++;
if ($_smarty_tpl->tpl_vars['ReportCsvColumnView']->value->ShouldShowCol($_smarty_tpl->tpl_vars['column']->value,(isset($_smarty_tpl->tpl_vars['__smarty_foreach_columnIterator']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_columnIterator']->value['index'] : null))) {?>"<?php if ($_smarty_tpl->tpl_vars['column']->value->HasTitle()) {
echo $_smarty_tpl->tpl_vars['column']->value->Title();
} else {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['column']->value->TitleKey()),$_smarty_tpl);
}?>",<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Report']->value->GetData()->Rows(), 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Definition']->value->GetRow($_smarty_tpl->tpl_vars['row']->value), 'data', false, NULL, 'dataIterator', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_dataIterator']->value['index']++;
if ($_smarty_tpl->tpl_vars['ReportCsvColumnView']->value->ShouldShowCell((isset($_smarty_tpl->tpl_vars['__smarty_foreach_dataIterator']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_dataIterator']->value['index'] : null))) {?>"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
",<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
