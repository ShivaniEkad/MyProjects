<?php
/* Smarty version 3.1.28, created on 2021-08-04 10:42:05
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/front/user/views/activate_user.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_610a6efd6bacd7_33168630',
  'file_dependency' => 
  array (
    '061f0760a405dead68d4c9ce02a80e135bdecd9f' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/front/user/views/activate_user.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610a6efd6bacd7_33168630 ($_smarty_tpl) {
?>

<div class="jumbotron text-xs-center">
   <?php if ($_smarty_tpl->tpl_vars['error']->value == 1) {?>
  <div class="error-msg"><img src="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('site_url');?>
/public/images/front/error.png"/></div>
  <h1 class="exp-msg"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>
  <!-- <p class="lead"> Please contact to {%SYSTEM.COMPANY_NAME%} administrator!</p> -->
  
  
  <!-- <h1 class="thnx-msg">This account is already activated!</h1> -->
  
  <div><!--<img src="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('site_url');?>
/public/images/front/checked.png"/>--><!--<i class="fa fa-check main-content__checkmark" id="checkmark"></i>--></div>
  <!--<h1 class="thnx-msg">Thank You!</h1>-->
  <?php } else { ?>
  <div class="thnx-img"><img src="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('site_url');?>
/public/images/front/thanks.png"/></div>
  <p class="lead"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
  <?php }?>
</div>
<?php }
}
