<?php
/* Smarty version 3.1.28, created on 2021-07-23 04:11:38
  from "/var/www/html/Appineers_V4_Web/application/admin/views/top/top_login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60fa417a0e9c44_92747274',
  'file_dependency' => 
  array (
    '5d221198cb36f163086527bedd304fc9c6742a5d' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/application/admin/views/top/top_login.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60fa417a0e9c44_92747274 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/Appineers_V4_Web/application/third_party/Smarty/plugins/modifier.date_format.php';
$_smarty_tpl->tpl_vars["logo_file_url"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->getCompanyLogoURL(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "logo_file_url", 0);?>
<div class="top-model-view logo container-fluid navbar">
    <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('admin_url');?>
" class="brand">
        <?php if ($_smarty_tpl->tpl_vars['logo_file_url']->value != '') {?>
            <img alt="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('COMPANY_NAME');?>
" class="admin-logo-top" src="<?php echo $_smarty_tpl->tpl_vars['logo_file_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('COMPANY_NAME');?>
">
        <?php } else { ?>
            <div class='brand-logo-icon'></div>
        <?php }?>
    </a>
</div>
<!-- <div class="toprightarea">
    <div class="date-right">
        <?php $_smarty_tpl->tpl_vars["now_date_time"] = new Smarty_Variable(smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S"), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "now_date_time", 0);?>
        <span><?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateTimeSystemFormat($_smarty_tpl->tpl_vars['now_date_time']->value);?>
</span>
    </div>
</div> --><?php }
}
