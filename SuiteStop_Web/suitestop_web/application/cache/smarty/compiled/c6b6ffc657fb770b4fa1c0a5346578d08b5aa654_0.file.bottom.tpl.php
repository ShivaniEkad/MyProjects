<?php
/* Smarty version 3.1.28, created on 2021-07-23 04:11:39
  from "/var/www/html/Appineers_V4_Web/application/admin/views/bottom/bottom.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60fa417b24d3d1_62276538',
  'file_dependency' => 
  array (
    'c6b6ffc657fb770b4fa1c0a5346578d08b5aa654' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/application/admin/views/bottom/bottom.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60fa417b24d3d1_62276538 ($_smarty_tpl) {
?>
<div class="copyright" id="bot_copyright">
    <?php if ($_smarty_tpl->tpl_vars['this']->value->session->userdata('iAdminId') != '') {?>
        <div class="nvqc-show-hide-log">
            <?php if ($_smarty_tpl->tpl_vars['this']->value->config->item('__CACHE_PREFERENCES') == '1') {?>
                <a href="javascript://"  title="Clear Cache" class="qc-show-hide-log bottom-log-icons">
                    <span class="icon20 icomoon-icon-recycle"></span>
                </a>
            <?php }?>
            <?php if (strtolower($_smarty_tpl->tpl_vars['this']->value->config->item('NAVIGATION_LOG_REQ')) == 'y') {?>
                <a href="javascript://"  title="Show Navigation Log" class="nv-show-hide-log bottom-log-icons">
                    <span class="icon20 icomoon-icon-cogs"></span>
                </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['this']->value->session->userdata('switchAccount') == 'Yes') {?>
                <?php $_smarty_tpl->tpl_vars["return_url"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->getCustomEncryptURL('return_account',true), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "return_url", 0);?>
                <a class="sa-show-hide-log bottom-log-icons" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_BACK_TO_YOUR_SESSION');?>
" hijacked="yes" href="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('admin_url');
echo $_smarty_tpl->tpl_vars['return_url']->value['return_account'];?>
" ><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line("GENERIC_BACK_TO_YOUR_SESSION");?>
</a>
            <?php }?>    
        </div>
        <div class="dbfc-show-hide-log">
            <?php if ($_ENV['debug_action'] == '1') {?>
                <a href="javascript://"  title="Show DB Queries Log" class="db-show-hide-log bottom-log-icons">
                    <span class="icon20 icomoon-icon-fire-2"></span>
                </a>
            <?php }?>
            <a href="javascript://"  title="Show Full Screen" id="show_full_screen_bottom" class="show-full-screen-bottom bottom-log-icons">
                <span class="icon20 iconic-icon-fullscreen"></span>
            </a>
            <a href="javascript://"  style="display:none;" title="Cancel Full Screen" id="cancel_full_screen_bottom" class="cancel-full-screen-bottom bottom-log-icons">
                <span class="icon20 iconic-icon-fullscreen-exit"></span>
            </a>
        </div>  
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->general->getcopyrighttext();?>

</div>


<?php }
}
