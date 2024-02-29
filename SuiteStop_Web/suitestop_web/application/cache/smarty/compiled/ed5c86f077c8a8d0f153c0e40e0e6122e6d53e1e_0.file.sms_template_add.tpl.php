<?php
/* Smarty version 3.1.28, created on 2021-08-27 13:55:17
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/basic_appineers_master/views/sms_template_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_6128eec5cac4b9_09989833',
  'file_dependency' => 
  array (
    'ed5c86f077c8a8d0f153c0e40e0e6122e6d53e1e' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/basic_appineers_master/views/sms_template_add.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sms_template_add_strip.tpl' => 1,
    'file:sms_template_add_buttons.tpl' => 1,
  ),
),false)) {
function content_6128eec5cac4b9_09989833 ($_smarty_tpl) {
if (!is_callable('smarty_block_javascript')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/block.javascript.php';
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>
<div class="module-form-container">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sms_template_add_strip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
" data-form-name="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
        <div id="ajax_content_div" class="ajax-content-div top-frm-spacing" >
            <input type="hidden" id="projmod" name="projmod" value="sms_template" />
            <!-- Page Loader -->
            <div id="ajax_qLoverlay"></div>
            <div id="ajax_qLbar"></div>
            <!-- Module Tabs & Top Detail View -->
            <div class="top-frm-tab-layout" id="top_frm_tab_layout">
            </div>
            <!-- Middle Content -->
            <div id="scrollable_content" class="scrollable-content popup-content top-block-spacing ">
                <div id="sms_template" class="frm-module-block frm-elem-block frm-stand-view">
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
                        <input type="hidden" name="st_added_at" id="st_added_at" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['st_added_at']);?>
"  class='ignore-valid '  aria-date-format='<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date','dateFormat');?>
'  aria-format-type='date' />
                        <input type="hidden" name="st_updated_at" id="st_updated_at" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['st_updated_at']);?>
"  class='ignore-valid '  aria-date-format='<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date','dateFormat');?>
'  aria-format-type='date' />
                        <!-- Form Dispaly Fields Unit -->
                        <div class="main-content-block " id="main_content_block">
                            <div style="width:98%" class="frm-block-layout pad-calc-container">
                                <div class="box gradient <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_content_row'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_border_view'];?>
">
                                    <div class="title <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_titles_bar'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('SMS_TEMPLATE_SYSTEM_SMS');?>
</h4></div>
                                    <div class="content <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_label_align'];?>
">
                                        <div class="form-row row-fluid " id="cc_sh_st_template_code">
                                            <label class="form-label span3 ">
                                                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['st_template_code']['label_lang'];?>
 <em>*</em> 
                                            </label> 
                                            <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
                                                <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                                                    <input type="hidden" class="ignore-valid" name="st_template_code" id="st_template_code" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['st_template_code']);?>
" />
                                                    <span class="frm-data-label">
                                                        <strong>
                                                            <?php if ($_smarty_tpl->tpl_vars['data']->value['st_template_code'] != '') {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['st_template_code'];?>

                                                            <?php } else { ?>
                                                            <?php }?>
                                                        </strong></span>
                                                    <?php } else { ?>
                                                        <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['st_template_code']);?>
" name="st_template_code" id="st_template_code" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('SMS_TEMPLATE_TEMPLATE_CODE');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                                                    <?php }?>
                                                </div>
                                                <div class="error-msg-form "><label class='error' id='st_template_codeErr'></label></div>
                                            </div>
                                            <div class="form-row row-fluid " id="cc_sh_st_sms_text">
                                                <label class="form-label span3 ">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['st_sms_text']['label_lang'];?>
 <em>*</em> 
                                                </label> 
                                                <div class="form-right-div  ">
                                                    <textarea placeholder=""  name="st_sms_text" id="st_sms_text" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('SMS_TEMPLATE_SMS_TEXT');?>
"  data-ctrl-type='textarea'  class='elastic frm-size-medium'  ><?php echo $_smarty_tpl->tpl_vars['data']->value['st_sms_text'];?>
</textarea>
                                                </div>
                                                <div class="error-msg-form "><label class='error' id='st_sms_textErr'></label></div>
                                            </div>
                                            <div class="form-row row-fluid " id="cc_sh_st_status">
                                                <label class="form-label span3 ">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['st_status']['label_lang'];?>

                                                </label> 
                                                <div class="form-right-div  ">
                                                    <?php $_smarty_tpl->tpl_vars["opt_selected"] = new Smarty_Variable($_smarty_tpl->tpl_vars['data']->value['st_status'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "opt_selected", 0);?>
                                                    <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("st_status","st_status","  title='".((string)$_smarty_tpl->tpl_vars['this']->value->lang->line('SMS_TEMPLATE_STATUS'))."'  aria-chosen-valid='Yes'  class='chosen-select frm-size-medium'  data-placeholder='".((string)$_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','SMS_TEMPLATE_STATUS'))."'  ","|||",'',$_smarty_tpl->tpl_vars['opt_selected']->value,"st_status");?>

                                                </div>
                                                <div class="error-msg-form "><label class='error' id='st_statusErr'></label></div>
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
                                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sms_template_add_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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

<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js('admin/sms_template_add_js.js');?>


<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

<?php }?> 
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('javascript', array()); $_block_repeat=true; echo smarty_block_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    Project.modules.sms_template.callEvents();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
