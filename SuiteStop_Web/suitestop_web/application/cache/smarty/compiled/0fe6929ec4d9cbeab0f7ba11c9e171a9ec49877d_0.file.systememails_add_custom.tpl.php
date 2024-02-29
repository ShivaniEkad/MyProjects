<?php
/* Smarty version 3.1.28, created on 2021-08-27 05:28:54
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/systememails_add_custom.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_612878166436a2_82299258',
  'file_dependency' => 
  array (
    '0fe6929ec4d9cbeab0f7ba11c9e171a9ec49877d' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/systememails_add_custom.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_form_direction.tpl' => 1,
    'file:admin_form_control.tpl' => 1,
  ),
),false)) {
function content_612878166436a2_82299258 ($_smarty_tpl) {
if (!is_callable('smarty_block_javascript')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/block.javascript.php';
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }
$_smarty_tpl->tpl_vars["mod_label_text"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->getDisplayLabel("Generic",$_smarty_tpl->tpl_vars['mode']->value,"label"), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "mod_label_text", 0);?>
<div class="headingfix">
    <div class="heading" id="top_heading_fix">
        <h3>
            <div class="screen-title">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line($_smarty_tpl->tpl_vars['mod_label_text']->value);?>
 :: <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_SYSTEM_EMAILS');?>

                <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update' && $_smarty_tpl->tpl_vars['recName']->value != '') {?> :: <?php echo $_smarty_tpl->tpl_vars['recName']->value;?>
 <?php }?>
            </div>
        </h3>
        <div class="header-right-btns">
            <?php if ($_smarty_tpl->tpl_vars['backlink_allow']->value == true) {?>
                <div class="frm-back-to">
                    <a hijacked="yes" href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['index'];
echo $_smarty_tpl->tpl_vars['extra_hstr']->value;?>
"class="backlisting-link" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_BACK_TO_SYSTEM_EMAILS_LISTING','#MODULE_HEADING#','SYSTEMEMAILS_SYSTEM_EMAILS');?>
">
                        <span class="icon16 minia-icon-arrow-left"></span>
                    </a>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['next_link_allow']->value == true) {?>
                <div class="frm-next-rec">
                    <a hijacked="yes" title="<?php echo $_smarty_tpl->tpl_vars['next_prev_records']->value['next']['val'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['add'];?>
|mode|<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value['Update'];?>
|id|<?php echo $_smarty_tpl->tpl_vars['next_prev_records']->value['next']['enc_id'];
echo $_smarty_tpl->tpl_vars['extra_hstr']->value;?>
" class='btn next-btn'><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_NEXT_SHORT');?>
 <span class='icon12 icomoon-icon-arrow-right'></span></a>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['switchto_allow']->value == true) {?>
                <div class="frm-switch-drop">
                    <?php if (is_array($_smarty_tpl->tpl_vars['switch_combo']->value) && count($_smarty_tpl->tpl_vars['switch_combo']->value) > 0) {?>
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display('vSwitchPage',"vSwitchPage","style='width:100%;' class='chosen-select' onchange='return loadAdminModuleAddSwitchPage(\"".((string)$_smarty_tpl->tpl_vars['mod_enc_url']->value['add'])."\",this.value, \"".((string)$_smarty_tpl->tpl_vars['extra_hstr']->value)."\")'",'','',$_smarty_tpl->tpl_vars['enc_id']->value);?>

                    <?php }?>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prev_link_allow']->value == true) {?>
                <div class="frm-prev-rec">
                    <a hijacked="yes" title="<?php echo $_smarty_tpl->tpl_vars['next_prev_records']->value['prev']['val'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['add'];?>
|mode|<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value['Update'];?>
|id|<?php echo $_smarty_tpl->tpl_vars['next_prev_records']->value['prev']['enc_id'];
echo $_smarty_tpl->tpl_vars['extra_hstr']->value;?>
" class='btn prev-btn'> <span class='icon12 icomoon-icon-arrow-left'></span> <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_PREV_SHORT');?>
</a>
                </div>
            <?php }?>
            <div class="clear"></div>
        </div>
        <span style="display:none;position:inherit;" id="ajax_lang_loader"><i class="fa fa-refresh fa-spin-light fa-2x fa-fw"></i></span>
    </div>
</div>
<div id="ajax_content_div" class="ajax-content-div top-frm-spacing" >
    <input type="hidden" id="projmod" name="projmod" value="system_emails">
    <div id="ajax_qLoverlay"></div>
    <div id="ajax_qLbar"></div>
    <div class="top-frm-tab-layout" id="top_frm_tab_layout"></div>
    <div id="scrollable_content" class="scrollable-content top-block-spacing">
        <div id="system_emails" class="frm-elem-block frm-stand-view">
            <form name="frmaddupdate" id="frmaddupdate" action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['add_action'];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
" method="post"  enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['enc_id']->value;?>
">
                <input type="hidden" id="mode" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value[$_smarty_tpl->tpl_vars['mode']->value];?>
">
                <input type="hidden" id="ctrl_prev_id" name="ctrl_prev_id" value="<?php echo $_smarty_tpl->tpl_vars['next_prev_records']->value['prev']['id'];?>
">
                <input type="hidden" id="ctrl_next_id" name="ctrl_next_id" value="<?php echo $_smarty_tpl->tpl_vars['next_prev_records']->value['next']['id'];?>
">
                <input type="hidden" id="extra_hstr" name="extra_hstr" value="<?php echo $_smarty_tpl->tpl_vars['extra_hstr']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>
                    <input type="hidden" name="mse_status" id="mse_status" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['mse_status'];?>
"  class='ignore-valid' />
                <?php } else { ?>
                    <input type="hidden" name="mse_status" id="mse_status" value="Active"  class='ignore-valid' />
                <?php }?>
                <div class="main-content-block" id="main_content_block">
                    <div style="width:98%" class="frm-block-layout pad-calc-container">
                        <div class="box gradient <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_content_row'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_border_view'];?>
">
                            <div class="title <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_titles_bar'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_SYSTEM_EMAILS');?>
</h4></div>
                            <div class="content <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_label_align'];?>
">
                                <div class="form-row row-fluid" id="cc_sh_mse_email_title">
                                    <div class="clear prime-lang-block" id="lnpr_mse_email_title_<?php echo $_smarty_tpl->tpl_vars['prlang']->value;?>
">
                                        <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_EMAIL_TITLE');?>
 <em>*</em></label> 
                                        <div class="form-right-div  ">
                                            <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['mse_email_title']);?>
" name="mse_email_title" id="mse_email_title" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_EMAIL_TITLE');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  aria-lang-parent='mse_email_title'  aria-multi-lingual='parent'  aria-lang-code='<?php echo $_smarty_tpl->tpl_vars['prlang']->value;?>
'  />
                                        </div>
                                        <div class="error-msg-form "><label class='error' id='mse_email_titleErr'></label></div>
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
                                            <div class="clear other-lang-block" id="lnsh_mse_email_title_<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
" style="<?php if ($_smarty_tpl->tpl_vars['exlang']->value != $_smarty_tpl->tpl_vars['dflang']->value) {?>display:none;<?php }?>">
                                                <label class="form-label span3" style="margin-left:0">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mse_email_title']['label_lang'];?>
 [<?php echo $_smarty_tpl->tpl_vars['lang_info']->value[$_smarty_tpl->tpl_vars['exlang']->value]['vLangTitle'];?>
]
                                                </label> 
                                                <div class="form-right-div">
                                                    <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['lang_data']->value[$_smarty_tpl->tpl_vars['exlang']->value]['vEmailTitle']);?>
" name="langmse_email_title[<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
]" id="lang_mse_email_title_<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('SYSTEMEMAILS_EMAIL_TITLE');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  aria-lang-parent='mse_email_title'  aria-multi-lingual='child'  aria-lang-code='<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
'  />
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
                                            <?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminLangFlagHTML("mse_email_title",$_smarty_tpl->tpl_vars['exlang_arr']->value,$_smarty_tpl->tpl_vars['lang_info']->value);?>

                                        </div>
                                    <?php }?>
                                </div>
                                <div class="form-row row-fluid" id="cc_sh_mse_email_code">
                                    <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_EMAIL_CODE');?>
 <em>*</em></label> 
                                    <div class="form-right-div  ">
                                        <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['mse_email_code']);?>
" name="mse_email_code" id="mse_email_code" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_EMAIL_CODE');?>
" data-ctrl-type='textbox'  class='frm-size-medium'  />
                                        <a class="tipR" style="text-decoration:none;" href="javascript://" title="Email Code should not contain spaces <br>Exapmle: DEMO_EMAIL_CODE">
                                            <span class="icomoon-icon-help"></span>
                                        </a>
                                    </div>
                                    <div class="error-msg-form "><label class='error' id='mse_email_codeErr'></label></div>
                                </div>
                                <div class="form-row row-fluid" id="cc_sh_mse_email_subject">
                                    <div class="clear prime-lang-block" id="lnpr_mse_email_subject_<?php echo $_smarty_tpl->tpl_vars['prlang']->value;?>
">
                                        <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_EMAIL_SUBJECT');?>
 <em>*</em></label> 
                                        <div class="form-right-div  ">
                                            <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['mse_email_subject']);?>
" name="mse_email_subject" id="mse_email_subject" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_EMAIL_SUBJECT');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  aria-lang-parent='mse_email_subject'  aria-multi-lingual='parent'  aria-lang-code='<?php echo $_smarty_tpl->tpl_vars['prlang']->value;?>
'  />
                                        </div>
                                        <div class="error-msg-form "><label class='error' id='mse_email_subjectErr'></label></div>
                                    </div>
                                    <?php if (is_array($_smarty_tpl->tpl_vars['exlang_arr']->value) && count($_smarty_tpl->tpl_vars['exlang_arr']->value) > 0) {?>
                                        <?php
$__section_ml_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_ml']) ? $_smarty_tpl->tpl_vars['__section_ml'] : false;
$__section_ml_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['exlang_arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ml_1_total = $__section_ml_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ml'] = new Smarty_Variable(array());
if ($__section_ml_1_total != 0) {
for ($__section_ml_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index'] = 0; $__section_ml_1_iteration <= $__section_ml_1_total; $__section_ml_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index']++){
?>
                                            <?php $_smarty_tpl->tpl_vars["exlang"] = new Smarty_Variable($_smarty_tpl->tpl_vars['exlang_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index'] : null)], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "exlang", 0);?>
                                            <div class="clear other-lang-block" id="lnsh_mse_email_subject_<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
" style="<?php if ($_smarty_tpl->tpl_vars['exlang']->value != $_smarty_tpl->tpl_vars['dflang']->value) {?>display:none;<?php }?>">
                                                <label class="form-label span3" style="margin-left:0">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mse_email_subject']['label_lang'];?>
 [<?php echo $_smarty_tpl->tpl_vars['lang_info']->value[$_smarty_tpl->tpl_vars['exlang']->value]['vLangTitle'];?>
]
                                                </label> 
                                                <div class="form-right-div">
                                                    <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['lang_data']->value[$_smarty_tpl->tpl_vars['exlang']->value]['vEmailSubject']);?>
" name="langmse_email_subject[<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
]" id="lang_mse_email_subject_<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('SYSTEMEMAILS_EMAIL_SUBJECT');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  aria-lang-parent='mse_email_subject'  aria-multi-lingual='child'  aria-lang-code='<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
'  />
                                                </div>
                                            </div>
                                        <?php
}
}
if ($__section_ml_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_ml'] = $__section_ml_1_saved;
}
?>
                                        <div class="lang-flag-css">
                                            <?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminLangFlagHTML("mse_email_subject",$_smarty_tpl->tpl_vars['exlang_arr']->value,$_smarty_tpl->tpl_vars['lang_info']->value);?>

                                        </div>
                                    <?php }?>
                                </div>
                                <div class="form-row row-fluid" id="cc_sh_mse_from_name">
                                    <div class="clear prime-lang-block" id="lnpr_mse_from_name_<?php echo $_smarty_tpl->tpl_vars['prlang']->value;?>
">
                                        <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_FROM_NAME');?>
</label> 
                                        <div class="form-right-div  ">
                                            <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['mse_from_name']);?>
" name="mse_from_name" id="mse_from_name" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_FROM_NAME');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  aria-lang-parent='mse_from_name'  aria-multi-lingual='parent'  aria-lang-code='<?php echo $_smarty_tpl->tpl_vars['prlang']->value;?>
'  />
                                        </div>
                                        <div class="error-msg-form "><label class='error' id='mse_from_nameErr'></label></div>
                                    </div>
                                    <?php if (is_array($_smarty_tpl->tpl_vars['exlang_arr']->value) && count($_smarty_tpl->tpl_vars['exlang_arr']->value) > 0) {?>
                                        <?php
$__section_ml_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_ml']) ? $_smarty_tpl->tpl_vars['__section_ml'] : false;
$__section_ml_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['exlang_arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ml_2_total = $__section_ml_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ml'] = new Smarty_Variable(array());
if ($__section_ml_2_total != 0) {
for ($__section_ml_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index'] = 0; $__section_ml_2_iteration <= $__section_ml_2_total; $__section_ml_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index']++){
?>
                                            <?php $_smarty_tpl->tpl_vars["exlang"] = new Smarty_Variable($_smarty_tpl->tpl_vars['exlang_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index'] : null)], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "exlang", 0);?>
                                            <div class="clear other-lang-block" id="lnsh_mse_from_name_<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
" style="<?php if ($_smarty_tpl->tpl_vars['exlang']->value != $_smarty_tpl->tpl_vars['dflang']->value) {?>display:none;<?php }?>">
                                                <label class="form-label span3" style="margin-left:0">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mse_from_name']['label_lang'];?>
 [<?php echo $_smarty_tpl->tpl_vars['lang_info']->value[$_smarty_tpl->tpl_vars['exlang']->value]['vLangTitle'];?>
]
                                                </label> 
                                                <div class="form-right-div">
                                                    <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['lang_data']->value[$_smarty_tpl->tpl_vars['exlang']->value]['vFromName']);?>
" name="langmse_from_name[<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
]" id="lang_mse_from_name_<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('SYSTEMEMAILS_FROM_NAME');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  aria-lang-parent='mse_from_name'  aria-multi-lingual='child'  aria-lang-code='<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
'  />
                                                </div>
                                            </div>
                                        <?php
}
}
if ($__section_ml_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_ml'] = $__section_ml_2_saved;
}
?>
                                        <div class="lang-flag-css">
                                            <?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminLangFlagHTML("mse_from_name",$_smarty_tpl->tpl_vars['exlang_arr']->value,$_smarty_tpl->tpl_vars['lang_info']->value);?>

                                        </div>
                                    <?php }?>
                                </div>
                                <div class="form-row row-fluid" id="cc_sh_mse_from_email">
                                    <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_FROM_EMAIL');?>
</label> 
                                    <div class="form-right-div  ">
                                        <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['mse_from_email']);?>
" name="mse_from_email" id="mse_from_email" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_FROM_EMAIL');?>
"  data-ctrl-type='textbox' class='frm-size-medium'  />
                                    </div>
                                    <div class="error-msg-form "><label class='error' id='mse_from_emailErr'></label></div>
                                </div>
                                <div class="form-row row-fluid" id="cc_sh_mse_bcc_email">
                                    <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_ADD_BCC');?>
</label> 
                                    <div class="form-right-div  ">
                                        <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['mse_bcc_email']);?>
" name="mse_bcc_email" id="mse_bcc_email" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_ADD_BCC');?>
" data-ctrl-type='textbox'  class='frm-size-medium'  />
                                    </div>
                                    <div class="error-msg-form "><label class='error' id='mse_bcc_emailErr'></label></div>
                                </div>
                                <div class="form-row row-fluid" id="cc_sh_mse_cc_email">
                                    <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_ADD_CC');?>
</label> 
                                    <div class="form-right-div  ">
                                        <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['mse_cc_email']);?>
" name="mse_cc_email" id="mse_cc_email" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_ADD_CC');?>
" data-ctrl-type='textbox' class='frm-size-medium'  />
                                    </div>
                                    <div class="error-msg-form "><label class='error' id='mse_cc_emailErr'></label></div>
                                </div>
                                <div class="form-row row-fluid">
                                    <div class="box form-child-table" style="margin-bottom:0;">
                                        <div class="title">
                                            <h4>
                                                <span class="icon12 icomoon-icon-equalizer-2"></span>
                                                <span><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_VARIABLES');?>
</span>
                                                <span id="ajax_loader_childModle" style="display:none;margin-left:32%"><i class="fa fa-refresh fa-spin-light fa-2x fa-fw"></i></span>
                                                <div class="box-addmore right">
                                                    <a onclick="Project.modules.systememails.getSystemEmailVariableTable()" href="javascript://" class="btn btn-success">
                                                        <span class="icon14 icomoon-icon-plus-2"></span>
                                                        <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_ADD_NEW');?>

                                                    </a>
                                                </div>
                                            </h4>
                                            <a style="display: none;" class="minimize" href="javascript://"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_MINIMIZE');?>
</a>
                                        </div>
                                        <div class="content noPad system-email-vars">
                                            <table id="tbl_child_module" class="responsive table table-bordered">
                                                <thead>    
                                                    <tr>
                                                        <th width='3%'>#</th>
                                                        <th width='40%'><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_VARIABLES');?>
 <em>*</em> 
                                                            <a class="tipR" style="text-decoration:none;" href="javascript://" title="Example : #COMPANY_NAME#">
                                                                <span class="icomoon-icon-help"></span>
                                                            </a>
                                                        </th>
                                                        <th width='40%'><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_DESCRIPTION');?>
</th>
                                                        <th width='17%'><div align="center"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_ACTIONS');?>
</div></th>
                                                </tr>
                                                </thead>
                                            </table>
                                            <table width="100%" border="0" cellpadding='0' cellspacing="0">
                                                <tr>
                                                    <td id='mails_fields_list'>
                                                        <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>
                                                            <?php $_smarty_tpl->tpl_vars["var_count"] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['db_email_vars']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "var_count", 0);?>
                                                        <?php } else { ?>
                                                            <?php $_smarty_tpl->tpl_vars["var_count"] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "var_count", 0);?>
                                                        <?php }?>
                                                        <?php
$__section_k_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_k']) ? $_smarty_tpl->tpl_vars['__section_k'] : false;
$__section_k_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['var_count']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_3_total = $__section_k_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_3_total != 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] <= $__section_k_3_total; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                                                            <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable((isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "i", 0);?>
                                                            <table width='100%' cellspacing='0' cellpadding='0' border="0" class="responsive table table-bordered field-sortable">
                                                                <tr id="tr_child_row_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                                    <td class="row-num-child" width='3%'><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
</td>
                                                                    <td width='40%'>
                                                                        <div class="">
                                                                            <input type="hidden" name="iEmailVariableId[]" value="<?php echo $_smarty_tpl->tpl_vars['db_email_vars']->value[$_smarty_tpl->tpl_vars['i']->value]['iEmailVariableId'];?>
">
                                                                            <input type="text" class="frm-size-large valid-variable" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_VARIABLES');?>
" id="system_email_variable_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" name="system_email_variable[]" value="<?php echo $_smarty_tpl->tpl_vars['db_email_vars']->value[$_smarty_tpl->tpl_vars['i']->value]['vVarName'];?>
">
                                                                        </div>
                                                                        <div>
                                                                            <label id="system_email_variable_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
Err" class="error"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td width='40%'>
                                                                        <div class="">
                                                                            <input type="text" class="frm-size-large" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_DESCRIPTION');?>
" id="system_email_description_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" name="system_email_description[]" value="<?php echo $_smarty_tpl->tpl_vars['db_email_vars']->value[$_smarty_tpl->tpl_vars['i']->value]['vVarDesc'];?>
">
                                                                        </div>
                                                                        <div>
                                                                            <label id="system_email_description_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
Err" class="error"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td align="center" width='17%'>
                                                                        <div class="controls center">
                                                                            <a href="javascript://" title="Sort Fields" class="field-handle">
                                                                                <span class="icon13 icomoon-icon-move"></span>
                                                                            </a>
                                                                            &nbsp;
                                                                            <a class="tipR" href="javascript://" onclick="Project.modules.systememails.deleteSystemEmailVariableRow('<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
')" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_DELETE');?>
">
                                                                                <span class="icon12 icomoon-icon-remove"></span>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        <?php
}
}
if ($__section_k_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_k'] = $__section_k_3_saved;
}
?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row row-fluid double-row-view" id="cc_sh_mse_email_message" style="margin-top:0; padding-top: 0;">
                                    <div class="clear prime-lang-block" id="lnpr_mse_email_message_<?php echo $_smarty_tpl->tpl_vars['prlang']->value;?>
">
                                        <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['form_config']->value['mse_email_message']['label_lang'];?>
</label>
                                        <div class="form-right-div">
                                            <textarea name="mse_email_message" id="mse_email_message" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_EMAIL_MESSAGE');?>
"  class='frm-size-medium elastic' aria-lang-parent='mse_email_message'  aria-multi-lingual='parent'  aria-lang-code='<?php echo $_smarty_tpl->tpl_vars['prlang']->value;?>
'  ><?php echo $_smarty_tpl->tpl_vars['data']->value['mse_email_message'];?>
</textarea>
                                        </div>
                                        <div class="error-msg-form "><label class='error' id='mse_email_messageErr'></label></div>
                                    </div>
                                    <?php if (is_array($_smarty_tpl->tpl_vars['exlang_arr']->value) && count($_smarty_tpl->tpl_vars['exlang_arr']->value) > 0) {?>
                                        <?php
$__section_ml_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_ml']) ? $_smarty_tpl->tpl_vars['__section_ml'] : false;
$__section_ml_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['exlang_arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ml_4_total = $__section_ml_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ml'] = new Smarty_Variable(array());
if ($__section_ml_4_total != 0) {
for ($__section_ml_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index'] = 0; $__section_ml_4_iteration <= $__section_ml_4_total; $__section_ml_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index']++){
?>
                                            <?php $_smarty_tpl->tpl_vars["exlang"] = new Smarty_Variable($_smarty_tpl->tpl_vars['exlang_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ml']->value['index'] : null)], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "exlang", 0);?>
                                            <div class="clear other-lang-block" id="lnsh_mse_email_message_<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
" style="<?php if ($_smarty_tpl->tpl_vars['exlang']->value != $_smarty_tpl->tpl_vars['dflang']->value) {?>display:none;<?php }?>">
                                                <label class="form-label span3" style="margin-left:0; margin-top: 5px;">
                                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['mse_email_message']['label_lang'];?>
 [<?php echo $_smarty_tpl->tpl_vars['lang_info']->value[$_smarty_tpl->tpl_vars['exlang']->value]['vLangTitle'];?>
]
                                                </label> 
                                                <div class="form-right-div">
                                                    <textarea name="langmse_email_message[<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
]" id="lang_mse_email_message_<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('SYSTEMEMAILS_EMAIL_MESSAGE');?>
"  class='frm-size-medium frm-editor-small'  aria-lang-parent='mse_email_message'  aria-multi-lingual='child'  aria-lang-code='<?php echo $_smarty_tpl->tpl_vars['exlang']->value;?>
'  ><?php echo $_smarty_tpl->tpl_vars['lang_data']->value[$_smarty_tpl->tpl_vars['exlang']->value]['tEmailMessage'];?>
</textarea>
                                                </div>
                                            </div>
                                        <?php
}
}
if ($__section_ml_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_ml'] = $__section_ml_4_saved;
}
?>
                                        <div class="lang-flag-css">
                                            <?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminLangFlagHTML("mse_email_message",$_smarty_tpl->tpl_vars['exlang_arr']->value,$_smarty_tpl->tpl_vars['lang_info']->value);?>

                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="frm-bot-btn <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_action_bar'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_action_btn'];?>
">
                        <?php if ($_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_ctrls_view'] == 'No') {?>
                            <?php $_smarty_tpl->tpl_vars['rm_ctrl_directions'] = new Smarty_Variable(true, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'rm_ctrl_directions', 0);?>
                        <?php }?>
                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin_form_direction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin_form_control.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                </div>
                <div class="clear"></div>
            </form>
        </div>
    </div>
</div>
<style>
    body{overflow:visible!important}
</style>
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
    
        el_form_settings["prime_lang_code"] = '<?php echo $_smarty_tpl->tpl_vars['prlang']->value;?>
';
        el_form_settings["default_lang_code"] = '<?php echo $_smarty_tpl->tpl_vars['dflang']->value;?>
';
        el_form_settings["other_lang_JSON"] = '<?php echo json_encode($_smarty_tpl->tpl_vars['exlang_arr']->value);?>
';
        intializeLanguageAutoEntry(el_form_settings["prime_lang_code"], el_form_settings["other_lang_JSON"], el_form_settings["default_lang_code"]);
    callSwitchToSelf();
    var inc_no = dis_no = '<?php echo $_smarty_tpl->tpl_vars['var_count']->value+1;?>
';
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_css('forms/tinymce.mention.css');?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js('admin/forms/tinymce/tinymce.min.js','admin/admin/js_systememails.js');?>

<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

<?php }?> 
<?php }
}
