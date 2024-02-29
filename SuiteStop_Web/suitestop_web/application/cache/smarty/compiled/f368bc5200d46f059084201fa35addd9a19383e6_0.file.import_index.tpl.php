<?php
/* Smarty version 3.1.28, created on 2021-08-23 05:05:07
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/import_index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_61232c836ad815_81434764',
  'file_dependency' => 
  array (
    'f368bc5200d46f059084201fa35addd9a19383e6' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/import_index.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:import_index_strip.tpl' => 1,
  ),
),false)) {
function content_61232c836ad815_81434764 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_block_javascript')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/block.javascript.php';
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {
echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>  
<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js('admin/admin/js_import_data.js','admin/jsoneditor/jquery.jsoneditor.js');?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_css("import/import.css","jsoneditor/jsoneditor.css");?>

<div class='custom-import-container'>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:import_index_strip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="ajax_content_div" class="ajax-content-div top-frm-spacing">
        <div id="ajax_qLoverlay"></div>
        <div id="ajax_qLbar"></div>
        <div id="scrollable_content" class="scrollable-content top-block-spacing">
            <div id="importcsv" class="frm-elem-block frm-stand-view">
                <div style="display:none;" id="upload_sheets_html"></div>
                <form name="frmimportcsvadd" id="frmimportcsvadd" action="" method="post"  enctype="multipart/form-data">
                    <div class="main-content-block" id="main_content_block">
                        <div style="width:98%" class="frm-block-layout pad-calc-container">
                            <div class="box gradient upload-csv-data <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_content_row'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_border_view'];?>
">
                                <div class="title <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_titles_bar'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_IMPORT_DATA');?>
</h4></div>
                                <div class="content <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_label_align'];?>
">
                                    <div class="form-row row-fluid">
                                        <label class="form-label span3">
                                            Select Module <em>*</em> 
                                        </label> 
                                        <div class="form-right-div">
                                            <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("upload_module","upload_module","  title='Please Select Module'  aria-chosen-valid='Yes'  class='chosen-select frm-size-medium'  data-placeholder='Please Select Module'  ","|||",'','',"upload_module");?>

                                        </div>
                                        <div class="error-msg-form "><label class='error' id='upload_moduleErr'></label></div>
                                    </div>
                                    <div class="form-row row-fluid">
                                        <label class="form-label span3">
                                            Select Data Source <em>*</em> 
                                        </label> 
                                        <div class="form-right-div frm-elements-div">
                                            <?php
$_from = $_smarty_tpl->tpl_vars['upload_location_arr']->value;
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
                                            <input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" name="upload_location" id="upload_location_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value == 'local') {?> checked=true <?php }?>  class='regular-radio' />
                                                   <label for="upload_location_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="frm-horizon-row frm-column-layout">&nbsp;</label>
                                            <label for="upload_location_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="frm-horizon-row frm-column-layout"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label>&nbsp;&nbsp;
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
                                        </div>
                                        <div class="error-msg-form "><label class='error' id='upload_locationErr'></label></div>
                                    </div>
                                    <div class="form-row row-fluid local-drive-block">
                                        <label class="form-label span3">
                                            Upload Data File<em>*</em> 
                                        </label> 
                                        <div class="form-right-div">
                                            <div>
                                                <div class="btn-uploadify frm-size-medium">
                                                    <input type="hidden" value="0" name="upload_index" id="upload_index" />
                                                    <input type='hidden' value='' name='upload_csv' id='upload_csv' />
                                                    <input type='hidden' value='' name='temp_upload_csv' id='temp_upload_csv' />
                                                    <div id="upload_drop_zone_upload_csv" class="upload-drop-zone"></div>
                                                    <div class="uploader upload-src-zone">
                                                        <input type='file' name='uploadify_upload_csv' id='uploadify_upload_csv' title="Upload Data File" />
                                                        <span class="filename" id="preview_upload_csv">Upload Data File</span>
                                                        <span class="action">Choose File</span>
                                                    </div>
                                                </div>
                                                <span class="input-comment">
                                                    <a href="javascript://"  class="tipR" title="Valid Extensions : <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['import_settings']->value['file_extensions'],'|',', ');?>
.<br>Valid Size : Less Than (<) <?php echo $_smarty_tpl->tpl_vars['import_settings']->value['file_maxsize_txt'];?>
.<br>Max. Columns : <?php echo $_smarty_tpl->tpl_vars['import_settings']->value['file_maxcols'];?>
.<br>Max. Rows : <?php echo $_smarty_tpl->tpl_vars['import_settings']->value['file_maxrows'];?>
">
                                                        <span class="icomoon-icon-help"></span>
                                                    </a>
                                                </span>
                                                <div class="clear upload-progress" id="progress_upload_csv">
                                                    <div class="upload-progress-bar progress progress-striped active">
                                                        <div class="bar" id="practive_upload_csv"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="error-msg-form" ><label class="error" id="upload_csvErr"></label></div>
                                    </div>
                                    <div class="form-row row-fluid hide-import-options google-drive-block">
                                        <label class="form-label span3">
                                            Select Data Sheet<em>*</em> 
                                        </label> 
                                        <div class="form-right-div input-append text-append-prepend">
                                            <input type="text" placeholder="" value="" name="upload_sheet" id="upload_sheet" readonly=true title="Select Data Sheet"  class='frm-size-medium ctrl-append-prepend google-sheet-container ignore-hidden' />
                                            <span class='add-on text-addon btn pick-google-sheet' id="pick_google_sheet">Browse!</span>
                                        </div>
                                        <div class="error-msg-form "><label class='error' id='upload_sheetErr'></label></div>
                                    </div>
                                    <div class="form-row row-fluid hide-import-options web-url-block">
                                        <label class="form-label span3">
                                            Specify Data URL <em>*</em> 
                                        </label> 
                                        <div class="form-right-div input-append text-append-prepend">
                                            <input type="hidden" value="" name="web_data_url_keypath" id="web_data_url_keypath" />
                                            <input type="text" placeholder="" value="" name="web_data_url" id="web_data_url" title="Specify Data URL"  class='frm-size-medium ctrl-append-prepend  ignore-hidden' />
                                            <span class="add-on text-addon btn" id="web_data_url_browse">Browse!</span>
                                        </div>
                                        <div class="error-msg-form "><label class='error' id='web_data_urlErr'></label></div>
                                    </div>
                                    <div class="form-row row-fluid hide-import-options web-url-block">
                                        <label class="form-label span3">
                                            Response Format <em>*</em> 
                                        </label> 
                                        <div class="form-right-div frm-elements-div">
                                            <?php
$_from = $_smarty_tpl->tpl_vars['respose_format_arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_1_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_i_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_i_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_i_1_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_i_1_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                                            <input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" name="response_format" id="response_format_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value == 'csv') {?> checked=true <?php }?>  class='regular-radio' />
                                                   <label for="response_format_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="frm-horizon-row frm-column-layout">&nbsp;</label>
                                            <label for="response_format_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="frm-horizon-row frm-column-layout"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label>&nbsp;&nbsp;
                                            <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_i_1_saved_local_item;
}
}
if ($__foreach_i_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_i_1_saved_item;
}
if ($__foreach_i_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_i_1_saved_key;
}
?>
                                        </div>
                                        <div class="error-msg-form "><label class='error' id='response_formatErr'></label></div>
                                    </div>
                                    <div id="web_url_response_block" class="web-url-response-block">
                                        <div class="title" style="height:40px; line-height:40px;">
                                            <h4>&nbsp;
                                                <span>Web URL</span>
                                            </h4>
                                        </div>
                                        <div class="json-editor" id="web_url_pick_item"></div>
                                        <div class="pick-json-xml-ele">
                                            <input type="button" value="Select" class="btn btn-info" id="btn_pick_json_xml1">
                                        </div>
                                    </div>
                                    <div id="media_files_upload" class="form-row row-fluid" style="display:none;">
                                        <label class="form-label span3">
                                            Upload Media Files Zip
                                        </label> 
                                        <div class="form-right-div">
                                            <div>
                                                <div class="btn-uploadify frm-size-medium">
                                                    <input type='hidden' value='' name='upload_media' id='upload_media' />
                                                    <input type='hidden' value='' name='temp_upload_media' id='temp_upload_media' />
                                                    <div id="upload_drop_zone_upload_media" class="upload-drop-zone"></div>
                                                    <div class="uploader upload-src-zone">
                                                        <input type='file' name='uploadify_upload_media' id='uploadify_upload_media' title="Upload Media File" />
                                                        <span class="filename" id="preview_upload_media">Upload Media File</span>
                                                        <span class="action">Choose File</span>
                                                    </div>
                                                </div>
                                                <span class="input-comment">
                                                    <a href="javascript://"  class="tipR" title="Valid Extensions : <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['import_settings']->value['media_extensions'],'|',', ');?>
.<br>Valid Size : Less Than (<) <?php echo $_smarty_tpl->tpl_vars['import_settings']->value['media_maxsize_txt'];?>
.">
                                                        <span class="icomoon-icon-help"></span>
                                                    </a>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['import_media_sample'];?>
?upload_module=sample" hijacked="yes" id="sample_zip_file" class="tipR" title="Sample Media Zip">
                                                        <span class="icon16 icomoon-icon-download"></span>
                                                    </a>
                                                </span>

                                                <div class="clear upload-progress" id="progress_upload_media">
                                                    <div class="upload-progress-bar progress progress-striped active">
                                                        <div class="bar" id="practive_upload_media"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="error-msg-form" ><label class="error" id="upload_mediaErr"></label></div>
                                    </div>
                                    <div class="form-row row-fluid csv-more-settings">
                                        <label class="form-label span3">
                                            <span class="icon14 cut-icon-plus-2 action-more-settings" id="action_settings_span"></span><a href="javascript://" class="action-more-settings" id="action_settings_anchor" title="More Settings">More Settings</a>
                                        </label> 
                                        <div class="form-right-div frm-elements-div">
                                            <a style="display:none;" href="javascript://" class="upload-sheets-event" id="upload_sheets_event" title="Choose Sheet">Choose Sheet</a>
                                        </div>
                                    </div>
                                    <div class="form-row row-fluid toggle-more-settings" id="first_row_setting">
                                        <label class="form-label span3">
                                            Consider First Row Contains Column Names
                                        </label> 
                                        <div class="form-right-div">
                                            <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("import_first_row","import_first_row","  title='Consider First Row Contains Column Names'  class='frm-size-medium' ",'','','',"import_first_row");?>

                                        </div>
                                    </div>
                                    <div class="form-row row-fluid toggle-more-settings hide-settings"  id="columns_separate_setting">
                                        <label class="form-label span3">
                                            Columns Separated By
                                        </label> 
                                        <div class="form-right-div">
                                            <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("import_columns_separator","import_columns_separator","  title='Columns Separated By'  class='frm-size-medium' ",'','','',"import_columns_separator");?>

                                        </div>
                                    </div>
                                    <div class="form-row row-fluid toggle-more-settings hide-settings" id="text_delimiter_setting">
                                        <label class="form-label span3">
                                            Text Delimiter
                                        </label> 
                                        <div class="form-right-div">
                                            <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("import_text_delimiter","import_text_delimiter","  title='Text Delimiter'  class='frm-size-medium' ",'','','',"import_text_delimiter");?>

                                        </div>
                                    </div>
                                    <div class="form-row row-fluid toggle-more-settings">
                                        <label class="form-label span3">
                                            Decimal Separator
                                        </label> 
                                        <div class="form-right-div">
                                            <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("import_decimal_separator","import_decimal_separator","  title='Decimal Separator'  class='frm-size-medium' ",'','','',"import_decimal_separator");?>

                                        </div>
                                    </div>
                                    <div class="form-row row-fluid toggle-more-settings">
                                        <label class="form-label span3">
                                            Thousand Separator
                                        </label> 
                                        <div class="form-right-div">
                                            <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("import_thousand_separator","import_thousand_separator","  title='Thousand Separator'  class='frm-size-medium' ",'','','',"import_thousand_separator");?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="frm-bot-btn <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_action_bar'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_action_btn'];?>
">
                            <div class="action-btn-align">
                                <input type="button" value="Show History" class='btn import-history' onclick="loadImportHistoryPage()">
                                <?php if ($_smarty_tpl->tpl_vars['history_count']->value > 0) {?>
                                <span class="notification history-count"><?php echo $_smarty_tpl->tpl_vars['history_count']->value;?>
</span>
                                <?php }?>
                                <input value="Next" name="ctrladd" type="submit" class='btn btn-info' onclick="return Project.modules.importcsv.getValidateAddCSV()"/>&nbsp;&nbsp;
                                <input type="button" value="Discard" class='btn' onclick="loadAdminSiteMapPage()">
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('javascript', array()); $_block_repeat=true; echo smarty_block_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

var $import_valid_ext = '<?php echo $_smarty_tpl->tpl_vars['import_settings']->value["file_extensions"];?>
';
var $import_valid_size = '<?php echo $_smarty_tpl->tpl_vars['import_settings']->value["file_maxsize_org"];?>
';
var $import_media_ext = '<?php echo $_smarty_tpl->tpl_vars['import_settings']->value["media_extensions"];?>
';
var $import_media_size = '<?php echo $_smarty_tpl->tpl_vars['import_settings']->value["media_maxsize_org"];?>
';
var $import_upload_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_upload"];?>
';
var $import_media_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_media"];?>
';
var $import_read_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_read"];?>
';
var $import_process_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_process"];?>
';
var $import_info_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_info"];?>
?';
var $import_valid_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_valid"];?>
?';
var $import_histroy_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_history"];?>
?';
var $import_gdrive_manage_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_gdrive_manager"];?>
?';
var $import_gdrive_config_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_gdrive_config"];?>
';
var $import_gdrive_auth_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_gdrive_auth"];?>
';
var $import_gdrive_data_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_get_gdrive_data"];?>
';
var $import_gdrive_save_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_save_gdrive_data"];?>
';
var $import_web_data_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_get_weburl_data"];?>
';
var $import_dropbox_data_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_get_dropbox_data"];?>
';
var $import_dropbox_auth_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_dropbox_auth"];?>
';
var $import_dropbox_save_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_save_dropbox_data"];?>
';
var $import_media_event_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_media_event"];?>
';
var $import_media_sample_url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["import_media_sample"];?>
';
var $import_media_modules = $.parseJSON('<?php echo $_smarty_tpl->tpl_vars['media_modules']->value;?>
');
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {
echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {
echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

<?php }?> 
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('javascript', array()); $_block_repeat=true; echo smarty_block_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

Project.modules.importcsv.init();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
