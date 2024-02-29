<?php
/* Smarty version 3.1.28, created on 2021-08-30 04:54:50
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/notifications/views/db_change_log_index_strip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_612c649a708475_34829952',
  'file_dependency' => 
  array (
    '444304ed59f33f41759203ca1381a650201a1b33' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/notifications/views/db_change_log_index_strip.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612c649a708475_34829952 ($_smarty_tpl) {
?>
<div class="headingfix">
    <!-- Top Header Block -->
    <div class="heading" id="top_heading_fix">
		<!-- Top Strip Title Block -->
        <h3>
            <div class="screen-title">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_LISTING');?>
 :: <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('DB_CHANGE_LOG_DB_CHANGE_LOG');?>

            </div>        
        </h3>
		<!-- Top Strip Dropdown Block -->
        <div class="header-right-drops">
            
            
        </div>
    </div>
</div>    <?php }
}
