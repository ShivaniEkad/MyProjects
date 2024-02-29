<?php
/* Smarty version 3.1.28, created on 2021-07-28 11:22:57
  from "/var/www/html/Appineers_V4_Web/application/admin/basic_appineers_master/views/feedback_management_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_61013e11e4bd91_05436124',
  'file_dependency' => 
  array (
    '637e56ef928ef6f6fedfcfb68ef3af3fffdd3f91' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/application/admin/basic_appineers_master/views/feedback_management_add.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:feedback_management_add_strip.tpl' => 1,
    'file:feedback_management_add_buttons.tpl' => 1,
  ),
),false)) {
function content_61013e11e4bd91_05436124 ($_smarty_tpl) {
if (!is_callable('smarty_block_javascript')) require_once '/var/www/html/Appineers_V4_Web/application/third_party/Smarty/plugins/block.javascript.php';
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>
<div class="module-form-container">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:feedback_management_add_strip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
" data-form-name="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
        <div id="ajax_content_div" class="ajax-content-div top-frm-spacing" >
            <input type="hidden" id="projmod" name="projmod" value="feedback_management" />
            <!-- Page Loader -->
            <div id="ajax_qLoverlay"></div>
            <div id="ajax_qLbar"></div>
            <!-- Module Tabs & Top Detail View -->
            <div class="top-frm-tab-layout" id="top_frm_tab_layout">
            </div>
            <!-- Middle Content -->
            <div id="scrollable_content" class="scrollable-content popup-content top-block-spacing ">
                <div id="feedback_management" class="frm-module-block frm-elem-block frm-stand-view">
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
                        <input type="hidden" name="uq_updated_at" id="uq_updated_at" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['uq_updated_at']);?>
"  class='ignore-valid '  aria-date-format='<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date','dateFormat');?>
'  aria-format-type='date' />
                        <!-- Form Dispaly Fields Unit -->
                        <div class="main-content-block " id="main_content_block">
                            <div style="width:98%" class="frm-block-layout pad-calc-container">
                                <div class="box gradient <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_content_row'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_border_view'];?>
">
                                    <div class="title <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_titles_bar'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_FEEDBACK_MANAGEMENT');?>
</h4></div>
                                    <div class="content <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_label_align'];?>
">
                                        <div class="form-row row-fluid " id="cc_sh_uq_user_id">
                                            <label class="form-label span3 ">
                                                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['uq_user_id']['label_lang'];?>

                                            </label> 
                                            <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
                                                <?php $_smarty_tpl->tpl_vars["opt_selected"] = new Smarty_Variable($_smarty_tpl->tpl_vars['data']->value['uq_user_id'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "opt_selected", 0);?>
                                                <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                                                    <input type="hidden" name="uq_user_id" id="uq_user_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['uq_user_id'];?>
" class="ignore-valid"/>
                                                    <?php $_smarty_tpl->tpl_vars["combo_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['opt_arr']->value["uq_user_id"], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "combo_arr", 0);?>
                                                    <?php $_smarty_tpl->tpl_vars["opt_display"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->displayKeyValueData($_smarty_tpl->tpl_vars['opt_selected']->value,$_smarty_tpl->tpl_vars['combo_arr']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "opt_display", 0);?>
                                                    <span class="frm-data-label">
                                                        <strong>
                                                            <?php if ($_smarty_tpl->tpl_vars['opt_display']->value != '') {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['opt_display']->value;?>

                                                            <?php } else { ?>
                                                            <?php }?>
                                                        </strong></span>
                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("uq_user_id","uq_user_id","  title='".((string)$_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_FULL_NAME'))."'  aria-chosen-valid='Yes'  class='chosen-select frm-size-medium'  data-placeholder='".((string)$_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','FEEDBACK_MANAGEMENT_FULL_NAME'))."'  ","|||",'',$_smarty_tpl->tpl_vars['opt_selected']->value,"uq_user_id");?>

                                                    <?php }?>
                                                </div>
                                                <div class="error-msg-form "><label class='error' id='uq_user_idErr'></label></div>
                                            </div>
                                            <div class="form-row row-fluid " id="cc_sh_uq_feedback">
                                                <label class="form-label span3 ">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['uq_feedback']['label_lang'];?>

                                                </label> 
                                                <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
                                                    <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                                                        <textarea style="display:none;" class="ignore-valid" name="uq_feedback" id="uq_feedback"><?php echo $_smarty_tpl->tpl_vars['data']->value['uq_feedback'];?>
</textarea>
                                                        <span class="frm-data-label">
                                                            <strong>
                                                                <?php if ($_smarty_tpl->tpl_vars['data']->value['uq_feedback'] != '') {?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['uq_feedback'];?>

                                                                <?php } else { ?>
                                                                <?php }?>
                                                            </strong></span>
                                                        <?php } else { ?>
                                                            <textarea placeholder=""  name="uq_feedback" id="uq_feedback" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_FEEDBACK');?>
"  data-ctrl-type='textarea'  class='elastic frm-size-medium'  ><?php echo $_smarty_tpl->tpl_vars['data']->value['uq_feedback'];?>
</textarea>
                                                        <?php }?>
                                                    </div>
                                                    <div class="error-msg-form "><label class='error' id='uq_feedbackErr'></label></div>
                                                </div>
                                                <div class="form-row row-fluid " id="cc_sh_uq_added_at">
                                                    <label class="form-label span3 ">
                                                        <?php echo $_smarty_tpl->tpl_vars['form_config']->value['uq_added_at']['label_lang'];?>

                                                    </label> 
                                                    <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php } else { ?>input-append text-append-prepend<?php }?> ">
                                                        <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                                                            <input type="hidden" name="uq_added_at" id="uq_added_at" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['uq_added_at']);?>
" class="ignore-valid view-label-only"  data-ctrl-type='date'  class='frm-datepicker ctrl-append-prepend frm-size-medium'  aria-date-format='<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date','dateFormat');?>
'  aria-format-type='date' />
                                                            <?php $_smarty_tpl->tpl_vars["display_date"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['uq_added_at']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "display_date", 0);?>
                                                            <span class="frm-data-label">
                                                                <strong>
                                                                    <?php if ($_smarty_tpl->tpl_vars['display_date']->value != '') {?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['display_date']->value;?>

                                                                    <?php } else { ?>
                                                                    <?php }?>
                                                                </strong></span>
                                                            <?php } else { ?>
                                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['uq_added_at']);?>
" placeholder="" name="uq_added_at" id="uq_added_at" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_REPORTED_ON');?>
"  data-ctrl-type='date'  class='frm-datepicker ctrl-append-prepend frm-size-medium'  aria-date-format='<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date','dateFormat');?>
'  aria-format-type='date'  />
                                                                <span class='add-on text-addon date-append-class icomoon-icon-calendar'></span>
                                                            <?php }?>
                                                        </div>
                                                        <div class="error-msg-form "><label class='error' id='uq_added_atErr'></label></div>
                                                    </div>
                                                    <div class="form-row row-fluid " id="cc_sh_uq_device_type">
                                                        <label class="form-label span3 ">
                                                            <?php echo $_smarty_tpl->tpl_vars['form_config']->value['uq_device_type']['label_lang'];?>

                                                        </label> 
                                                        <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
                                                            <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                                                                <input type="hidden" class="ignore-valid" name="uq_device_type" id="uq_device_type" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['uq_device_type']);?>
" />
                                                                <span class="frm-data-label">
                                                                    <strong>
                                                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['uq_device_type'] != '') {?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['data']->value['uq_device_type'];?>

                                                                        <?php } else { ?>
                                                                        <?php }?>
                                                                    </strong></span>
                                                                <?php } else { ?>
                                                                    <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['uq_device_type']);?>
" name="uq_device_type" id="uq_device_type" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_DEVICE_TYPE');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                                                                <?php }?>
                                                            </div>
                                                            <div class="error-msg-form "><label class='error' id='uq_device_typeErr'></label></div>
                                                        </div>
                                                        <div class="form-row row-fluid " id="cc_sh_uq_device_model">
                                                            <label class="form-label span3 ">
                                                                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['uq_device_model']['label_lang'];?>

                                                            </label> 
                                                            <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
                                                                <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                                                                    <input type="hidden" class="ignore-valid" name="uq_device_model" id="uq_device_model" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['uq_device_model']);?>
" />
                                                                    <span class="frm-data-label">
                                                                        <strong>
                                                                            <?php if ($_smarty_tpl->tpl_vars['data']->value['uq_device_model'] != '') {?>
                                                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['uq_device_model'];?>

                                                                            <?php } else { ?>
                                                                            <?php }?>
                                                                        </strong></span>
                                                                    <?php } else { ?>
                                                                        <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['uq_device_model']);?>
" name="uq_device_model" id="uq_device_model" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_DEVICE_MODEL');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                                                                    <?php }?>
                                                                </div>
                                                                <div class="error-msg-form "><label class='error' id='uq_device_modelErr'></label></div>
                                                            </div>
                                                            <div class="form-row row-fluid " id="cc_sh_uq_device_os">
                                                                <label class="form-label span3 ">
                                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['uq_device_os']['label_lang'];?>

                                                                </label> 
                                                                <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
                                                                    <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                                                                        <input type="hidden" class="ignore-valid" name="uq_device_os" id="uq_device_os" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['uq_device_os']);?>
" />
                                                                        <span class="frm-data-label">
                                                                            <strong>
                                                                                <?php if ($_smarty_tpl->tpl_vars['data']->value['uq_device_os'] != '') {?>
                                                                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['uq_device_os'];?>

                                                                                <?php } else { ?>
                                                                                <?php }?>
                                                                            </strong></span>
                                                                        <?php } else { ?>
                                                                            <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['uq_device_os']);?>
" name="uq_device_os" id="uq_device_os" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_DEVICE_OS');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                                                                        <?php }?>
                                                                    </div>
                                                                    <div class="error-msg-form "><label class='error' id='uq_device_osErr'></label></div>
                                                                </div>
                                                                <div class="form-row row-fluid " id="cc_sh_uq_app_version">
                                                                    <label class="form-label span3 ">
                                                                        <?php echo $_smarty_tpl->tpl_vars['form_config']->value['uq_app_version']['label_lang'];?>

                                                                    </label> 
                                                                    <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
                                                                        <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                                                                            <input type="hidden" class="ignore-valid" name="uq_app_version" id="uq_app_version" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['uq_app_version']);?>
" />
                                                                            <span class="frm-data-label">
                                                                                <strong>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['data']->value['uq_app_version'] != '') {?>
                                                                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['uq_app_version'];?>

                                                                                    <?php } else { ?>
                                                                                    <?php }?>
                                                                                </strong></span>
                                                                            <?php } else { ?>
                                                                                <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['uq_app_version']);?>
" name="uq_app_version" id="uq_app_version" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_APP_VERSION');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                                                                            <?php }?>
                                                                        </div>
                                                                        <div class="error-msg-form "><label class='error' id='uq_app_versionErr'></label></div>
                                                                    </div>
                                                                    <?php $_smarty_tpl->tpl_vars["child_module_name"] = new Smarty_Variable("query_images", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_module_name", 0);?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['child_assoc_status']->value[$_smarty_tpl->tpl_vars['child_module_name']->value] == 1) {?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_module_name"] = new Smarty_Variable("query_images", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_module_name", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_data"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_data']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_data", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_func"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_func']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_func", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_elem"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_elem']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_elem", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_conf_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_conf']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_conf_arr", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_opt_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_opt']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_opt_arr", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_img_html"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_img']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_img_html", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_auto_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_auto']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_auto_arr", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_access_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_access']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_access_arr", 0);?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['child_conf_arr']->value["recMode"] == "Update") {?>
                                                                            <?php $_smarty_tpl->tpl_vars["child_cnt"] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['child_data']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_cnt", 0);?>
                                                                            <?php $_smarty_tpl->tpl_vars["recMode"] = new Smarty_Variable("Update", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "recMode", 0);?>
                                                                        <?php } else { ?>
                                                                            <?php $_smarty_tpl->tpl_vars["child_cnt"] = new Smarty_Variable("0", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_cnt", 0);?>
                                                                            <?php $_smarty_tpl->tpl_vars["recMode"] = new Smarty_Variable("Add", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "recMode", 0);?>
                                                                        <?php }?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['child_cnt']->value > 0) {?>
                                                                            <?php $_smarty_tpl->tpl_vars["child_ord"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_cnt']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_ord", 0);?>
                                                                        <?php } else { ?>
                                                                            <?php $_smarty_tpl->tpl_vars["child_ord"] = new Smarty_Variable("1", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_ord", 0);?>
                                                                        <?php }?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_merge_data"] = new Smarty_Variable(array(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_merge_data", 0);?>
                                                                        <div class="form-row row-fluid form-inline-child" id="child_module_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
">
                                                                            <input type="hidden" name="childModule[]" id="childModule_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" />
                                                                            <input type="hidden" name="childModuleSingle[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleSingle_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="uqi_query_image"/>
                                                                            <input type="hidden" name="childModuleFileDesc[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleFileDesc_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value=""/>
                                                                            <input type="hidden" name="childModuleParField[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleParField_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="iUserQueryId"/>
                                                                            <input type="hidden" name="childModuleParData[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleParData_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL($_smarty_tpl->tpl_vars['data']->value['iUserQueryId']);?>
"/>
                                                                            <input type="hidden" name="childModuleLayout[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleLayout_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="Single"/>
                                                                            <input type="hidden" name="childModuleType[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleType_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="Single"/>
                                                                            <input type="hidden" name="childModuleCnt[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleCnt_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_cnt']->value;?>
" />
                                                                            <input type="hidden" name="childModuleInc[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleInc_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_cnt']->value;?>
" />
                                                                            <input type="hidden" name="childModulePopup[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModulePopup_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="No" />
                                                                            <input type="hidden" name="childModuleUploadURL[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleUploadURL_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_conf_arr']->value['mod_enc_url']['upload_form_file'];?>
" />
                                                                            <input type="hidden" name="childModuleChosenURL[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleChosenURL_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_conf_arr']->value['mod_enc_url']['get_chosen_auto_complete'];?>
" />
                                                                            <input type="hidden" name="childModuleParentURL[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleParentURL_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_conf_arr']->value['mod_enc_url']['parent_source_options'];?>
" />
                                                                            <input type="hidden" name="childModuleTokenURL[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleTokenURL_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_conf_arr']->value['mod_enc_url']['get_token_auto_complete'];?>
" />
                                                                            <input type="hidden" name="childModuleShowHide[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleShowHide_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="Yes" />
                                                                            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['child_ord']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                                                <?php $_smarty_tpl->tpl_vars["row_index"] = new Smarty_Variable((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "row_index", 0);?>
                                                                                <?php $_smarty_tpl->tpl_vars["child_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['iUserQueryImageId'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_id", 0);?>
                                                                                <?php $_smarty_tpl->tpl_vars["enc_child_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL($_smarty_tpl->tpl_vars['child_id']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "enc_child_id", 0);?>
                                                                                <?php $_smarty_tpl->tpl_vars["child_id_temp"] = new Smarty_Variable(array($_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['uqi_query_image']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_id_temp", 0);?>
                                                                                <?php $_smarty_tpl->tpl_vars["child_merge_data"] = new Smarty_Variable(array_merge($_smarty_tpl->tpl_vars['child_merge_data']->value,$_smarty_tpl->tpl_vars['child_id_temp']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_merge_data", 0);?>
                                                                                <input type="hidden" name="child[query_images][id][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_id_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_id']->value;?>
" />
                                                                                <input type="hidden" name="child[query_images][enc_id][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_enc_id_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['enc_child_id']->value;?>
" />
                                                                                <input type="hidden" name="child[query_images][uqi_user_query_id][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_uqi_user_query_id_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['uqi_user_query_id'];?>
"  class='ignore-valid ' />
                                                                                <input type="hidden" name="child[query_images][uqi_added_at][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_uqi_added_at_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['uqi_added_at'];?>
"  class='ignore-valid '  aria-date-format='yy-mm-dd'  aria-format-type='date' />
                                                                                <input type="hidden" name="child[query_images][uqi_status][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_uqi_status_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['uqi_status'];?>
"  class='ignore-valid ' />
                                                                            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                                                            <label class="form-label span3 inline-module-label"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_QUERY_IMAGES');?>
</label>
                                                                            <div class="form-right-div form-inline-child <?php if ($_smarty_tpl->tpl_vars['recMode']->value == "Update") {?>frm-elements-div<?php }?>"  id="child_module_rel_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
">
                                                                                <?php $_smarty_tpl->tpl_vars["cb_uqi_query_image"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_func']->value[0]["uqi_query_image"], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cb_uqi_query_image", 0);?>
                                                                                <?php if ($_smarty_tpl->tpl_vars['recMode']->value == "Update" && $_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                                                                                    <!-- View Only -->
                                                                                <?php } else { ?>
                                                                                    <div  class='btn-uploadify frm-size-medium' >
                                                                                        <div id="upload_drop_zone_child_query_images_uqi_query_image_0" class="upload-drop-zone"></div>
                                                                                        <div class="uploader upload-src-zone">
                                                                                            <input type="file" name="uploadify_child[query_images][uqi_query_image][0]" id="uploadify_child_query_images_uqi_query_image_0" title="<?php echo $_smarty_tpl->tpl_vars['child_conf_arr']->value['form_config']['uqi_query_image']['label_lang'];?>
" multiple=true />
                                                                                            <span class="filename" id="preview_child_query_images_uqi_query_image_0"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_DROP_FILES_HERE_OR_CLICK_TO_UPLOAD');?>
</span>
                                                                                            <span class="action">Choose File</span>
                                                                                        </div>
                                                                                    </div> 
                                                                                <?php }?>
                                                                                <span class="file-viewer">
                                                                                    <a href="javascript://" class="viewer-anchor tipR" style="text-decoration:none;" data-viewer-target="upload_multi_file_query_images" data-viewer-loop="row-upload-file" data-viewer-ext="gif,png,jpg,jpeg,jpe,bmp,ico">
                                                                                        <span class="icon24 minia-icon-eye viewer-icon" aria-hidden="true"></span>
                                                                                    </a>
                                                                                </span>
                                                                                <span class="input-comment">
                                                                                    <a href="javascript://" style="text-decoration: none;" class="tipR" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_VALID_EXTENSIONS');?>
 : gif, png, jpg, jpeg, jpe, bmp, ico.<br><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_VALID_SIZE');?>
 : <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_LESS_THAN');?>
 (<) 100 MB."><span class="icomoon-icon-help"></span></a>
                                                                                </span>
                                                                                <div class='clear upload-progress' id='progress_child_query_images_uqi_query_image_0' >
                                                                                    <div class='upload-progress-bar progress progress-striped active'>
                                                                                        <div class='bar' id='practive_child_query_images_uqi_query_image_0'></div>
                                                                                    </div>
                                                                                    <div class='upload-cancel-div'><a class='upload-cancel' href='javascript://'>Cancel</a></div>
                                                                                    <div class='clear'></div>
                                                                                </div>
                                                                                <div id="upload_multi_file_query_images" class="upload-multi-file frm-size-medium clear">
                                                                                    <?php $_smarty_tpl->tpl_vars["is_images_exists"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "is_images_exists", 0);?>
                                                                                    <?php
$__section_j_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__section_j'] : false;
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['child_cnt']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total != 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                                                                        <?php $_smarty_tpl->tpl_vars["row_index"] = new Smarty_Variable((isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "row_index", 0);?>
                                                                                        <?php if ($_smarty_tpl->tpl_vars['child_img_html']->value[$_smarty_tpl->tpl_vars['row_index']->value]["uqi_query_image"] != '') {?>
                                                                                            <?php $_smarty_tpl->tpl_vars["is_images_exists"] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "is_images_exists", 0);?>
                                                                                            <div class="row-upload-file" id="upload_row_query_images_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
">
                                                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['uqi_query_image'];?>
" name="child[query_images][old_uqi_query_image][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_old_uqi_query_image_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" />
                                                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['uqi_query_image'];?>
" name="child[query_images][uqi_query_image][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_uqi_query_image_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" class="ignore-valid" aria-extensions="gif,png,jpg,jpeg,jpe,bmp,ico" aria-valid-size="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_LESS_THAN');?>
 (<) 100 MB"/>
                                                                                                <div class="">
                                                                                                    <?php echo $_smarty_tpl->tpl_vars['child_img_html']->value[$_smarty_tpl->tpl_vars['row_index']->value]["uqi_query_image"];?>

                                                                                                </div>
                                                                                            </div>
                                                                                        <?php }?>
                                                                                    <?php
}
}
if ($__section_j_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_1_saved;
}
?>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['is_images_exists']->value == 0) {?>
                                                                                        <input type="hidden" value="" name="child[query_images][uqi_query_image][0]" id="child_query_images_uqi_query_image_0" class="_upload_req_file"/>
                                                                                    <?php }?>
                                                                                </div>
                                                                                <div class="clear"></div>
                                                                            </div>
                                                                            <div class="error-msg-form inline-module-error">
                                                                                <label class='error' id='child_query_images_uqi_query_image_0Err'></label>
                                                                            </div>
                                                                        </div>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['child_assoc_status']->value[$_smarty_tpl->tpl_vars['child_module_name']->value] == 2) {?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_module_name"] = new Smarty_Variable("query_images", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_module_name", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_data"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_data']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_data", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_func"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_func']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_func", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_elem"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_elem']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_elem", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_conf_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_conf']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_conf_arr", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_opt_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_opt']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_opt_arr", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_img_html"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_img']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_img_html", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_auto_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_auto']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_auto_arr", 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_access_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_assoc_access']->value[$_smarty_tpl->tpl_vars['child_module_name']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_access_arr", 0);?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['child_conf_arr']->value["recMode"] == "Update") {?>
                                                                            <?php $_smarty_tpl->tpl_vars["child_cnt"] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['child_data']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_cnt", 0);?>
                                                                            <?php $_smarty_tpl->tpl_vars["recMode"] = new Smarty_Variable("Update", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "recMode", 0);?>
                                                                        <?php } else { ?>
                                                                            <?php $_smarty_tpl->tpl_vars["child_cnt"] = new Smarty_Variable("0", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_cnt", 0);?>
                                                                            <?php $_smarty_tpl->tpl_vars["recMode"] = new Smarty_Variable("Add", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "recMode", 0);?>
                                                                        <?php }?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['child_cnt']->value > 0) {?>
                                                                            <?php $_smarty_tpl->tpl_vars["child_ord"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_cnt']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_ord", 0);?>
                                                                        <?php } else { ?>
                                                                            <?php $_smarty_tpl->tpl_vars["child_ord"] = new Smarty_Variable("1", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_ord", 0);?>
                                                                        <?php }?>
                                                                        <?php $_smarty_tpl->tpl_vars["child_merge_data"] = new Smarty_Variable(array(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_merge_data", 0);?>
                                                                        <div class="form-row row-fluid form-inline-child" id="child_module_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
">
                                                                            <input type="hidden" name="childModule[]" id="childModule_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" />
                                                                            <input type="hidden" name="childModuleShowHide[<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
]" id="childModuleShowHide_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
" value="No" />
                                                                            <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['child_ord']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                                                <?php $_smarty_tpl->tpl_vars["row_index"] = new Smarty_Variable((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "row_index", 0);?>
                                                                                <?php $_smarty_tpl->tpl_vars["child_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['iUserQueryImageId'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_id", 0);?>
                                                                                <?php $_smarty_tpl->tpl_vars["enc_child_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL($_smarty_tpl->tpl_vars['child_id']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "enc_child_id", 0);?>
                                                                                <?php $_smarty_tpl->tpl_vars["child_id_temp"] = new Smarty_Variable(array($_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['uqi_query_image']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_id_temp", 0);?>
                                                                                <?php $_smarty_tpl->tpl_vars["child_merge_data"] = new Smarty_Variable(array_merge($_smarty_tpl->tpl_vars['child_merge_data']->value,$_smarty_tpl->tpl_vars['child_id_temp']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_merge_data", 0);?>
                                                                                <input type="hidden" name="child[query_images][id][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_id_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_id']->value;?>
" />
                                                                                <input type="hidden" name="child[query_images][enc_id][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_enc_id_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['enc_child_id']->value;?>
" />
                                                                                <input type="hidden" name="child[query_images][uqi_user_query_id][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_uqi_user_query_id_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['uqi_user_query_id'];?>
"  class='ignore-valid ' />
                                                                                <input type="hidden" name="child[query_images][uqi_added_at][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_uqi_added_at_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['uqi_added_at'];?>
"  class='ignore-valid '  aria-date-format='yy-mm-dd'  aria-format-type='date' />
                                                                                <input type="hidden" name="child[query_images][uqi_status][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_uqi_status_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['uqi_status'];?>
"  class='ignore-valid ' />
                                                                            <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
                                                                            <label class="form-label span3 inline-module-label"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_QUERY_IMAGES');?>
</label>
                                                                            <div class="form-right-div form-inline-child <?php if ($_smarty_tpl->tpl_vars['recMode']->value == "Update") {?>frm-elements-div<?php }?>"  id="child_module_rel_<?php echo $_smarty_tpl->tpl_vars['child_module_name']->value;?>
">
                                                                                <div id="upload_multi_file_query_images" class="upload-multi-file frm-size-medium clear">
                                                                                    <?php $_smarty_tpl->tpl_vars["is_images_exists"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "is_images_exists", 0);?>
                                                                                    <?php
$__section_j_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__section_j'] : false;
$__section_j_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['child_cnt']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_3_total = $__section_j_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_3_total != 0) {
for ($__section_j_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_3_iteration <= $__section_j_3_total; $__section_j_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                                                                        <?php $_smarty_tpl->tpl_vars["row_index"] = new Smarty_Variable((isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "row_index", 0);?>
                                                                                        <?php if ($_smarty_tpl->tpl_vars['child_img_html']->value[$_smarty_tpl->tpl_vars['row_index']->value]["uqi_query_image"] != '') {?>
                                                                                            <?php $_smarty_tpl->tpl_vars["is_images_exists"] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "is_images_exists", 0);?>
                                                                                            <div class="row-upload-file" id="upload_row_query_images_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
">
                                                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['uqi_query_image'];?>
" name="child[query_images][old_uqi_query_image][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_old_uqi_query_image_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" />
                                                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['child_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['uqi_query_image'];?>
" name="child[query_images][uqi_query_image][<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
]" id="child_query_images_uqi_query_image_<?php echo $_smarty_tpl->tpl_vars['row_index']->value;?>
" class="ignore-valid" aria-extensions="gif,png,jpg,jpeg,jpe,bmp,ico" aria-valid-size="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_LESS_THAN');?>
 (<) 100 MB"/>
                                                                                                <div class="">
                                                                                                    <?php echo $_smarty_tpl->tpl_vars['child_img_html']->value[$_smarty_tpl->tpl_vars['row_index']->value]["uqi_query_image"];?>

                                                                                                </div>
                                                                                            </div>
                                                                                        <?php }?>
                                                                                    <?php
}
}
if ($__section_j_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_3_saved;
}
?>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['is_images_exists']->value == 0) {?>
                                                                                        <input type="hidden" value="" name="child[query_images][uqi_query_image][0]" id="child_query_images_uqi_query_image_0" class="_upload_req_file"/>
                                                                                    <?php }?>
                                                                                </div>
                                                                                <div class="clear"></div>
                                                                            </div>
                                                                        </div>
                                                                    <?php }?>
                                                                    <div class="form-row row-fluid " id="cc_sh_uq_note">
                                                                        <label class="form-label span3 ">
                                                                            <?php echo $_smarty_tpl->tpl_vars['form_config']->value['uq_note']['label_lang'];?>

                                                                        </label> 
                                                                        <div class="form-right-div  ">
                                                                            <textarea placeholder=""  name="uq_note" id="uq_note" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_NOTES');?>
"  data-ctrl-type='textarea'  class='elastic frm-size-medium'  ><?php echo $_smarty_tpl->tpl_vars['data']->value['uq_note'];?>
</textarea>
                                                                        </div>
                                                                        <div class="error-msg-form "><label class='error' id='uq_noteErr'></label></div>
                                                                    </div>
                                                                    <div class="form-row row-fluid " id="cc_sh_uq_status">
                                                                        <label class="form-label span3 ">
                                                                            <?php echo $_smarty_tpl->tpl_vars['form_config']->value['uq_status']['label_lang'];?>

                                                                        </label> 
                                                                        <div class="form-right-div  ">
                                                                            <?php $_smarty_tpl->tpl_vars["opt_selected"] = new Smarty_Variable($_smarty_tpl->tpl_vars['data']->value['uq_status'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "opt_selected", 0);?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("uq_status","uq_status","  title='".((string)$_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_STATUS'))."'  aria-chosen-valid='Yes'  class='chosen-select frm-size-medium'  data-placeholder='".((string)$_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','FEEDBACK_MANAGEMENT_STATUS'))."'  ","|||",'',$_smarty_tpl->tpl_vars['opt_selected']->value,"uq_status");?>

                                                                        </div>
                                                                        <div class="error-msg-form "><label class='error' id='uq_statusErr'></label></div>
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
                                                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:feedback_management_add_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
    child_rules_arr = {
        "query_images": {
            "uqi_user_query_id": {
                "type": "dropdown",
                "vUniqueName": "uqi_user_query_id",
                "editrules": {
                    "infoArr": []
                }
            },
            "uqi_query_image": {
                "type": "file",
                "vUniqueName": "uqi_query_image",
                "editrules": {
                    "infoArr": []
                }
            },
            "uqi_added_at": {
                "type": "date",
                "vUniqueName": "uqi_added_at",
                "editrules": {
                    "infoArr": []
                }
            },
            "uqi_status": {
                "type": "dropdown",
                "vUniqueName": "uqi_status",
                "editrules": {
                    "infoArr": []
                }
            }
        }
    };
            
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
        "child_messages" : {
            "delete_message" : {
        "query_images" : "<?php echo $_smarty_tpl->tpl_vars['this']->value->general->processMessageLabel('ACTION_ARE_YOU_SURE_WANT_TO_DELETE_THIS_RECORD_C63');?>
",
            }
        }
    };
    
    callSwitchToSelf();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js('admin/feedback_management_add_js.js');?>


<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js("admin/custom/feedbackjs.js");?>

<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

<?php }?> 
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('javascript', array()); $_block_repeat=true; echo smarty_block_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    Project.modules.feedback_management.callEvents();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
