<?php
/* Smarty version 3.1.28, created on 2021-08-23 05:58:24
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/notifications/views/notifications_index_strip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_61233900657997_56047450',
  'file_dependency' => 
  array (
    'a69098d17ca347cc3085d89a7312617fb96d2d42' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/notifications/views/notifications_index_strip.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61233900657997_56047450 ($_smarty_tpl) {
?>
<div class="headingfix">
    <!-- Top Header Block -->
    <div class="heading" id="top_heading_fix">
		<!-- Top Strip Title Block -->
        <h3>
            <div class="screen-title">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_LISTING');?>
 :: 
                <?php if ($_GET['men_notification_type'] == 'SMS') {?>
                    Sent SMS
                <?php } elseif ($_GET['men_notification_type'] == 'EmailNotify') {?>
                    Sent Emails
                <?php } elseif ($_GET['men_notification_type'] == 'DesktopNotify') {?>
                    Desktop Notifications
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('NOTIFICATIONS_NOTIFICATIONS');?>

                <?php }?>
            </div>        
        </h3>
		<!-- Top Strip Dropdown Block -->
        <div class="header-right-drops">
            
            
        </div>
    </div>
</div>    <?php }
}
