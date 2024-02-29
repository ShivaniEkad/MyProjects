<?php
/* Smarty version 3.1.28, created on 2021-08-04 06:14:05
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/staticpages_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_610a302dad8402_75201683',
  'file_dependency' => 
  array (
    '4052972c85f392344bf9a04bb15df007b1606aed' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/staticpages_add.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:staticpages_add_strip.tpl' => 1,
    'file:staticpages_add_buttons.tpl' => 1,
  ),
),false)) {
function content_610a302dad8402_75201683 ($_smarty_tpl) {
if (!is_callable('smarty_block_javascript')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/block.javascript.php';
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>
<div class="module-form-container">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:staticpages_add_strip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
" data-form-name="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
        <div id="ajax_content_div" class="ajax-content-div top-frm-spacing" >
            <input type="hidden" id="projmod" name="projmod" value="staticpages" />
            <!-- Page Loader -->
            <div id="ajax_qLoverlay"></div>
            <div id="ajax_qLbar"></div>
            <!-- Module Tabs & Top Detail View -->
            <div class="top-frm-tab-layout" id="top_frm_tab_layout">
            </div>
            <!-- Middle Content -->
            <div id="scrollable_content" class="scrollable-content popup-content top-block-spacing ">
                <div id="staticpages" class="frm-module-block frm-elem-block frm-stand-view">
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
                        <input type="hidden" name="mps_t_datecreated" id="mps_t_datecreated" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateDefinedFormat('Y-m-d',$_smarty_tpl->tpl_vars['data']->value['mps_t_datecreated']);?>
"  class='ignore-valid '  aria-date-format='yy-mm-dd'  aria-format-type='date' />
                        <input type="hidden" name="mps_status" id="mps_status" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['mps_status'];?>
"  class='ignore-valid ' />
                        <!-- Form Dispaly Fields Unit -->
                        <div class="main-content-block " id="main_content_block">
                            <div style="width:98%" class="frm-block-layout pad-calc-container">
                                <div class="box gradient <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_content_row'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_border_view'];?>
">
                                    <div class="title <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_titles_bar'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('STATICPAGES_STATIC_PAGES');?>
</h4></div>
                                    <div class="content <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_label_align'];?>
">
                                        <div class="form-row row-fluid " id="cc_sh_mps_page_title">
                                            <label class="form-label span3 ">
                                                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mps_page_title']['label_lang'];?>

                                            </label> 
                                            <div class="form-right-div  ">
                                                <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['mps_page_title']);?>
" name="mps_page_title" id="mps_page_title" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('STATICPAGES_PAGE_TITLE');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                                            </div>
                                            <div class="error-msg-form "><label class='error' id='mps_page_titleErr'></label></div>
                                        </div>
                                        <div class="form-row row-fluid " id="cc_sh_mps_page_code">
                                            <label class="form-label span3 ">
                                                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mps_page_code']['label_lang'];?>
 <em>*</em> 
                                            </label> 
                                            <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
                                                <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                                                    <input type="hidden" class="ignore-valid" name="mps_page_code" id="mps_page_code" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['mps_page_code']);?>
" />
                                                    <span class="frm-data-label">
                                                        <strong>
                                                            <?php if ($_smarty_tpl->tpl_vars['data']->value['mps_page_code'] != '') {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['mps_page_code'];?>

                                                            <?php } else { ?>
                                                            <?php }?>
                                                        </strong></span>
                                                    <?php } else { ?>
                                                        <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['mps_page_code']);?>
" name="mps_page_code" id="mps_page_code" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('STATICPAGES_PAGE_CODE');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                                                    <?php }?>
                                                </div>
                                                <div class="error-msg-form "><label class='error' id='mps_page_codeErr'></label></div>
                                            </div>
                                            <div class="form-row row-fluid " id="cc_sh_mps_url">
                                                <label class="form-label span3 ">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mps_url']['label_lang'];?>

                                                </label> 
                                                <div class="form-right-div  ">
                                                    <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['mps_url']);?>
" name="mps_url" id="mps_url" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('STATICPAGES_URL');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                                                </div>
                                                <div class="error-msg-form "><label class='error' id='mps_urlErr'></label></div>
                                            </div>
                                            <div class="form-row row-fluid " id="cc_sh_mps_version">
                                                <label class="form-label span3 ">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mps_version']['label_lang'];?>
 <em>*</em> 
                                                </label> 
                                                <div class="form-right-div  ">
                                                    <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['mps_version']);?>
" name="mps_version" id="mps_version" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('STATICPAGES_VERSION');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                                                </div>
                                                <div class="error-msg-form "><label class='error' id='mps_versionErr'></label></div>
                                            </div>
                                            <div class="form-row row-fluid " id="cc_sh_mps_content">
                                                <label class="form-label span3 ">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mps_content']['label_lang'];?>

                                                </label> 
                                                <div class="form-right-div  frm-editor-layout ">
                                                    <textarea name="mps_content" id="mps_content" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('STATICPAGES_CONTENT');?>
"  style='width:80%;'  class='frm-size-medium frm-editor-medium'  ><?php echo $_smarty_tpl->tpl_vars['data']->value['mps_content'];?>
</textarea>
                                                </div>
                                                <div class="error-msg-form "><label class='error' id='mps_contentErr'></label></div>
                                            </div>
                                            <div class="form-row row-fluid " id="cc_sh_mps_meta_title">
                                                <label class="form-label span3 ">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mps_meta_title']['label_lang'];?>

                                                </label> 
                                                <div class="form-right-div  ">
                                                    <textarea placeholder=""  name="mps_meta_title" id="mps_meta_title" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('STATICPAGES_META_TITLE');?>
"  data-ctrl-type='textarea'  class='elastic frm-size-medium'  ><?php echo $_smarty_tpl->tpl_vars['data']->value['mps_meta_title'];?>
</textarea>
                                                </div>
                                                <div class="error-msg-form "><label class='error' id='mps_meta_titleErr'></label></div>
                                            </div>
                                            <div class="form-row row-fluid " id="cc_sh_mps_meta_keyword">
                                                <label class="form-label span3 ">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mps_meta_keyword']['label_lang'];?>

                                                </label> 
                                                <div class="form-right-div  ">
                                                    <textarea placeholder=""  name="mps_meta_keyword" id="mps_meta_keyword" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('STATICPAGES_META_KEYWORD');?>
"  data-ctrl-type='textarea'  class='elastic frm-size-medium'  ><?php echo $_smarty_tpl->tpl_vars['data']->value['mps_meta_keyword'];?>
</textarea>
                                                </div>
                                                <div class="error-msg-form "><label class='error' id='mps_meta_keywordErr'></label></div>
                                            </div>
                                            <div class="form-row row-fluid " id="cc_sh_mps_meta_desc">
                                                <label class="form-label span3 ">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mps_meta_desc']['label_lang'];?>

                                                </label> 
                                                <div class="form-right-div  ">
                                                    <textarea placeholder=""  name="mps_meta_desc" id="mps_meta_desc" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('STATICPAGES_META_DESC');?>
"  data-ctrl-type='textarea'  class='elastic frm-size-medium'  ><?php echo $_smarty_tpl->tpl_vars['data']->value['mps_meta_desc'];?>
</textarea>
                                                </div>
                                                <div class="error-msg-form "><label class='error' id='mps_meta_descErr'></label></div>
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
                                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:staticpages_add_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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

<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js('admin/forms/tinymce/tinymce.min.js','admin/staticpages_add_js.js');?>


<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

<?php }?> 
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('javascript', array()); $_block_repeat=true; echo smarty_block_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    Project.modules.staticpages.callEvents();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
