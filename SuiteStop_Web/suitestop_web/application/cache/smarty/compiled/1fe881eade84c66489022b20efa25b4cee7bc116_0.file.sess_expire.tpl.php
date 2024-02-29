<?php
/* Smarty version 3.1.28, created on 2021-07-16 14:20:01
  from "C:\xampp\htdocs\Appineers_V4_Web\application\admin\user\views\sess_expire.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60f179711f11d9_10900086',
  'file_dependency' => 
  array (
    '1fe881eade84c66489022b20efa25b4cee7bc116' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Appineers_V4_Web\\application\\admin\\user\\views\\sess_expire.tpl',
      1 => 1626430805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f179711f11d9_10900086 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\Appineers_V4_Web\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
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
