<?php
/* Smarty version 3.1.28, created on 2021-08-02 10:14:41
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/user/views/sess_expire.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_6107c5912ca683_40980374',
  'file_dependency' => 
  array (
    '2bfb5de076a78402036e7a2a7313b29a2b8b81e8' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/user/views/sess_expire.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6107c5912ca683_40980374 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/modifier.date_format.php';
?>
<div class="container-fluid">
    <div class="errorContainer">
        <div class="page-header">
            <h1 class="center">Session <small>expired</small></h1>
        </div>
        <h2 class="center errormsg">Your session is expired. Please login again.</h2>
        <div class="center">
            <a href="<?php echo $_smarty_tpl->tpl_vars['login_entry_url']->value;?>
?_=<?php echo smarty_modifier_date_format(time(),'%Y%m%d%H%M%S');?>
"  class="btn btn-default"><span class="icon16 icomoon-icon-enter"></span>Login here</a>
        </div>
    </div>
</div><?php }
}
