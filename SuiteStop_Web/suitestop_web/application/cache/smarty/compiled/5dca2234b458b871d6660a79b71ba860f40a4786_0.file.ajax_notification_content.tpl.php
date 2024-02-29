<?php
/* Smarty version 3.1.28, created on 2021-08-30 04:23:02
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/notifications/views/ajax_notification_content.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_612c5d263de6e2_77431180',
  'file_dependency' => 
  array (
    '5dca2234b458b871d6660a79b71ba860f40a4786' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/notifications/views/ajax_notification_content.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612c5d263de6e2_77431180 ($_smarty_tpl) {
?>
<div class="headingfix">
    <div class="heading" id="top_heading_fix">
        <h3>
            <div class="screen-title">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_VIEW');?>
 :: <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('NOTIFICATIONS_NOTIFICATIONS');?>
 :: <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['vSubject'];?>
 

            </div>
        </h3>
        <div class="header-right-btns">
            <input type="hidden" id="notification_log_id" name="notification_log_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['iExecutedNotificationId'];?>
" />
        </div>
    </div>
</div>
<div id="ajax_content_div" class="ajax-content-div top-frm-spacing" >
    <div id="ajax_qLoverlay"></div>
    <div id="ajax_qLbar"></div>
    <div class="top-frm-tab-layout" id="top_frm_tab_layout"></div>
    <div id="scrollable_content" class="scrollable-content top-block-spacing">
        <div style="width:98%;margin-bottom: 30px;margin-top: 20px;" class="frm-block-layout" >
            <textarea id="tNotificationContent" name="tNotificationContent" style='width:100%;min-height:300px;'  class='frm-size-medium elastic'><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['tContent'];?>
</textarea>
        </div>
        <div id="answers"></div>
    </div>
</div>
<div class="popup-footer frm-bot-btn  bot-btn-cen">
    <div class="action-btn-align">
        <button class="btn btn-info" id="resend"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_RESEND');?>
</button>
        <input value="Discard" name="ctrldiscard" type="button" class="btn" onclick="closeWindow()">
    </div>
</div>
<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js('admin/forms/tinymce/tinymce.min.js','admin/admin/js_notification_content.js');
}
}
