<?php
/* Smarty version 3.1.28, created on 2021-08-04 06:35:01
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/user/views/admin_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_610a3515f0c484_70908935',
  'file_dependency' => 
  array (
    'b4df0d4b68d653b7555520f3296cd4892060670e' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/user/views/admin_add.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_add_strip.tpl' => 1,
    'file:admin_add_buttons.tpl' => 1,
  ),
),false)) {
function content_610a3515f0c484_70908935 ($_smarty_tpl) {
if (!is_callable('smarty_block_javascript')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/block.javascript.php';
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>
<div class="module-form-container">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin_add_strip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
" data-form-name="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
        <div id="ajax_content_div" class="ajax-content-div top-frm-spacing" >
            <input type="hidden" id="projmod" name="projmod" value="admin" />
            <!-- Page Loader -->
            <div id="ajax_qLoverlay"></div>
            <div id="ajax_qLbar"></div>
            <!-- Module Tabs & Top Detail View -->
            <div class="top-frm-tab-layout" id="top_frm_tab_layout">
            </div>
            <!-- Middle Content -->
            <div id="scrollable_content" class="scrollable-content popup-content top-block-spacing ">
                <div id="admin" class="frm-module-block frm-elem-block frm-stand-view">
                    <!-- Module Form Block -->
                    <form name="frmaddupdate" id="frmaddupdate" action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['add_action'];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
" method="post"  enctype="multipart/form-data">
                        <!-- Form Hidden Fields Unit -->
                        <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['enc_id']->value;?>
" />
                        <input type="hidden" id="mode" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value[$_smarty_tpl->tpl_vars['mode']->value];?>
" />
                        <input type="hidden" id="ctrl_prev_id" name="ctrl_prev_id" value="<?php echo $_smarty_tpl->tpl_vars['next_prev_records']->value['prev']['id'];?>
" />
                        <input type="hidden" id="ctrl_next_id" name="ctrl_next_id" value="<?php echo $_smarty_tpl->tpl_vars['next_prev_records']->value['next']['id'];?>
" />
                        <input type="hidden" id="draft_uniq_id" name="draft_uniq_id" value="<?php echo $_smarty_tpl->tpl_vars['draft_uniq_id']->value;?>
" />
                        <input type="hidden" id="extra_hstr" name="extra_hstr" value="<?php echo $_smarty_tpl->tpl_vars['extra_hstr']->value;?>
" />
                        <input type="hidden" name="ma_auth_type" id="ma_auth_type" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ma_auth_type'];?>
"  class='ignore-valid ' />
                        <input type="hidden" name="ma_group_id" id="ma_group_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ma_group_id'];?>
"  class='ignore-valid ' />
                        <input type="hidden" name="ma_auth_code" id="ma_auth_code" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['ma_auth_code']);?>
"  class='ignore-valid ' />
                        <input type="hidden" name="ma_last_access" id="ma_last_access" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateTimeSystemFormat($_smarty_tpl->tpl_vars['data']->value['ma_last_access']);?>
"  class='ignore-valid '  aria-date-format='<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date_and_time','dateFormat');?>
'  aria-time-format='<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date_and_time','timeFormat');?>
'  aria-format-type='datetime' />
                        <!-- Form Dispaly Fields Unit -->
                        <div class="main-content-block " id="main_content_block">
                            <div style="width:98%" class="frm-block-layout pad-calc-container">
                                <div class="box gradient <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_content_row'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_border_view'];?>
">
                                    <div class="title <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_titles_bar'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('ADMIN_ADMIN');?>
</h4></div>
                                    <div class="content <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_label_align'];?>
">
                                        <div class="form-row row-fluid " id="cc_sh_ma_name">
                                            <label class="form-label span3 ">
                                                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['ma_name']['label_lang'];?>
 <em>*</em> 
                                            </label> 
                                            <div class="form-right-div  ">
                                                <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['ma_name']);?>
" name="ma_name" id="ma_name" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('ADMIN_NAME');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                                            </div>
                                            <div class="error-msg-form "><label class='error' id='ma_nameErr'></label></div>
                                        </div>
                                        <div class="form-row row-fluid " id="cc_sh_ma_email">
                                            <label class="form-label span3 ">
                                                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['ma_email']['label_lang'];?>
 <em>*</em> 
                                            </label> 
                                            <div class="form-right-div  ">
                                                <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['ma_email']);?>
" name="ma_email" id="ma_email" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('ADMIN_EMAIL');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                                            </div>
                                            <div class="error-msg-form "><label class='error' id='ma_emailErr'></label></div>
                                        </div>
                                        <div class="form-row row-fluid " id="cc_sh_ma_user_name">
                                            <label class="form-label span3 ">
                                                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['ma_user_name']['label_lang'];?>
 <em>*</em> 
                                            </label> 
                                            <div class="form-right-div  ">
                                                <?php if ($_smarty_tpl->tpl_vars['hide_admin_rec']->value == "1") {?>
                                                    <span class="frm-data-label"><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['ma_user_name'];?>
</strong></span>
                                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ma_user_name'];?>
" name="ma_user_name" id="ma_user_name"  class="ignore-valid"/>
                                                <?php } else { ?>
                                                    <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['ma_user_name']);?>
" name="ma_user_name" id="ma_user_name" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('ADMIN_USER_NAME');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                                                <?php }?>
                                            </div>
                                            <div class="error-msg-form "><label class='error' id='ma_user_nameErr'></label></div>
                                        </div>
                                        <?php $_smarty_tpl->tpl_vars["cb_ma_password"] = new Smarty_Variable($_smarty_tpl->tpl_vars['func']->value["ma_password"], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cb_ma_password", 0);?>
                                        <?php if ($_smarty_tpl->tpl_vars['cb_ma_password']->value == 0) {?>
                                            <input type="hidden" name="ma_password" id="ma_password" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ma_password'];?>
"  class='ignore-valid'  />
                                        <?php } else { ?>
                                            <div class="form-row row-fluid " id="cc_sh_ma_password">
                                                <label class="form-label span3 ">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['ma_password']['label_lang'];?>
 <em>*</em> 
                                                </label> 
                                                <div class="form-right-div  <?php if ('cb_ma_password' == 2) {?>frm-elements-div<?php }?> ">
                                                    <?php if ($_smarty_tpl->tpl_vars['cb_ma_password']->value == 2) {?>
                                                        <input type="hidden" name="ma_password" id="ma_password" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ma_password'];?>
" class="ignore-valid"/>
                                                        <span class="frm-data-label">
                                                            <strong>
                                                                <?php if ($_smarty_tpl->tpl_vars['data']->value['ma_password'] != '') {?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['ma_password'];?>

                                                                <?php } else { ?>
                                                                <?php }?>
                                                            </strong></span>
                                                        <?php } else { ?>
                                                            <?php if (strtoupper($_smarty_tpl->tpl_vars['this']->value->config->item("LOGIN_PASSWORD_TYPE")) == "Y") {?>
                                                                <input role="patternlock" placeholder="" autocomplete="off" type="password" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ma_password'];?>
" name="ma_password" id="ma_password" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('ADMIN_PASSWORD');?>
"  class='frm-size-medium'  <?php if ($_smarty_tpl->tpl_vars['cb_ma_password']->value == 3) {?> disabled <?php }?>   />
                                                            <?php } else { ?>
                                                                <input placeholder="" autocomplete="off" type="password" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ma_password'];?>
" name="ma_password" id="ma_password" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('ADMIN_PASSWORD');?>
"  class='frm-size-medium'  <?php if ($_smarty_tpl->tpl_vars['cb_ma_password']->value == 3) {?> disabled <?php }?>   />
                                                                <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Add") {?>
                                                                    <a href="javascript://" id="a_password_ma_password" class="tipR pwd-show-icon" onclick="adminShowHidePasswordField('ma_password');" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_CLICK_THIS_TO_SHOW_PASSWORD');?>
"><span id="span_password_ma_password" class="icon16 iconic-icon-lock-fill" ></span></a>
                                                                <?php }?>
                                                            <?php }?>
                                                        <?php }?>
                                                    </div>
                                                    <div class="error-msg-form "><label class='error' id='ma_passwordErr'></label></div>
                                                </div>
                                            <?php }?>
                                            <div class="form-row row-fluid " id="cc_sh_ma_phonenumber">
                                                <label class="form-label span3 ">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['ma_phonenumber']['label_lang'];?>
 <em>*</em> 
                                                </label> 
                                                <div class="form-right-div  ">
                                                    <input type="text" format="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminPHPFormats('phone');?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ma_phonenumber'];?>
" name="ma_phonenumber" id="ma_phonenumber" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('ADMIN_PHONE_NUMBER');?>
"  data-ctrl-type='phone_number'  class='frm-phone-number frm-size-medium'  style='width:auto;' />
                                                </div>
                                                <div class="error-msg-form "><label class='error' id='ma_phonenumberErr'></label></div>
                                            </div>
                                            <div class="form-row row-fluid " id="cc_sh_ma_status">
                                                <label class="form-label span3 ">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['ma_status']['label_lang'];?>
 <em>*</em> 
                                                </label> 
                                                <div class="form-right-div  ">
                                                    <?php if ($_smarty_tpl->tpl_vars['hide_del_status']->value == "1") {?>
                                                        <span class="frm-data-label"><strong><?php echo $_smarty_tpl->tpl_vars['this']->value->general->displayKeyValueData($_smarty_tpl->tpl_vars['data']->value["ma_status"],$_smarty_tpl->tpl_vars['opt_arr']->value["ma_status"]);?>
</strong></span>
                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ma_status'];?>
" name="ma_status" id="ma_status"  class="ignore-valid"/>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->tpl_vars["opt_selected"] = new Smarty_Variable($_smarty_tpl->tpl_vars['data']->value['ma_status'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "opt_selected", 0);?>
                                                        <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("ma_status","ma_status","  title='".((string)$_smarty_tpl->tpl_vars['this']->value->lang->line('ADMIN_STATUS'))."'  aria-chosen-valid='Yes'  class='chosen-select frm-size-medium'  data-placeholder='".((string)$_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','ADMIN_STATUS'))."'  ","|||",'',$_smarty_tpl->tpl_vars['opt_selected']->value,"ma_status");?>

                                                    <?php }?>
                                                </div>
                                                <div class="error-msg-form "><label class='error' id='ma_statusErr'></label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="frm-bot-btn <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_action_bar'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_action_btn'];?>
 popup-footer">
                                    <?php if ($_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_ctrls_view'] == 'No') {?>
                                        <?php $_smarty_tpl->tpl_vars['rm_ctrl_directions'] = new Smarty_Variable(true, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'rm_ctrl_directions', 0);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin_add_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                </div>
                            </div>
                            <div class="clear"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Module Form Javascript -->
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('javascript', array()); $_block_repeat=true; echo smarty_block_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            
    var el_form_settings = {}, elements_uni_arr = {}, child_rules_arr = {}, google_map_json = {}, pre_cond_code_arr = [];
    el_form_settings['module_name'] = '<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
'; 
    el_form_settings['extra_hstr'] = '<?php echo $_smarty_tpl->tpl_vars['extra_hstr']->value;?>
';
    el_form_settings['extra_qstr'] = '<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
';
    el_form_settings['upload_form_file_url'] = admin_url+"<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['upload_form_file'];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
";
    el_form_settings['get_chosen_auto_complete_url'] = admin_url+"<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['get_chosen_auto_complete'];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
";
    el_form_settings['token_auto_complete_url'] = admin_url+"<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['get_token_auto_complete'];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
";
    el_form_settings['tab_wise_block_url'] = admin_url+"<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['get_tab_wise_block'];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
";
    el_form_settings['parent_source_options_url'] = "<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['parent_source_options'];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
";
    el_form_settings['jself_switchto_url'] =  admin_url+'<?php echo $_smarty_tpl->tpl_vars['switch_cit']->value["url"];?>
';
    el_form_settings['callbacks'] = [];
    
    google_map_json = $.parseJSON('<?php echo json_encode($_smarty_tpl->tpl_vars['google_map_arr']->value);?>
');
    child_rules_arr = {};
            
    <?php if (is_array($_smarty_tpl->tpl_vars['auto_arr']->value) && count($_smarty_tpl->tpl_vars['auto_arr']->value) > 0) {?>
        setTimeout(function(){
            <?php
$_from = $_smarty_tpl->tpl_vars['auto_arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_i_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_i_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_i_0_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_i_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                if($("#<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
").is("select")){
                    $("#<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
").ajaxChosen({
                        dataType: "json",
                        type: "POST",
                        url: el_form_settings.get_chosen_auto_complete_url+"&unique_name=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&mode=<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value[$_smarty_tpl->tpl_vars['mode']->value];?>
&id=<?php echo $_smarty_tpl->tpl_vars['enc_id']->value;?>
"
                        },{
                        loadingImg: admin_image_url+"chosen-loading.gif"
                    });
                }
            <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_i_0_saved_local_item;
}
}
if ($__foreach_i_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_i_0_saved_item;
}
if ($__foreach_i_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_i_0_saved_key;
}
?>
        }, 500);
    <?php }?>        
    el_form_settings['jajax_submit_func'] = '';
    el_form_settings['jajax_submit_back'] = '';
    el_form_settings['jajax_action_url'] = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["add_action"];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
';
    el_form_settings['save_as_draft'] = 'No';
    el_form_settings['buttons_arr'] = [];
    el_form_settings['message_arr'] = {
        "delete_message" : "<?php echo $_smarty_tpl->tpl_vars['this']->value->general->processMessageLabel('ACTION_ARE_YOU_SURE_WANT_TO_DELETE_THIS_RECORD_C63');?>
",
    };
    
    callSwitchToSelf();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js('admin/admin_add_js.js');?>


<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js("admin/custom/removeAdminList.js");?>

<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

<?php }?> 
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('javascript', array()); $_block_repeat=true; echo smarty_block_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    Project.modules.admin.callEvents();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
