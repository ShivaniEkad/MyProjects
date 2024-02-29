<?php
/* Smarty version 3.1.28, created on 2021-08-20 06:25:03
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/basic_appineers_master/views/feedback_management_index_strip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_611f4abfac9615_81021565',
  'file_dependency' => 
  array (
    'd169427b4712426e5174a448e25eec5e0ae77dba' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/basic_appineers_master/views/feedback_management_index_strip.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611f4abfac9615_81021565 ($_smarty_tpl) {
?>
<div class="headingfix">
    <!-- Top Header Block -->
    <div class="heading" id="top_heading_fix">
		<!-- Top Strip Title Block -->
        <h3>
            <div class="screen-title">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_LISTING');?>
 :: <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_FEEDBACK_MANAGEMENT');?>

            </div>        
        </h3>
		<!-- Top Strip Dropdown Block -->
        <div class="header-right-drops">
            
            
        </div>
    </div>
</div>    <?php }
}
