<?php
/* Smarty version 3.1.28, created on 2021-08-20 06:25:03
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/basic_appineers_master/views/feedback_management_index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_611f4abfaadbe8_32529846',
  'file_dependency' => 
  array (
    'd7816bf53ef3889d1f99dbb50b45f67e67d4600d' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/basic_appineers_master/views/feedback_management_index.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:feedback_management_index_strip.tpl' => 1,
  ),
),false)) {
function content_611f4abfaadbe8_32529846 ($_smarty_tpl) {
if (!is_callable('smarty_block_javascript')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/block.javascript.php';
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>
<div class="module-list-container">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:feedback_management_index_strip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
" data-list-name="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
        <div id="ajax_content_div" class="ajax-content-div top-frm-spacing box gradient">
            <!-- Page Loader -->
            <div id="ajax_qLoverlay"></div>
            <div id="ajax_qLbar"></div>
            <!-- Middle Content -->
            <div id="scrollable_content" class="scrollable-content top-list-spacing">
                <div class="grid-data-container pad-calc-container">
                    <div class="top-list-tab-layout" id="top_list_grid_layout">
                    </div>
                    <table class="grid-table-view " width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <!-- Module Listing Block -->
                            <td id="grid_data_col" class="<?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['grid_search_toolbar'];?>
">
                                <div id="pager2"></div>
                                <table id="list2"></table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <input type="hidden" name="selAllRows" value="" id="selAllRows" />
    </div>
</div>
<!-- Module Listing Javascript -->
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('javascript', array()); $_block_repeat=true; echo smarty_block_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    $.jgrid.no_legacy_api = true; $.jgrid.useJSON = true;
    var el_grid_settings = {}, js_col_model_json = {}, js_col_name_json = {}; 
                    
    el_grid_settings['module_name'] = '<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
';
    el_grid_settings['extra_hstr'] = '<?php echo $_smarty_tpl->tpl_vars['extra_hstr']->value;?>
';
    el_grid_settings['extra_qstr'] = '<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
';
    el_grid_settings['enc_location'] = '<?php echo $_smarty_tpl->tpl_vars['enc_loc_module']->value;?>
';
    el_grid_settings['par_module '] = '<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL($_smarty_tpl->tpl_vars['parMod']->value);?>
';
    el_grid_settings['par_data'] = '<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL($_smarty_tpl->tpl_vars['parID']->value);?>
';
    el_grid_settings['par_field'] = '<?php echo $_smarty_tpl->tpl_vars['parField']->value;?>
';
    el_grid_settings['par_type'] = 'parent';

    el_grid_settings['index_page_url'] = '<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["index"];?>
';
    el_grid_settings['add_page_url'] = '<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["add"];?>
'; 
    el_grid_settings['edit_page_url'] =  admin_url+'<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["inline_edit_action"];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
';
    el_grid_settings['listing_url'] = admin_url+'<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["listing"];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
';
    el_grid_settings['export_url'] =  admin_url+'<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["export"];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
';
    el_grid_settings['print_url'] =  admin_url+'<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["print_listing"];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
';
        
    el_grid_settings['search_refresh_url'] = admin_url+'<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_left_search_content"];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
';
    el_grid_settings['search_autocomp_url'] = admin_url+'<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_search_auto_complete"];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
';
    el_grid_settings['ajax_data_url'] = admin_url+'<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_chosen_auto_complete"];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
';
    el_grid_settings['auto_complete_url'] = admin_url+'<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_token_auto_complete"];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
';
    el_grid_settings['subgrid_listing_url'] =  admin_url+'<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_subgrid_block"];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
';
    el_grid_settings['jparent_switchto_url'] = admin_url+'<?php echo $_smarty_tpl->tpl_vars['parent_switch_cit']->value["url"];?>
?<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
';
    
    el_grid_settings['admin_rec_arr'] = $.parseJSON('<?php echo json_encode($_smarty_tpl->tpl_vars['hide_admin_rec']->value);?>
');;
    el_grid_settings['status_arr'] = $.parseJSON('<?php echo json_encode($_smarty_tpl->tpl_vars['status_array']->value);?>
');
    el_grid_settings['status_lang_arr'] = $.parseJSON('<?php echo json_encode($_smarty_tpl->tpl_vars['status_label']->value);?>
');
                
    el_grid_settings['hide_add_btn'] = '';
    el_grid_settings['hide_del_btn'] = '1';
    el_grid_settings['hide_status_btn'] = '1';
    el_grid_settings['hide_export_btn'] = '';
    el_grid_settings['hide_columns_btn'] = 'Yes';
    
    el_grid_settings['show_saved_search'] = 'No';
    el_grid_settings['hide_advance_search'] = 'Yes';
    el_grid_settings['hide_search_tool'] = 'No';
    el_grid_settings['hide_multi_select'] = '<?php echo $_smarty_tpl->tpl_vars['capabilities']->value['hide_multi_select'];?>
';
    el_grid_settings['hide_paging_btn'] = 'No';
    el_grid_settings['hide_refresh_btn'] = 'Yes';
    
    el_grid_settings['popup_add_form'] = 'No';
    el_grid_settings['popup_edit_form'] = 'No';
    el_grid_settings['popup_add_size'] = ['75%', '75%'];
    el_grid_settings['popup_edit_size'] = ['75%', '75%'];
    
    el_grid_settings['permit_add_btn'] = '<?php echo $_smarty_tpl->tpl_vars['add_access']->value;?>
';
    el_grid_settings['permit_del_btn'] = '<?php echo $_smarty_tpl->tpl_vars['del_access']->value;?>
';
    el_grid_settings['permit_edit_btn'] = '<?php echo $_smarty_tpl->tpl_vars['edit_access']->value;?>
';
    el_grid_settings['permit_view_btn'] = '<?php echo $_smarty_tpl->tpl_vars['view_access']->value;?>
';
    el_grid_settings['permit_expo_btn'] = '<?php echo $_smarty_tpl->tpl_vars['expo_access']->value;?>
';
    el_grid_settings['permit_print_btn'] = '<?php echo $_smarty_tpl->tpl_vars['print_access']->value;?>
';
        
    el_grid_settings['group_search'] = '';
    el_grid_settings['default_sort'] = 'uq_added_at';
    el_grid_settings['sort_order'] = 'desc';
    el_grid_settings['footer_row'] = 'No';
    el_grid_settings['grouping'] = 'No';
    el_grid_settings['group_attr'] = {};
    
    el_grid_settings['inline_add'] = 'No';
    el_grid_settings['rec_position'] = 'Top';
    el_grid_settings['auto_width'] = 'Yes';
    el_grid_settings['auto_refresh'] = 'No';
    el_grid_settings['lazy_loading'] = 'No';
    el_grid_settings['print_rec'] = 'No';
    el_grid_settings['print_list'] = 'No';
    
    el_grid_settings['subgrid'] = '<?php echo $_smarty_tpl->tpl_vars['capabilities']->value['subgrid'];?>
';
    el_grid_settings['colgrid'] = 'No';
    el_grid_settings['listview'] = 'list';
    el_grid_settings['rating_allow'] = 'No';
    el_grid_settings['global_filter'] = 'No';
    
    el_grid_settings['search_slug'] = '<?php echo $_smarty_tpl->tpl_vars['search_slug']->value;?>
';
    el_grid_settings['search_list'] = $.parseJSON('<?php echo json_encode($_smarty_tpl->tpl_vars['search_preferences']->value);?>
');
    el_grid_settings['filters_arr'] = $.parseJSON('<?php echo json_encode($_smarty_tpl->tpl_vars['default_filters']->value);?>
');
    el_grid_settings['top_filter'] = [];
    el_grid_settings['buttons_arr'] = [];
    el_grid_settings['callbacks'] = [];
    el_grid_settings['message_arr'] = {
        "delete_alert" : "<?php echo $_smarty_tpl->tpl_vars['this']->value->general->processMessageLabel('ACTION_PLEASE_SELECT_ANY_RECORD');?>
",
        "delete_popup" : "<?php echo $_smarty_tpl->tpl_vars['this']->value->general->processMessageLabel('ACTION_ARE_YOU_SURE_WANT_TO_DELETE_THIS_RECORD_C63');?>
",
        "status_alert" : "<?php echo $_smarty_tpl->tpl_vars['this']->value->general->processMessageLabel('ACTION_PLEASE_SELECT_ANY_RECORD_TO__C35STATUS_C35');?>
",
        "status_popup" : "<?php echo $_smarty_tpl->tpl_vars['this']->value->general->processMessageLabel('ACTION_ARE_YOU_SURE_WANT_TO__C35STATUS_C35_THIS_RECORDS_C63');?>
",
    };
    
    js_col_name_json = [{
        "name": "u_first_name",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['u_first_name']['label_lang'];?>
"
    },
    {
        "name": "u_user_name",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['u_user_name']['label_lang'];?>
"
    },
    {
        "name": "uq_feedback",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_feedback']['label_lang'];?>
"
    },
    {
        "name": "uq_note",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_note']['label_lang'];?>
"
    },
    {
        "name": "uq_added_at",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_added_at']['label_lang'];?>
"
    },
    {
        "name": "uq_status",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_status']['label_lang'];?>
"
    },
    {
        "name": "uq_user_id",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_user_id']['label_lang'];?>
"
    },
    {
        "name": "sys_custom_field_1",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['sys_custom_field_1']['label_lang'];?>
"
    }];
    
    js_col_model_json = [{
        "name": "u_first_name",
        "index": "u_first_name",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['u_first_name']['label_lang'];?>
",
        "labelClass": "header-align-left",
        "resizable": true,
        "width": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['u_first_name']['width'];?>
",
        "search": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_first_name']['search'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "export": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_first_name']['export'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "sortable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_first_name']['sortable'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "hidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_first_name']['hidden'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "hideme": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_first_name']['hideme'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "addable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_first_name']['addable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "editable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_first_name']['editable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "align": "left",
        "edittype": "select",
        "editrules": {
            "infoArr": []
        },
        "searchoptions": {
            "attr": {
                "aria-grid-id": el_tpl_settings.main_grid_id,
                "aria-module-name": "feedback_management",
                "aria-unique-name": "uq_user_id",
                "autocomplete": "off",
                "data-placeholder": " ",
                "class": "search-chosen-select",
                "multiple": "multiple"
            },
            "sopt": intSearchOpts,
            "searchhidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_first_name']['search'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
            "dataUrl": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value["u_first_name"]["json"] == "Yes") {?>false<?php } else { ?>'<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_list_options"];?>
?alias_name=u_first_name&mode=<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value["Search"];?>
&rformat=html<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
'<?php }?>,
            "value": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value["u_first_name"]["json"] == "Yes") {?>$.parseJSON('<?php echo addslashes($_smarty_tpl->tpl_vars['count_arr']->value["u_first_name"]["data"]);?>
')<?php } else { ?>null<?php }?>,
            "dataInit": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value['u_first_name']['ajax'] == 'Yes') {?>initSearchGridAjaxChosenEvent<?php } else { ?>initGridChosenEvent<?php }?>,
            "ajaxCall": '<?php if ($_smarty_tpl->tpl_vars['count_arr']->value["u_first_name"]["ajax"] == "Yes") {?>ajax-call<?php }?>',
            "multiple": true
        },
        "editoptions": {
            "aria-grid-id": el_tpl_settings.main_grid_id,
            "aria-module-name": "feedback_management",
            "aria-unique-name": "uq_user_id",
            "dataUrl": '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_list_options"];?>
?alias_name=u_first_name&mode=<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value["Update"];?>
&rformat=html<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
',
            "dataInit": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value['u_first_name']['ajax'] == 'Yes') {?>initEditGridAjaxChosenEvent<?php } else { ?>initGridChosenEvent<?php }?>,
            "ajaxCall": '<?php if ($_smarty_tpl->tpl_vars['count_arr']->value["u_first_name"] == "Yes") {?>ajax-call<?php }?>',
            "data-placeholder": "<?php echo $_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','FEEDBACK_MANAGEMENT_FULL_NAME');?>
",
            "class": "inline-edit-row chosen-select"
        },
        "ctrl_type": "dropdown",
        "default_value": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['u_first_name']['default'];?>
",
        "filterSopt": "in",
        "stype": "select",
        "formatter": formatAdminModuleCustomEditLink,
        "unformat": unformatAdminModuleCustomEditLink
    },
    {
        "name": "u_user_name",
        "index": "u_user_name",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['u_user_name']['label_lang'];?>
",
        "labelClass": "header-align-left",
        "resizable": true,
        "width": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['u_user_name']['width'];?>
",
        "search": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_user_name']['search'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "export": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_user_name']['export'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "sortable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_user_name']['sortable'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "hidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_user_name']['hidden'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "hideme": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_user_name']['hideme'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "addable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_user_name']['addable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "editable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_user_name']['editable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "align": "left",
        "edittype": "select",
        "editrules": {
            "infoArr": []
        },
        "searchoptions": {
            "attr": {
                "aria-grid-id": el_tpl_settings.main_grid_id,
                "aria-module-name": "feedback_management",
                "aria-unique-name": null,
                "autocomplete": "off"
            },
            "sopt": strSearchOpts,
            "searchhidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['u_user_name']['search'] == 'Yes') {?>true<?php } else { ?>false<?php }?>
        },
        "editoptions": {
            "aria-grid-id": el_tpl_settings.main_grid_id,
            "aria-module-name": "feedback_management",
            "aria-unique-name": null,
            "placeholder": null,
            "class": "inline-edit-row "
        },
        "ctrl_type": "textbox",
        "default_value": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['u_user_name']['default'];?>
",
        "filterSopt": "bw",
        "formatter": formatAdminModuleCustomEditLink,
        "unformat": unformatAdminModuleCustomEditLink
    },
    {
        "name": "uq_feedback",
        "index": "uq_feedback",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_feedback']['label_lang'];?>
",
        "labelClass": "header-align-left",
        "resizable": true,
        "width": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_feedback']['width'];?>
",
        "search": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_feedback']['search'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "export": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_feedback']['export'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "sortable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_feedback']['sortable'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "hidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_feedback']['hidden'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "hideme": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_feedback']['hideme'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "addable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_feedback']['addable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "editable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_feedback']['editable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "align": "left",
        "edittype": "textarea",
        "editrules": {
            "infoArr": []
        },
        "searchoptions": {
            "attr": {
                "aria-grid-id": el_tpl_settings.main_grid_id,
                "aria-module-name": "feedback_management",
                "aria-unique-name": "uq_feedback",
                "autocomplete": "off"
            },
            "sopt": strSearchOpts,
            "searchhidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_feedback']['search'] == 'Yes') {?>true<?php } else { ?>false<?php }?>
        },
        "editoptions": {
            "aria-grid-id": el_tpl_settings.main_grid_id,
            "aria-module-name": "feedback_management",
            "aria-unique-name": "uq_feedback",
            "rows": "1",
            "placeholder": "",
            "dataInit": initEditGridElasticEvent,
            "class": "inline-edit-row inline-textarea-edit "
        },
        "ctrl_type": "textarea",
        "default_value": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_feedback']['default'];?>
",
        "filterSopt": "bw"
    },
    {
        "name": "uq_note",
        "index": "uq_note",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_note']['label_lang'];?>
",
        "labelClass": "header-align-left",
        "resizable": true,
        "width": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_note']['width'];?>
",
        "search": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_note']['search'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "export": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_note']['export'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "sortable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_note']['sortable'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "hidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_note']['hidden'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "hideme": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_note']['hideme'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "addable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_note']['addable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "editable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_note']['editable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "align": "left",
        "edittype": "textarea",
        "editrules": {
            "infoArr": []
        },
        "searchoptions": {
            "attr": {
                "aria-grid-id": el_tpl_settings.main_grid_id,
                "aria-module-name": "feedback_management",
                "aria-unique-name": "uq_note",
                "autocomplete": "off"
            },
            "sopt": strSearchOpts,
            "searchhidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_note']['search'] == 'Yes') {?>true<?php } else { ?>false<?php }?>
        },
        "editoptions": {
            "aria-grid-id": el_tpl_settings.main_grid_id,
            "aria-module-name": "feedback_management",
            "aria-unique-name": "uq_note",
            "rows": "1",
            "placeholder": "",
            "dataInit": initEditGridElasticEvent,
            "class": "inline-edit-row inline-textarea-edit "
        },
        "ctrl_type": "textarea",
        "default_value": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_note']['default'];?>
",
        "filterSopt": "bw"
    },
    {
        "name": "uq_added_at",
        "index": "uq_added_at",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_added_at']['label_lang'];?>
",
        "labelClass": "header-align-left",
        "resizable": true,
        "width": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_added_at']['width'];?>
",
        "search": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_added_at']['search'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "export": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_added_at']['export'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "sortable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_added_at']['sortable'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "hidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_added_at']['hidden'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "hideme": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_added_at']['hideme'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "addable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_added_at']['addable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "editable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_added_at']['editable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "align": "left",
        "edittype": "text",
        "editrules": {
            "infoArr": []
        },
        "searchoptions": {
            "attr": {
                "aria-grid-id": el_tpl_settings.main_grid_id,
                "aria-module-name": "feedback_management",
                "aria-unique-name": "uq_added_at",
                "autocomplete": "off",
                "class": "search-inline-date",
                "aria-date-format": "<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSMoments('date');?>
"
            },
            "sopt": dateSearchOpts,
            "searchhidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_added_at']['search'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
            "dataInit": initSearchGridDateRangePicker
        },
        "editoptions": {
            "aria-grid-id": el_tpl_settings.main_grid_id,
            "aria-module-name": "feedback_management",
            "aria-unique-name": "uq_added_at",
            "aria-date-format": "<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminJSFormats('date','dateFormat');?>
",
            "aria-min": "",
            "aria-max": "",
            "placeholder": "",
            "class": "inline-edit-row inline-date-edit date-picker-icon dateOnly"
        },
        "ctrl_type": "date",
        "default_value": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_added_at']['default'];?>
",
        "filterSopt": "bt"
    },
    {
        "name": "uq_status",
        "index": "uq_status",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_status']['label_lang'];?>
",
        "labelClass": "header-align-center",
        "resizable": true,
        "width": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_status']['width'];?>
",
        "search": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_status']['search'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "export": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_status']['export'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "sortable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_status']['sortable'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "hidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_status']['hidden'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "hideme": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_status']['hideme'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "addable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_status']['addable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "editable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_status']['editable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "align": "center",
        "edittype": "select",
        "editrules": {
            "infoArr": []
        },
        "searchoptions": {
            "attr": {
                "aria-grid-id": el_tpl_settings.main_grid_id,
                "aria-module-name": "feedback_management",
                "aria-unique-name": "uq_status",
                "autocomplete": "off",
                "data-placeholder": " ",
                "class": "search-chosen-select",
                "multiple": "multiple"
            },
            "sopt": intSearchOpts,
            "searchhidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_status']['search'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
            "dataUrl": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value["uq_status"]["json"] == "Yes") {?>false<?php } else { ?>'<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_list_options"];?>
?alias_name=uq_status&mode=<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value["Search"];?>
&rformat=html<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
'<?php }?>,
            "value": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value["uq_status"]["json"] == "Yes") {?>$.parseJSON('<?php echo addslashes($_smarty_tpl->tpl_vars['count_arr']->value["uq_status"]["data"]);?>
')<?php } else { ?>null<?php }?>,
            "dataInit": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value['uq_status']['ajax'] == 'Yes') {?>initSearchGridAjaxChosenEvent<?php } else { ?>initGridChosenEvent<?php }?>,
            "ajaxCall": '<?php if ($_smarty_tpl->tpl_vars['count_arr']->value["uq_status"]["ajax"] == "Yes") {?>ajax-call<?php }?>',
            "multiple": true
        },
        "editoptions": {
            "aria-grid-id": el_tpl_settings.main_grid_id,
            "aria-module-name": "feedback_management",
            "aria-unique-name": "uq_status",
            "dataUrl": '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_list_options"];?>
?alias_name=uq_status&mode=<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value["Update"];?>
&rformat=html<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
',
            "dataInit": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value['uq_status']['ajax'] == 'Yes') {?>initEditGridAjaxChosenEvent<?php } else { ?>initGridChosenEvent<?php }?>,
            "ajaxCall": '<?php if ($_smarty_tpl->tpl_vars['count_arr']->value["uq_status"] == "Yes") {?>ajax-call<?php }?>',
            "data-placeholder": "<?php echo $_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','FEEDBACK_MANAGEMENT_STATUS');?>
",
            "class": "inline-edit-row chosen-select"
        },
        "ctrl_type": "dropdown",
        "default_value": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_status']['default'];?>
",
        "filterSopt": "in",
        "stype": "select"
    },
    {
        "name": "uq_user_id",
        "index": "uq_user_id",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_user_id']['label_lang'];?>
",
        "labelClass": "header-align-center",
        "resizable": true,
        "width": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_user_id']['width'];?>
",
        "search": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_user_id']['search'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "export": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_user_id']['export'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "sortable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_user_id']['sortable'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "hidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_user_id']['hidden'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "hideme": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_user_id']['hideme'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "addable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_user_id']['addable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "editable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_user_id']['editable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "align": "center",
        "edittype": "select",
        "editrules": {
            "infoArr": []
        },
        "searchoptions": {
            "attr": {
                "aria-grid-id": el_tpl_settings.main_grid_id,
                "aria-module-name": "feedback_management",
                "aria-unique-name": "uq_user_id",
                "autocomplete": "off",
                "data-placeholder": " ",
                "class": "search-chosen-select",
                "multiple": "multiple"
            },
            "sopt": intSearchOpts,
            "searchhidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['uq_user_id']['search'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
            "dataUrl": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value["uq_user_id"]["json"] == "Yes") {?>false<?php } else { ?>'<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_list_options"];?>
?alias_name=uq_user_id&mode=<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value["Search"];?>
&rformat=html<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
'<?php }?>,
            "value": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value["uq_user_id"]["json"] == "Yes") {?>$.parseJSON('<?php echo addslashes($_smarty_tpl->tpl_vars['count_arr']->value["uq_user_id"]["data"]);?>
')<?php } else { ?>null<?php }?>,
            "dataInit": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value['uq_user_id']['ajax'] == 'Yes') {?>initSearchGridAjaxChosenEvent<?php } else { ?>initGridChosenEvent<?php }?>,
            "ajaxCall": '<?php if ($_smarty_tpl->tpl_vars['count_arr']->value["uq_user_id"]["ajax"] == "Yes") {?>ajax-call<?php }?>',
            "multiple": true
        },
        "editoptions": {
            "aria-grid-id": el_tpl_settings.main_grid_id,
            "aria-module-name": "feedback_management",
            "aria-unique-name": "uq_user_id",
            "dataUrl": '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_list_options"];?>
?alias_name=uq_user_id&mode=<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value["Update"];?>
&rformat=html<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
',
            "dataInit": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value['uq_user_id']['ajax'] == 'Yes') {?>initEditGridAjaxChosenEvent<?php } else { ?>initGridChosenEvent<?php }?>,
            "ajaxCall": '<?php if ($_smarty_tpl->tpl_vars['count_arr']->value["uq_user_id"] == "Yes") {?>ajax-call<?php }?>',
            "data-placeholder": "<?php echo $_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','FEEDBACK_MANAGEMENT_USER_ID');?>
",
            "class": "inline-edit-row chosen-select"
        },
        "ctrl_type": "dropdown",
        "default_value": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['uq_user_id']['default'];?>
",
        "filterSopt": "in",
        "stype": "select"
    },
    {
        "name": "sys_custom_field_1",
        "index": "sys_custom_field_1",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['sys_custom_field_1']['label_lang'];?>
",
        "labelClass": "header-align-center",
        "resizable": true,
        "width": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['sys_custom_field_1']['width'];?>
",
        "search": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['sys_custom_field_1']['search'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "export": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['sys_custom_field_1']['export'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "sortable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['sys_custom_field_1']['sortable'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "hidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['sys_custom_field_1']['hidden'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "hideme": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['sys_custom_field_1']['hideme'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "addable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['sys_custom_field_1']['addable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "editable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['sys_custom_field_1']['editable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "align": "center",
        "edittype": "select",
        "editrules": {
            "infoArr": []
        },
        "searchoptions": {
            "attr": {
                "aria-grid-id": el_tpl_settings.main_grid_id,
                "aria-module-name": "feedback_management",
                "aria-unique-name": null,
                "autocomplete": "off"
            },
            "sopt": strSearchOpts,
            "searchhidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['sys_custom_field_1']['search'] == 'Yes') {?>true<?php } else { ?>false<?php }?>
        },
        "editoptions": {
            "aria-grid-id": el_tpl_settings.main_grid_id,
            "aria-module-name": "feedback_management",
            "aria-unique-name": null,
            "placeholder": null,
            "class": "inline-edit-row "
        },
        "ctrl_type": "textbox",
        "default_value": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['sys_custom_field_1']['default'];?>
",
        "filterSopt": "bw"
    }];
         
    initMainGridListing();
    createTooltipHeading();
    callSwitchToParent();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js("admin/custom/feedbackManagement.js");?>

<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

<?php }?> <?php }
}
