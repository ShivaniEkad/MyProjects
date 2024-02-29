<?php
/* Smarty version 3.1.28, created on 2021-08-11 10:57:39
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/basic_appineers_master/views/users_management_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_6113ad239a0287_25802313',
  'file_dependency' => 
  array (
    '5318b3cad4462482ff5eaa57c63c23b6d07b3165' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/basic_appineers_master/views/users_management_add.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:users_management_add_strip.tpl' => 1,
    'file:users_management_add_buttons.tpl' => 1,
  ),
),false)) {
function content_6113ad239a0287_25802313 ($_smarty_tpl) {
if (!is_callable('smarty_block_javascript')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/block.javascript.php';
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {
echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>
<div class="module-form-container">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:users_management_add_strip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
" data-form-name="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
<div id="ajax_content_div" class="ajax-content-div top-frm-spacing" >
<input type="hidden" id="projmod" name="projmod" value="users_management" />
<!-- Page Loader -->
<div id="ajax_qLoverlay"></div>
<div id="ajax_qLbar"></div>
<!-- Module Tabs & Top Detail View -->
<div class="top-frm-tab-layout" id="top_frm_tab_layout">
</div>
<!-- Middle Content -->
<div id="scrollable_content" class="scrollable-content popup-content top-block-spacing ">
<div id="users_management" class="frm-module-block frm-elem-block frm-stand-view">
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
<input type="hidden" name="u_password" id="u_password" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_password']);?>
"  class='ignore-valid ' />
<input type="hidden" name="u_latitude" id="u_latitude" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_latitude']);?>
"  class='ignore-valid ' />
<input type="hidden" name="u_longitude" id="u_longitude" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_longitude']);?>
"  class='ignore-valid ' />
<input type="hidden" name="u_push_notify" id="u_push_notify" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['u_push_notify'];?>
"  class='ignore-valid ' />
<input type="hidden" name="u_one_time_transaction" id="u_one_time_transaction" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['u_one_time_transaction'];?>
"  class='ignore-valid ' />
<input type="hidden" name="u_access_token" id="u_access_token" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_access_token']);?>
"  class='ignore-valid ' />
<input type="hidden" name="u_reset_password_code" id="u_reset_password_code" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_reset_password_code']);?>
"  class='ignore-valid ' />
<input type="hidden" name="u_email_verification_code" id="u_email_verification_code" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_email_verification_code']);?>
"  class='ignore-valid ' />
<input type="hidden" name="u_email_verified" id="u_email_verified" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['u_email_verified'];?>
"  class='ignore-valid ' />
<input type="hidden" name="u_social_login_type" id="u_social_login_type" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['u_social_login_type'];?>
"  class='ignore-valid ' />
<input type="hidden" name="u_social_login_id" id="u_social_login_id" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_social_login_id']);?>
"  class='ignore-valid ' />
<input type="hidden" name="u_device_type" id="u_device_type" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['u_device_type'];?>
"  class='ignore-valid ' />
<input type="hidden" name="u_device_token" id="u_device_token" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_device_token']);?>
"  class='ignore-valid ' />
<input type="hidden" name="u_added_at" id="u_added_at" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['u_added_at']);?>
"  class='ignore-valid '  aria-date-format='<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date','dateFormat');?>
'  aria-format-type='date' />
<input type="hidden" name="u_updated_at" id="u_updated_at" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['u_updated_at']);?>
"  class='ignore-valid '  aria-date-format='<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date','dateFormat');?>
'  aria-format-type='date' />
<input type="hidden" name="u_device_model" id="u_device_model" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_device_model']);?>
"  class='ignore-valid ' />
<input type="hidden" name="u_device_os" id="u_device_os" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_device_os']);?>
"  class='ignore-valid ' />
<!-- Form Dispaly Fields Unit -->
<div class="main-content-block " id="main_content_block">
<div style="width:98%" class="frm-block-layout pad-calc-container">
<div class="box gradient <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_content_row'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_border_view'];?>
">
<div class="title <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_titles_bar'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_USERS_MANAGEMENT');?>
</h4></div>
<div class="content <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_stand_label_align'];?>
">
<div class="form-row row-fluid " id="cc_sh_u_profile_image">
<label class="form-label span3 ">
<?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_profile_image']['label_lang'];?>

</label> 
<div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
<?php if ($_smarty_tpl->tpl_vars['mode']->value == "Add") {?>
<div  class='btn-uploadify frm-size-medium' >
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['u_profile_image'];?>
" name="old_u_profile_image" id="old_u_profile_image" />
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['u_profile_image'];?>
" name="u_profile_image" id="u_profile_image"  aria-extensions="gif,png,jpg,jpeg,jpe,bmp,ico" aria-valid-size="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_LESS_THAN');?>
 (<) 100 MB"/>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['u_profile_image'];?>
" name="temp_u_profile_image" id="temp_u_profile_image"  />
<div id="upload_drop_zone_u_profile_image" class="upload-drop-zone"></div>
<div class="uploader upload-src-zone">
<input type="file" name="uploadify_u_profile_image" id="uploadify_u_profile_image" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_PROFILE_IMAGE');?>
" />
<span class="filename" id="preview_u_profile_image">
    <?php if ($_smarty_tpl->tpl_vars['data']->value['u_profile_image'] != '') {?>
        <?php echo $_smarty_tpl->tpl_vars['data']->value['u_profile_image'];?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_DROP_FILES_HERE_OR_CLICK_TO_UPLOAD');?>

    <?php }?>
</span>
<span class="action">Choose File</span>
</div>
</div>
<?php } else { ?>    
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['u_profile_image'];?>
" name="u_profile_image" id="u_profile_image"  />
<?php }?>
<div class='upload-image-btn'>
<?php echo $_smarty_tpl->tpl_vars['img_html']->value['u_profile_image'];?>

</div>
<span class="input-comment">
<a href="javascript://" style="text-decoration: none;" class="tipR" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_VALID_EXTENSIONS');?>
 : gif, png, jpg, jpeg, jpe, bmp, ico.<br><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_VALID_SIZE');?>
 : <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_LESS_THAN');?>
 (<) 100 MB."><span class="icomoon-icon-help"></span></a>
</span>
<div class='clear upload-progress' id='progress_u_profile_image'>
<div class='upload-progress-bar progress progress-striped active'>
<div class='bar' id='practive_u_profile_image'></div>
</div>
<div class='upload-cancel-div'><a class='upload-cancel' href='javascript://'>Cancel</a></div>
<div class='clear'></div>
</div>
<div class='clear'></div>
</div>
<div class="error-msg-form "><label class='error' id='u_profile_imageErr'></label></div>
</div>
<div class="form-row row-fluid " id="cc_sh_u_first_name">
<label class="form-label span3 ">
<?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_first_name']['label_lang'];?>

</label> 
<div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
<?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
<input type="hidden" class="ignore-valid" name="u_first_name" id="u_first_name" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_first_name']);?>
" />
<span class="frm-data-label">
<strong>
<?php if ($_smarty_tpl->tpl_vars['data']->value['u_first_name'] != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['data']->value['u_first_name'];?>

<?php } else {
}?>
</strong></span>
<?php } else { ?>
<input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_first_name']);?>
" name="u_first_name" id="u_first_name" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_FIRST_NAME');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
<?php }?>
</div>
<div class="error-msg-form "><label class='error' id='u_first_nameErr'></label></div>
</div>
<div class="form-row row-fluid " id="cc_sh_u_last_name">
<label class="form-label span3 ">
<?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_last_name']['label_lang'];?>

</label> 
<div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
<?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
<input type="hidden" class="ignore-valid" name="u_last_name" id="u_last_name" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_last_name']);?>
" />
<span class="frm-data-label">
<strong>
    <?php if ($_smarty_tpl->tpl_vars['data']->value['u_last_name'] != '') {?>
        <?php echo $_smarty_tpl->tpl_vars['data']->value['u_last_name'];?>

    <?php } else { ?>
    <?php }?>
</strong></span>
<?php } else { ?>
<input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_last_name']);?>
" name="u_last_name" id="u_last_name" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_LAST_NAME');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
<?php }?>
</div>
<div class="error-msg-form "><label class='error' id='u_last_nameErr'></label></div>
</div>
<div class="form-row row-fluid " id="cc_sh_u_user_name">
<label class="form-label span3 ">
<?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_user_name']['label_lang'];?>

</label> 
<div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
<?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
<input type="hidden" class="ignore-valid" name="u_user_name" id="u_user_name" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_user_name']);?>
" />
<span class="frm-data-label">
    <strong>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['u_user_name'] != '') {?>
            <?php echo $_smarty_tpl->tpl_vars['data']->value['u_user_name'];?>

        <?php } else { ?>
        <?php }?>
    </strong></span>
<?php } else { ?>
    <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_user_name']);?>
" name="u_user_name" id="u_user_name" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_USERNAME');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
<?php }?>
</div>
<div class="error-msg-form "><label class='error' id='u_user_nameErr'></label></div>
</div>
<div class="form-row row-fluid " id="cc_sh_u_email">
<label class="form-label span3 ">
<?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_email']['label_lang'];?>

</label> 
<div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
<?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
    <input type="hidden" class="ignore-valid" name="u_email" id="u_email" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_email']);?>
" />
    <span class="frm-data-label">
        <strong>
            <?php if ($_smarty_tpl->tpl_vars['data']->value['u_email'] != '') {?>
                <?php echo $_smarty_tpl->tpl_vars['data']->value['u_email'];?>

            <?php } else { ?>
            <?php }?>
        </strong></span>
    <?php } else { ?>
        <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_email']);?>
" name="u_email" id="u_email" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_EMAIL');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
    <?php }?>
</div>
<div class="error-msg-form "><label class='error' id='u_emailErr'></label></div>
</div>
<div class="form-row row-fluid " id="cc_sh_u_mobile_no">
<label class="form-label span3 ">
    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_mobile_no']['label_lang'];?>

</label> 
<div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
    <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
        <input type="hidden" class="ignore-valid" name="u_mobile_no" id="u_mobile_no" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_mobile_no']);?>
" />
        <span class="frm-data-label">
            <strong>
                <?php if ($_smarty_tpl->tpl_vars['data']->value['u_mobile_no'] != '') {?>
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['u_mobile_no'];?>

                <?php } else { ?>
                <?php }?>
            </strong></span>
        <?php } else { ?>
            <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_mobile_no']);?>
" name="u_mobile_no" id="u_mobile_no" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_MOBILE_NUMBER');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
        <?php }?>
    </div>
    <div class="error-msg-form "><label class='error' id='u_mobile_noErr'></label></div>
</div>
<div class="form-row row-fluid " id="cc_sh_u_dob">
    <label class="form-label span3 ">
        <?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_dob']['label_lang'];?>

    </label> 
    <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php } else { ?>input-append text-append-prepend<?php }?> ">
        <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
            <input type="hidden" name="u_dob" id="u_dob" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['u_dob']);?>
" class="ignore-valid view-label-only"  data-ctrl-type='date'  class='frm-datepicker ctrl-append-prepend frm-size-medium'  aria-date-format='<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date','dateFormat');?>
'  aria-format-type='date' />
            <?php $_smarty_tpl->tpl_vars["display_date"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['u_dob']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "display_date", 0);?>
            <span class="frm-data-label">
                <strong>
                    <?php if ($_smarty_tpl->tpl_vars['display_date']->value != '') {?>
                        <?php echo $_smarty_tpl->tpl_vars['display_date']->value;?>

                    <?php } else { ?>
                    <?php }?>
                </strong></span>
            <?php } else { ?>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['u_dob']);?>
" placeholder="" name="u_dob" id="u_dob" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_DOB');?>
"  data-ctrl-type='date'  class='frm-datepicker ctrl-append-prepend frm-size-medium'  aria-date-format='<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date','dateFormat');?>
'  aria-format-type='date'  />
                <span class='add-on text-addon date-append-class icomoon-icon-calendar'></span>
            <?php }?>
        </div>
        <div class="error-msg-form "><label class='error' id='u_dobErr'></label></div>
    </div>
    <div class="form-row row-fluid " id="cc_sh_u_address">
        <label class="form-label span3 ">
            <?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_address']['label_lang'];?>
 <em>*</em> 
        </label> 
        <div class="form-right-div  ">
            <span>
                <div>
                    <div class="frm-gmf-address-label">
                        <span id="gmf_addr_label_u_address"><?php echo $_smarty_tpl->tpl_vars['data']->value['u_address'];?>
</span>
                        <textarea style="display:none;" class="ignore-valid" name="u_address" id="u_address"><?php echo $_smarty_tpl->tpl_vars['data']->value['u_address'];?>
</textarea>
                    </div>
                    <span  class='frm-gmf-medium frm-gmf-height-tiny' >
                        <textarea class="frm-gmf-address elastic" name="gmf_autocomplete_u_address" id="gmf_autocomplete_u_address" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_ADDRESS');?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['u_address'];?>
</textarea>
                    </span>
                </div>
                <div class="frm-gmf-options">
                    <input type="radio" name="type_u_address" id="u_address-changetype-all" class="regular-radio" checked=true />
                    <label for="u_address-changetype-all">&nbsp;</label>
                    <label for="u_address-changetype-all">
                        <?php if ($_smarty_tpl->tpl_vars['this']->value->lang->line("GENERIC_ALL") != '') {?>
                            <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line("GENERIC_ALL");?>

                        <?php } else { ?>
                            All
                        <?php }?>
                    </label>&nbsp;&nbsp;
                    <input type="radio" name="type_u_address" id="u_address-changetype-establishment" class="regular-radio" />
                    <label for="u_address-changetype-establishment">&nbsp;</label>
                    <label for="u_address-changetype-establishment">
                        <?php if ($_smarty_tpl->tpl_vars['this']->value->lang->line("GENERIC_ESTABLISHMENTS") != '') {?>
                            <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line("GENERIC_ESTABLISHMENTS");?>

                        <?php } else { ?>
                            Establishments
                        <?php }?>
                    </label>&nbsp;&nbsp;
                    <input type="radio" name="type_u_address" id="u_address-changetype-geocode" class="regular-radio" />
                    <label for="u_address-changetype-geocode">&nbsp;</label>
                    <label for="u_address-changetype-geocode">
                        <?php if ($_smarty_tpl->tpl_vars['this']->value->lang->line("GENERIC_GEOCODES") != '') {?>
                            <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line("GENERIC_GEOCODES");?>

                        <?php } else { ?>
                            Geocodes
                        <?php }?>
                    </label>
                </div>
                <span class='canvas_map'><div id='map_canvas_u_address'  class='frm-gmf-medium frm-gmf-height-tiny' ></div></span>
            </span>
            <?php $_smarty_tpl->tpl_vars['temp_map_arr'] = new Smarty_Variable(array(array('name'=>'u_address','lat'=>'u_latitude','lng'=>'u_longitude','load'=>'No')), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'temp_map_arr', 0);?>
            <?php if (is_array($_smarty_tpl->tpl_vars['google_map_arr']->value)) {?>
                <?php $_smarty_tpl->tpl_vars['google_map_arr'] = new Smarty_Variable(array_merge($_smarty_tpl->tpl_vars['google_map_arr']->value,$_smarty_tpl->tpl_vars['temp_map_arr']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'google_map_arr', 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['google_map_arr'] = new Smarty_Variable($_smarty_tpl->tpl_vars['temp_map_arr']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'google_map_arr', 0);?>
            <?php }?>
        </div>
        <div class="error-msg-form "><label class='error' id='u_addressErr'></label></div>
    </div>
    <div class="form-row row-fluid " id="cc_sh_u_city">
        <label class="form-label span3 ">
            <?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_city']['label_lang'];?>

        </label> 
        <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
            <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                <input type="hidden" class="ignore-valid" name="u_city" id="u_city" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_city']);?>
" />
                <span class="frm-data-label">
                    <strong>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['u_city'] != '') {?>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['u_city'];?>

                        <?php } else { ?>
                        <?php }?>
                    </strong></span>
                <?php } else { ?>
                    <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_city']);?>
" name="u_city" id="u_city" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_CITY');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                <?php }?>
            </div>
            <div class="error-msg-form "><label class='error' id='u_cityErr'></label></div>
        </div>
        <div class="form-row row-fluid " id="cc_sh_u_state_name">
        <label class="form-label span3 ">
            <?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_state_name']['label_lang'];?>

        </label> 
        <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
            <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                <input type="hidden" class="ignore-valid" name="u_state_name" id="u_state_name" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_state_name']);?>
" />
                <span class="frm-data-label">
                    <strong>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['u_state_name'] != '') {?>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['u_state_name'];?>

                        <?php } else { ?>
                        <?php }?>
                    </strong></span>
                <?php } else { ?>
                    <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_city']);?>
" name="u_state_name" id="u_state_name" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_STATE');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                <?php }?>
            </div>
            <div class="error-msg-form "><label class='error' id='u_sateErr'></label></div>
        </div>
<!--         <div class="form-row row-fluid " id="cc_sh_u_state_name">
            <label class="form-label span3 ">
                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_state_name']['label_lang'];?>

            </label> 
            <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
                <?php $_smarty_tpl->tpl_vars["opt_selected"] = new Smarty_Variable($_smarty_tpl->tpl_vars['data']->value['u_state_name'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "opt_selected", 0);?>
                <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                    <input type="hidden" name="u_state_name" id="u_state_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['u_state_name'];?>
" class="ignore-valid"/>
                    <?php $_smarty_tpl->tpl_vars["combo_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['opt_arr']->value["u_state_name"], null);
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
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("u_state_name","u_state_name","  title='".((string)$_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_STATE'))."'  aria-chosen-valid='Yes'  class='chosen-select frm-size-medium'  data-placeholder='".((string)$_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','USERS_MANAGEMENT_STATE'))."'  ","|||",'',$_smarty_tpl->tpl_vars['opt_selected']->value,"u_state_name");?>

                    <?php }?>
                </div>
                <div class="error-msg-form "><label class='error' id='u_state_idErr'></label></div>
            </div> -->
            <div class="form-row row-fluid " id="cc_sh_u_zip_code">
                <label class="form-label span3 ">
                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_zip_code']['label_lang'];?>

                </label> 
                <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
                    <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                        <input type="hidden" class="ignore-valid" name="u_zip_code" id="u_zip_code" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_zip_code']);?>
" />
                        <span class="frm-data-label">
                            <strong>
                                <?php if ($_smarty_tpl->tpl_vars['data']->value['u_zip_code'] != '') {?>
                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['u_zip_code'];?>

                                <?php } else { ?>
                                <?php }?>
                            </strong></span>
                        <?php } else { ?>
                            <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_zip_code']);?>
" name="u_zip_code" id="u_zip_code" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_ZIP_CODE');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                        <?php }?>
                    </div>
                    <div class="error-msg-form "><label class='error' id='u_zip_codeErr'></label></div>
                </div>
                <div class="form-row row-fluid " id="cc_sh_u_terms_conditions_version">
                    <label class="form-label span3 ">
                        <?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_terms_conditions_version']['label_lang'];?>

                    </label> 
                    <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
                        <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                            <input type="hidden" class="ignore-valid" name="u_terms_conditions_version" id="u_terms_conditions_version" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_terms_conditions_version']);?>
" />
                            <span class="frm-data-label">
                                <strong>
                                    <?php if ($_smarty_tpl->tpl_vars['data']->value['u_terms_conditions_version'] != '') {?>
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['u_terms_conditions_version'];?>

                                    <?php } else { ?>
                                    <?php }?>
                                </strong></span>
                            <?php } else { ?>
                                <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_terms_conditions_version']);?>
" name="u_terms_conditions_version" id="u_terms_conditions_version" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_TERMS_CONDITIONS_VERSION');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                            <?php }?>
                        </div>
                        <div class="error-msg-form "><label class='error' id='u_terms_conditions_versionErr'></label></div>
                    </div>
                    <div class="form-row row-fluid " id="cc_sh_u_privacy_policy_version">
                        <label class="form-label span3 ">
                            <?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_privacy_policy_version']['label_lang'];?>

                        </label> 
                        <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php }?> ">
                            <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                                <input type="hidden" class="ignore-valid" name="u_privacy_policy_version" id="u_privacy_policy_version" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_privacy_policy_version']);?>
" />
                                <span class="frm-data-label">
                                    <strong>
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['u_privacy_policy_version'] != '') {?>
                                            <?php echo $_smarty_tpl->tpl_vars['data']->value['u_privacy_policy_version'];?>

                                        <?php } else { ?>
                                        <?php }?>
                                    </strong></span>
                                <?php } else { ?>
                                    <input type="text" placeholder="" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['data']->value['u_privacy_policy_version']);?>
" name="u_privacy_policy_version" id="u_privacy_policy_version" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_PRIVACY_POLICY_VERSION');?>
"  data-ctrl-type='textbox'  class='frm-size-medium'  />
                                <?php }?>
                            </div>
                            <div class="error-msg-form "><label class='error' id='u_privacy_policy_versionErr'></label></div>
                        </div>
                        <div class="form-row row-fluid " id="cc_sh_u_deleted_at">
                            <label class="form-label span3 ">
                                <?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_deleted_at']['label_lang'];?>

                            </label> 
                            <div class="form-right-div  <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>frm-elements-div<?php } else { ?>input-append text-append-prepend<?php }?> ">
                                <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                                    <input type="hidden" name="u_deleted_at" id="u_deleted_at" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['u_deleted_at']);?>
" class="ignore-valid view-label-only"  data-ctrl-type='date'  class='frm-datepicker ctrl-append-prepend frm-size-medium'  aria-date-format='<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date','dateFormat');?>
'  aria-format-type='date' />
                                    <?php $_smarty_tpl->tpl_vars["display_date"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['u_deleted_at']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "display_date", 0);?>
                                    <span class="frm-data-label">
                                        <strong>
                                            <?php if ($_smarty_tpl->tpl_vars['display_date']->value != '') {?>
                                                <?php echo $_smarty_tpl->tpl_vars['display_date']->value;?>

                                            <?php } else { ?>
                                            <?php }?>
                                        </strong></span>
                                    <?php } else { ?>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['data']->value['u_deleted_at']);?>
" placeholder="" name="u_deleted_at" id="u_deleted_at" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_DELETED_AT');?>
"  data-ctrl-type='date'  class='frm-datepicker ctrl-append-prepend frm-size-medium'  aria-date-format='<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date','dateFormat');?>
'  aria-format-type='date'  />
                                        <span class='add-on text-addon date-append-class icomoon-icon-calendar'></span>
                                    <?php }?>
                                </div>
                                <div class="error-msg-form "><label class='error' id='u_deleted_atErr'></label></div>
                            </div>
                            <div class="form-row row-fluid " id="cc_sh_u_status">
                                <label class="form-label span3 ">
                                    <?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_status']['label_lang'];?>
 <em>*</em> 
                                </label> 
                                <div class="form-right-div  ">
                                    <?php $_smarty_tpl->tpl_vars["opt_selected"] = new Smarty_Variable($_smarty_tpl->tpl_vars['data']->value['u_status'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "opt_selected", 0);?>
                                    <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("u_status","u_status","  title='".((string)$_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_STATUS'))."'  aria-chosen-valid='Yes'  class='chosen-select frm-size-medium'  data-placeholder='".((string)$_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','USERS_MANAGEMENT_STATUS'))."'  ","|||",'',$_smarty_tpl->tpl_vars['opt_selected']->value,"u_status");?>

                                </div>
                                <div class="error-msg-form "><label class='error' id='u_statusErr'></label></div>
                            </div>
                            <div class="form-row row-fluid " id="cc_sh_u_log_status_updated">
                                    <label class="form-label span3 ">
                                        <?php echo $_smarty_tpl->tpl_vars['form_config']->value['u_log_status_updated']['label_lang'];?>
 <em>*</em> 
                                    </label> 
                                    <div class="form-right-div  ">
                                        <?php $_smarty_tpl->tpl_vars["opt_selected"] = new Smarty_Variable($_smarty_tpl->tpl_vars['data']->value['u_log_status_updated'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "opt_selected", 0);?>
                                        <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("u_log_status_updated","u_log_status_updated","  title='".((string)$_smarty_tpl->tpl_vars['this']->value->lang->line('USERS_MANAGEMENT_LOG_STATUS'))."'  aria-chosen-valid='Yes'  class='chosen-select frm-size-medium'  data-placeholder='".((string)$_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','USERS_MANAGEMENT_LOG_STATUS'))."'  ","|||",'',$_smarty_tpl->tpl_vars['opt_selected']->value,"u_log_status_updated");?>

                                    </div>
                                    <div class="error-msg-form "><label class='error' id='u_log_status_updatedErr'></label></div>
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
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:users_management_add_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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

<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js('admin/users_management_add_js.js');?>


<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js("admin/custom/hideDraggableOption.js");?>

<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {
echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {
echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

<?php }?> 
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('javascript', array()); $_block_repeat=true; echo smarty_block_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

Project.modules.users_management.callEvents();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
