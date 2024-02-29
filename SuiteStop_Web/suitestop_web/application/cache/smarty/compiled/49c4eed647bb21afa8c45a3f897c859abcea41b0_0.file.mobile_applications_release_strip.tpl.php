<?php
/* Smarty version 3.1.28, created on 2021-08-23 05:30:57
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/mobile_applications_release_strip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_612332911b8989_85254247',
  'file_dependency' => 
  array (
    '49c4eed647bb21afa8c45a3f897c859abcea41b0' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/mobile_applications_release_strip.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612332911b8989_85254247 ($_smarty_tpl) {
?>
<div class="headingfix">
    <!-- Top Header Block -->
    <div class="heading" id="top_heading_fix">
         <!-- Top Strip Title Block -->
        <h3>
            <div class="screen-title">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_VIEW');?>
 :: <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('MOBILE_APPLICATIONS_MOBILE_APPLICATIONS');?>

            </div>        
        </h3>
         <!-- Top Strip Dropdown Block -->
        <div class="header-right-btns">
            <!-- BackLink Icon -->
            <a hijacked="yes" class="btn btn-info notes-switch-btn" href="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('admin_url');?>
#<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL('tools/mobile_applications/index');?>
" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_MANAGE_APPLICATIONS');?>
"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_MANAGE_APPLICATIONS');?>
</a>
        </div>
    </div>
</div>  <?php }
}
