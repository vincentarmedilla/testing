<?php
/* Smarty version 3.1.30, created on 2020-06-24 09:19:51
  from "C:\xampp2\htdocs\booked\tpl\Calendar\calendar.subscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef2fe979b1973_97575003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '582fe9e91250683963c00244113ea2a15eb569b7' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\booked\\tpl\\Calendar\\calendar.subscription.tpl',
      1 => 1568811098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef2fe979b1973_97575003 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="calendarSubscription" class="calendar-subscription">
    <?php if ($_smarty_tpl->tpl_vars['IsSubscriptionAllowed']->value && $_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value) {?>
        <a id="subscribeToCalendar"
           href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-share.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SubscribeToCalendar'),$_smarty_tpl);?>
</a>
        <br/>
        URL:
        <span class="note"><?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
</span>
    <?php }?>
</div>

<?php }
}
