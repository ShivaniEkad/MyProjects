<?php
/* Smarty version 3.1.28, created on 2021-08-27 06:31:46
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/user/views/cit/change_password.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_612886d29abd76_25002540',
  'file_dependency' => 
  array (
    '91de5b7a3c19ca648c74c1b7fb252e1c97539cc2' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/user/views/cit/change_password.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612886d29abd76_25002540 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>    
<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js('admin/admin/js_change_password.js');?>


<div id="ajax_qLbar"></div>
<div class="popup-frm-setup">
    <div class="popup-left-block" id="popup-left-block">
        <!-- Top Detail View Block -->
        <div class="popup-left-container">
            <div class="popup-left-main-title">
                <div class="popup-left-main-title-icon"><span><i class="fa fa-lock" style="font-size:80px;color: #ffffff;"></i></span></div>
                <span class="popup-left-main-title-content"><?php echo $_smarty_tpl->tpl_vars['this']->value->general->processMessageLabel("GENERIC_CHANGE_PASSWORD");?>
</span>
            </div>
            <div class="popup-label-box">
                <div class="label-box-row">
                    <span class="label-box-row-title"><?php echo $_smarty_tpl->tpl_vars['this']->value->general->processMessageLabel("GENERIC_NAME");?>
</span>
                    <em class="label-box-row-content"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</em>
                </div>
                <div class="label-box-row">
                    <span class="label-box-row-title"><?php echo $_smarty_tpl->tpl_vars['this']->value->general->processMessageLabel("GENERIC_EMAIL");?>
</span>
                    <em class="label-box-row-content"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</em>
                </div>
            </div>
        </div>
    </div>   
    <div id="ajax_content_div" class="ajax-content-div top-frm-spacing popup-right-block">
        <div id="ajax_qLoverlay"></div>
        <div id="ajax_qLbar"></div>
        <div id="scrollable_content" class="scrollable-content">
            <div id="changepassword" class="frm-elem-block frm-stand-view">
                <form name="frmchangepassword" id="frmchangepassword" action="<?php echo $_smarty_tpl->tpl_vars['changepassword_url']->value;?>
" method="post"  enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['enc_id']->value;?>
">
                    <input type="hidden" id="patternLock" name="patternLock" value="<?php echo $_smarty_tpl->tpl_vars['is_patternlock']->value;?>
" > 
                    <div class="main-content-block" id="main_content_block">
                        <div style="width:98%" class="frm-block-layout" >
                            <div class="box gradient <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_content_row'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_border_view'];?>
">
                                <div class="title <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_titles_bar'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_CHANGE_PASSWORD');?>
</h4></div>
                                <div class="content <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_label_align'];?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['is_patternlock']->value == "yes") {?>
                                        <div class="form-row row-fluid">
                                            <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_OLD_PASSWORD');?>
 <em>*</em></label> 
                                            <div class="form-right-div">
                                                <input type="password" id="vOldPassword" value="" name="vOldPassword" class="frm-size-medium" size="25" maxlength="50" >
                                                <div id='old_passwd_div' class="pattern_container"></div>
                                            </div>
                                            <div class="error-msg-form" ><label class="error" id="vOldPasswordErr"></label></div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_NEW_PASSWORD');?>
 <em>*</em></label> 
                                            <div class="form-right-div">
                                                <input type="password"  title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_NEW_PASSWORD');?>
" name="vPassword" id="vPassword" class="frm-size-medium" value="" size="25" maxlength="50"/>                                    
                                                <div id='passwd_div' class="pattern_container"></div>
                                            </div>
                                            <div class="error-msg-form" ><label class="error" id="vPasswordErr"></label></div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="form-row row-fluid">
                                            <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_OLD_PASSWORD');?>
  <em>*</em></label> 
                                            <div class="form-right-div">
                                                <input type="password" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_PLEASE_ENTER_OLD_PASSWORD');?>
" id="vOldPassword" value="" name="vOldPassword" class="frm-size-medium" autocomplete="off">
                                            </div>
                                            <div class="error-msg-form" ><label class="error" id="vOldPasswordErr"></label></div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_NEW_PASSWORD');?>
 <em>*</em></label> 
                                            <div class="form-right-div">
                                                <input type="password" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_PLEASE_ENTER_NEW_PASSWORD');?>
" id="vPassword" value="" name="vPassword" class="frm-size-medium" autocomplete="off">
                                            </div>
                                            <div class="error-msg-form" ><label class="error" id="vPasswordErr"></label></div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_CONFIRM_PASSWORD');?>
 <em>*</em></label> 
                                            <div class="form-right-div">
                                                <input type="password"  title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_PLEASE_REENTER_PASSWORD');?>
" id="vConfirmPassword" value="" name="vConfirmPassword" class="frm-size-medium" autocomplete="off">
                                            </div>
                                            <div class="error-msg-form" ><label class="error" id="vConfirmPasswordErr"></label></div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="popup-right-footer frm-bot-btn <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_action_bar'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_action_btn'];?>
">
                            <div class="action-btn-align">
                                <input value="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_SAVE');?>
" name="ctrladd" type="submit" class='btn btn-info' onclick="return getValidateField()"/>&nbsp;&nbsp; 
                                <input value="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_DISCARD');?>
" name="ctrldiscard" type="button" class='btn' onclick="closeWindow()">
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    var jajax_action_url = '<?php echo $_smarty_tpl->tpl_vars['changepassword_url']->value;?>
';
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_css("custom/custom.css");?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();
}
}
