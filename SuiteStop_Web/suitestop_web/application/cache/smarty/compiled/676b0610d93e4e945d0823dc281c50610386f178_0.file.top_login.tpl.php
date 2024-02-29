<?php
/* Smarty version 3.1.28, created on 2021-07-16 13:39:28
  from "C:\xampp\htdocs\Appineers_V4_Web\application\admin\views\top\top_login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60f16ff0a8bf96_80514731',
  'file_dependency' => 
  array (
    '676b0610d93e4e945d0823dc281c50610386f178' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Appineers_V4_Web\\application\\admin\\views\\top\\top_login.tpl',
      1 => 1626430805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f16ff0a8bf96_80514731 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\Appineers_V4_Web\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
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
