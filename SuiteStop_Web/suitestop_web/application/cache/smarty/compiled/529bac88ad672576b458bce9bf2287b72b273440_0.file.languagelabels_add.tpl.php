<?php
/* Smarty version 3.1.28, created on 2021-08-20 08:34:17
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/languagelabels/views/languagelabels_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_611f6909977f18_57167503',
  'file_dependency' => 
  array (
    '529bac88ad672576b458bce9bf2287b72b273440' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/languagelabels/views/languagelabels_add.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:languagelabels_add_strip.tpl' => 1,
    'file:languagelabels_add_buttons.tpl' => 1,
  ),
),false)) {
function content_611f6909977f18_57167503 ($_smarty_tpl) {
if (!is_callable('smarty_block_javascript')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/block.javascript.php';
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>
<div class="module-form-container">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:languagelabels_add_strip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
" data-form-name="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
        <div id="ajax_content_div" class="ajax-content-div top-frm-spacing" >
            <input type="hidden" id="projmod" name="projmod" value="languagelabels" />
            <!-- Page Loader -->
            <div id="ajax_qLoverlay"></div>
            <div id="ajax_qLbar"></div>
            <!-- Module Tabs & Top Detail View -->
            <div class="top-frm-tab-layout" id="top_frm_tab_layout">
            </div>
            <!-- Middle Content -->
            <div id="scrollable_content" class="scrollable-content top-block-spacing ">
                <div id="languagelabels" class="frm-module-block frm-elem-block frm-stand-view">
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
                        <!-- Form Dispaly Fields Unit -->
                        <div class="main-content-block" id="main_content_block">
                            <div style="width:98%" class="frm-block-layout pad-calc-container">
                                <div class="box gradient <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_content_row'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_border_view'];?>
">
                                    <div class="title <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_titles_bar'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('LANGUAGELABELS_LANGUAGE_LABELS');?>
</h4></div>
                                    <div class="content <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_label_align'];?>
">
                                        <div class="form-row row-fluid" id="cc_sh_mll_label">
                                            <label class="form-label span3">
                                                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mll_label']['label_lang'];?>
 <em>*</em> 
                                            </label> 
                                            <div class="form-right-div   ">
                                                <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['mll_label']);?>
" name="mll_label" id="mll_label" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('LANGUAGELABELS_LANGUAGE_LABEL');?>
"  class='frm-size-medium'  />
                                            </div>
                                            <div class="error-msg-form "><label class='error' id='mll_labelErr'></label></div>
                                        </div>
                                        <div class="form-row row-fluid" id="cc_sh_mll_page">
                                            <label class="form-label span3">
                                                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mll_page']['label_lang'];?>
 <em>*</em> 
                                            </label> 
                                            <div class="form-right-div   ">
                                                <?php $_smarty_tpl->tpl_vars["opt_selected"] = new Smarty_Variable($_smarty_tpl->tpl_vars['data']->value['mll_page'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "opt_selected", 0);?>
                                                <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("mll_page","mll_page","  title='".((string)$_smarty_tpl->tpl_vars['this']->value->lang->line('LANGUAGELABELS_SELECT_PAGE'))."'  aria-chosen-valid='Yes'  class='chosen-select frm-size-medium'  data-placeholder='".((string)$_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','LANGUAGELABELS_SELECT_PAGE'))."'  ","|||",'',$_smarty_tpl->tpl_vars['opt_selected']->value,"mll_page");?>

                                            </div>
                                            <div class="error-msg-form "><label class='error' id='mll_pageErr'></label></div>
                                        </div>
                                        <div class="form-row row-fluid" id="cc_sh_mll_module">
                                            <label class="form-label span3">
                                                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mll_module']['label_lang'];?>
 <em>*</em> 
                                            </label> 
                                            <div class="form-right-div   ">
                                                <?php $_smarty_tpl->tpl_vars["opt_selected"] = new Smarty_Variable($_smarty_tpl->tpl_vars['data']->value['mll_module'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "opt_selected", 0);?>
                                                <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("mll_module","mll_module","  title='".((string)$_smarty_tpl->tpl_vars['this']->value->lang->line('LANGUAGELABELS_MODULE'))."'  aria-chosen-valid='Yes'  class='chosen-select frm-size-medium'  data-placeholder='".((string)$_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','LANGUAGELABELS_MODULE'))."'  ","|||",'',$_smarty_tpl->tpl_vars['opt_selected']->value,"mll_module");?>

                                            </div>
                                            <div class="error-msg-form "><label class='error' id='mll_moduleErr'></label></div>
                                        </div>
                                        <div class="form-row row-fluid" id="cc_sh_mllt_value">
                                            <div class="clear prime-lang-block" id="lnpr_mllt_value_<?php echo $_smarty_tpl->tpl_vars['prlang']->value;?>
">
                                                <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('LANGUAGELABELS_VALUE');?>
 <em>*</em> [<?php echo $_smarty_tpl->tpl_vars['lang_info']->value[$_smarty_tpl->tpl_vars['prlang']->value]['vLangTitle'];?>
] </label> 
                                                <div class="form-right-div  ">
                                                    <textarea placeholder="" name="mllt_value" id="mllt_value" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('LANGUAGELABELS_VALUE');?>
"  class='elastic frm-size-medium' aria-multi-lingual='parent' aria-lang-parent='mllt_value' aria-lang-code='<?php echo $_smarty_tpl->tpl_vars['prlang']->value;?>
'><?php echo htmlentities($_smarty_tpl->tpl_vars['lang_data']->value[$_smarty_tpl->tpl_vars['prlang']->value]['vTitle']);?>
</textarea>
                                                </div>
                                                <div class="error-msg-form "><label class='error' id='mllt_valueErr'></label></div>
                                            </div>
                                            <?php if (is_array($_smarty_tpl->tpl_vars['exlang_arr']->value) && count($_smarty_tpl->tpl_vars['exlang_arr']->value) > 0) {?>
                                                <?php
$__section_ml_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_ml']) ? $_smarty_tpl->tpl_vars['__section_ml'] : false;
$__section_ml_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['exlang_arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ml_0_total = $__section_ml_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ml'] = new Smarty_Variable(array());
if ($__section_ml_0_total != 0) {
for ($__section_ml_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index'] = 0; $__section_ml_0_iteration <= $__section_ml_0_total; $__section_ml_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index']++){
?>
                                                    <?php $_smarty_tpl->tpl_vars["exlang"] = new Smarty_Variable($_smarty_tpl->tpl_vars['exlang_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index'] : null)], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "exlang", 0);?>
                                                    <div class="clear other-lang-block" id="lnsh_mllt_value_<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
" style="<?php if ($_smarty_tpl->tpl_vars['exlang']->value != $_smarty_tpl->tpl_vars['dflang']->value) {?>display:none;<?php }?>">
                                                        <label class="form-label span3" style="margin-left:0"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('LANGUAGELABELS_VALUE');?>
 <em>*</em>  [<?php echo $_smarty_tpl->tpl_vars['lang_info']->value[$_smarty_tpl->tpl_vars['exlang']->value]['vLangTitle'];?>
]</label> 
                                                        <div class="form-right-div">
                                                            <textarea placeholder="" name="langmllt_value[<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
]" id="lang_mllt_value_<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('LANGUAGELABELS_VALUE');?>
"  class='elastic frm-size-medium' aria-multi-lingual="child" aria-lang-parent='mllt_value' aria-lang-code='<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['lang_data']->value[$_smarty_tpl->tpl_vars['exlang']->value]['vTitle'];?>
</textarea>
                                                        </div>
                                                    </div>
                                                <?php
}
}
if ($__section_ml_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_ml'] = $__section_ml_0_saved;
}
?>
                                                <div class="lang-flag-css">
                                                    <?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminLangFlagHTML("mllt_value",$_smarty_tpl->tpl_vars['exlang_arr']->value,$_smarty_tpl->tpl_vars['lang_info']->value);?>

                                                </div>
                                            <?php }?>
                                        </div>
                                        <div class="form-row row-fluid" id="cc_sh_mll_status">
                                            <label class="form-label span3">
                                                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mll_status']['label_lang'];?>
 <em>*</em> 
                                            </label> 
                                            <div class="form-right-div   ">
                                                <?php $_smarty_tpl->tpl_vars["opt_selected"] = new Smarty_Variable($_smarty_tpl->tpl_vars['data']->value['mll_status'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "opt_selected", 0);?>
                                                <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("mll_status","mll_status","  title='".((string)$_smarty_tpl->tpl_vars['this']->value->lang->line('LANGUAGELABELS_STATUS'))."'  aria-chosen-valid='Yes'  class='chosen-select frm-size-medium'  data-placeholder='".((string)$_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','LANGUAGELABELS_STATUS'))."'  ","|||",'',$_smarty_tpl->tpl_vars['opt_selected']->value,"mll_status");?>

                                            </div>
                                            <div class="error-msg-form "><label class='error' id='mll_statusErr'></label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="frm-bot-btn <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_action_bar'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_action_btn'];?>
">
                                <?php if ($_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_ctrls_view'] == 'No') {?>
                                    <?php $_smarty_tpl->tpl_vars['rm_ctrl_directions'] = new Smarty_Variable(true, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'rm_ctrl_directions', 0);?>
                                <?php }?>
                                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:languagelabels_add_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
"
    };
    
    el_form_settings['prime_lang_code'] = '<?php echo $_smarty_tpl->tpl_vars['prlang']->value;?>
';
    el_form_settings["default_lang_code"] = '<?php echo $_smarty_tpl->tpl_vars['dflang']->value;?>
';
    el_form_settings['other_lang_JSON'] = '<?php echo json_encode($_smarty_tpl->tpl_vars['exlang_arr']->value);?>
';
    intializeLanguageAutoEntry(el_form_settings["prime_lang_code"], el_form_settings["other_lang_JSON"], el_form_settings["default_lang_code"]);
    
    callSwitchToSelf();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js('admin/admin/js_languagelabels.js');?>


<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

<?php }
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('javascript', array()); $_block_repeat=true; echo smarty_block_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    Project.modules.languagelabels.callEvents();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
