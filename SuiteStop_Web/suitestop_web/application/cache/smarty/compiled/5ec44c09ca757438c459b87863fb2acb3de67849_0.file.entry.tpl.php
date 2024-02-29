<?php
/* Smarty version 3.1.28, created on 2021-07-16 13:39:28
  from "C:\xampp\htdocs\Appineers_V4_Web\application\admin\user\views\cit\entry.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60f16ff0b7b144_58224930',
  'file_dependency' => 
  array (
    '5ec44c09ca757438c459b87863fb2acb3de67849' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Appineers_V4_Web\\application\\admin\\user\\views\\cit\\entry.tpl',
      1 => 1626430805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f16ff0b7b144_58224930 ($_smarty_tpl) {
if (!is_callable('smarty_block_javascript')) require_once 'C:\\xampp\\htdocs\\Appineers_V4_Web\\application\\third_party\\Smarty\\plugins\\block.javascript.php';
?>
<div class="loginContainer login-form <?php if ($_smarty_tpl->tpl_vars['is_patternlock']->value == 'yes') {?> pattern-form <?php }?>">
    <div class="loginbox-border">
        <div>
            <div id="login_div">
                <div class="login-headbg"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_ADMIN_LOGIN');?>

                    <p><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_ADMIN_LOGIN_INFO');?>
</p>
                </div>
                <form name="frmlogin" id="frmlogin" action="<?php echo $_smarty_tpl->tpl_vars['enc_url']->value['entry_action_url'];?>
" method="post" >
                    <input type="hidden" name="handle_url" id="handle_url" value=""/>
                    <div width="28%" class="bmatter relative">
                        <label for="login_name"> <span class="icon16 icomoon-icon-user-3 icon-user-login"></span></label>
                        <input type="text"  title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_LOGIN');?>
" name="login_name" id="login_name"  class="text login-user" value="<?php echo $_smarty_tpl->tpl_vars['login_name']->value;?>
" size="25" maxlength="50" placeholder="Username" />
                    </div>
                    <div class="clear"></div>
                    <div class="error-msg login-error-msg" id='login_nameErr'>                    
                    </div>
                    <div class="bmatter relative">
                        <label for="passwd"> <span class="icomoon-icon-locked-2 icon-user-pw"></span></label>			
                        <input type="password" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_PASSWORD');?>
" name="passwd" id="passwd" size="25" value="<?php echo $_smarty_tpl->tpl_vars['passwd']->value;?>
" class="login-pass" maxlength="50" placeholder="Password" />
                        <a id='pwd_show_hide' class='login-pwd-icon' href='javascript://'><i class='fa fa-eye-slash fa-18' id='pwd_icon' status='hide'></i></a>
                        <?php if ($_smarty_tpl->tpl_vars['is_patternlock']->value == "yes") {?>
                            <div id='passwd-div' class="pwd-pattern"></div>
                        <?php }?>
                    </div>
                    <div class="clear"></div>
                    <div class="error-msg login-error-msg" id='passwdErr'></div>
                    <?php if ($_smarty_tpl->tpl_vars['is_patternlock']->value == "yes") {?>
                        <div class="relative secret-login-part">
                            <input id='secretlogin' type="checkbox" name="secrectlogin" class="secrectlogin regular-checkbox" value="yes">
                            <label for='secretlogin'>&nbsp;</label><label for='secretlogin'><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_MAKE_IT_SECRET');?>
 ?</label>
                        </div>
                    <?php } else { ?>
                        <div class="normal-login-type">
                            <button type="button" class="btn btn-info login-btn" id="loginBtn" onclick="return login(document.frmlogin)">
                                Login<span class="icon16 icomoon-icon-enter white right"></span>
                            </button>
                       </div>
                    <?php }?>
                    <div class="login-actions">
                        <?php if ($_smarty_tpl->tpl_vars['is_patternlock']->value != "yes") {?>
                            <div class="login-remember-me left">
                                <input class="remember-me-check regular-checkbox" type="checkbox" value="Yes" name="remember_me" id="remember_me"  <?php if ($_smarty_tpl->tpl_vars['remember_me']->value == "Yes") {?>checked="checked"<?php }?> > 
                                <label for="remember_me">&nbsp;</label><label class="remember-me-label" for="remember_me"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_REMEMBER_ME');?>
</label>
                            </div>
                        <?php }?>
                        <div class="show-forgot-pwd right">
                            <a href="javascript://" onclick="return showForgotPassword();"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_FORGOT_YOUR_PASSWORD');?>
?</a>
                        </div>
                    </div>
                </form>
            </div>
            <div id="forgot_div" class="forgot-pwd">
                <div class="login-headbg"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_ADMIN_FORGOT_PASSWORD');?>

                    <p><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_ADMIN_FORGOT_PASSWORD_INFO');?>
</p>
                </div>
                <div width="28%" class="relative">
                    <label for="username"><span class="icon16 icomoon-icon-user-3 icon-user-login"></span></label>
                    <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_USERNAME');?>
" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_USERNAME');?>
" name="username" id="username"  class="text login-forgot" value="" size="25" maxlength="50" style="float:left" />
                    <div class="error-msg login-error-msg" id='usernameErr'></div>
                    <div class="forgot-pwd-btns">
                        <input id="send_button" type="button" class="forgot-send-btn btn btn-info right"  value="Send Password" onclick="return validateSendForgotPassword();">
                        <span id="loader_img" class="forgot-loader-img right"><i class="fa fa-refresh fa-spin-light fa-2x fa-fw"></i></span>
                    </div>
                    <div class="forgot-backlink">
                        Back to <span><a href="javascript://" onclick="return hideForgotPassword();"> login</a></span>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('javascript', array()); $_block_repeat=true; echo smarty_block_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    var forgot_pwd_url = '<?php echo $_smarty_tpl->tpl_vars['enc_url']->value['forgot_pwd_url'];?>
';
    var is_pattern = '<?php echo $_smarty_tpl->tpl_vars['is_patternlock']->value;?>
';
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js("admin/general/entry.js");?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_css("custom/custom.css");?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();
}
}
