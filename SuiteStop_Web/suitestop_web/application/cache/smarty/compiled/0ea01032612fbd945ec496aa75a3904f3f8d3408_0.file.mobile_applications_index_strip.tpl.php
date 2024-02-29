<?php
/* Smarty version 3.1.28, created on 2021-08-27 14:00:51
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/mobile_applications_index_strip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_6128f01349dad5_81837342',
  'file_dependency' => 
  array (
    '0ea01032612fbd945ec496aa75a3904f3f8d3408' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/mobile_applications_index_strip.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6128f01349dad5_81837342 ($_smarty_tpl) {
?>
<div class="headingfix">
    <!-- Top Header Block -->
    <div class="heading" id="top_heading_fix">
        <!-- Top Strip Title Block -->
        <h3>
            <div class="screen-title">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_LISTING');?>
 :: <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('MOBILE_APPLICATIONS_MOBILE_APPLICATIONS');?>

            </div>        
        </h3>
        <!-- Top Strip Dropdown Block -->
        <div class="header-right-btns">
            <!-- BackLink Icon -->
            <a hijacked="yes" class="btn btn-info notes-switch-btn" href="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('admin_url');?>
#<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL('tools/mobile_applications/release');?>
" title="Preview Applications">Preview Applications</a>
        </div>
    </div>
</div>    <?php }
}
