<?php
/* Smarty version 3.1.28, created on 2021-08-05 10:26:47
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/front/user/views/reset_password.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_610bbce7cae270_34163517',
  'file_dependency' => 
  array (
    'd938fabe2e575c4cc8291621a44f1137e7b68675' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/front/user/views/reset_password.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610bbce7cae270_34163517 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['status']->value == 0 || $_smarty_tpl->tpl_vars['code']->value == '') {?>
<div class="col-md-6 col-md-offset-3">
  <div class="lock-img ex-pswr"><img src="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('site_url');?>
/public/images/front/password.png"/></div>
</div>

<div class="jumbotron text-xs-center">
<div class="col-md-6 col-md-offset-3">
  <p class="lead ex-pass">
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
  </p>
</div>
<?php } else { ?>
<div class="new-passwd">
<div class="col-md-4 col-md-offset-4">
  <div class="lock-img"><img src="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('site_url');?>
/public/images/front/password.png"/></div>
</div>
<div class="col-md-4 col-md-offset-4">
  <input type="hidden" id="code_val" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" />
  <div class="alert alert-danger" style="display:none;font-size: 14px;" role="alert" id="error_alert"> Password not updated successfully </div>
  <div class="alert alert-success" style="display:none;font-size: 14px;" role="alert" id="success_alert"> Password Updated successfully </div>
  <form id="reset_form" method="post"  action="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('site_url');?>
resetpassaction">
    <div class="form-group nw-pass"> 
      <!--<label for="new_password">New Password:</label>-->
      <input type="password" name="new_password" class="form-control" id="new_password" placeholder="New Password">
      <input type="hidden" name="code" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
      <div style="color:#c50f0f;" id="new_pass_error"></div>
    </div>
    <div class="form-group cnf-pass"> 
      <!--<label for="confirm_password">Confirm Password:</label>-->
      <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password">
      <div style="color:#c50f0f;" id="confirm_pass_error"></div>
    </div>
    <div class="text-center sub-btn">
      <button type="submit" id="forget_submit" class="btn btn-default">Submit</button>
    </div>
  </form>
</div></div>
<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js("resetpassword.js");?>

<?php }
}
}
