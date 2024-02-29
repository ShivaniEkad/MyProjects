<?php
/* Smarty version 3.1.28, created on 2021-08-20 09:27:14
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/release_notes_preview_strip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_611f757259a765_64691802',
  'file_dependency' => 
  array (
    '9a0ccb8a2b591d306c0e480fbfa785b9c8113244' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/release_notes_preview_strip.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611f757259a765_64691802 ($_smarty_tpl) {
?>
<div class="headingfix">
    <!-- Top Header Block -->
    <div class="heading" id="top_heading_fix">
        <!-- Top Strip Title Block -->
        <h3>
            <div class="screen-title">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_VIEW');?>
 :: <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('RELEASE_NOTES_RELEASE_NOTES');?>

            </div>        
        </h3>
        <!-- Top Strip Dropdown Block -->
        <div class="header-right-btns">
            <!-- BackLink Icon -->
            <a hijacked="yes" class="btn btn-info notes-switch-btn" href="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('admin_url');?>
#<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL('tools/release_notes/index');?>
" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_MANAGE_NOTES');?>
"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_MANAGE_NOTES');?>
</a>
        </div>
    </div>
</div>  <?php }
}
