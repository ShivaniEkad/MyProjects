<?php
/* Smarty version 3.1.28, created on 2021-08-20 08:34:08
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/languagelabels/views/languagelabels_index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_611f6900e6ee88_07836329',
  'file_dependency' => 
  array (
    '95115a8a950f65c362ad5757c7d5574a2e295585' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/languagelabels/views/languagelabels_index.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:languagelabels_index_strip.tpl' => 1,
  ),
),false)) {
function content_611f6900e6ee88_07836329 ($_smarty_tpl) {
if (!is_callable('smarty_block_javascript')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/block.javascript.php';
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>
<div class="module-list-container">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:languagelabels_index_strip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                
    el_grid_settings['hide_add_btn'] = '1';
    el_grid_settings['hide_del_btn'] = '';
    el_grid_settings['hide_status_btn'] = '1';
    el_grid_settings['hide_export_btn'] = '1';
    el_grid_settings['hide_columns_btn'] = 'No';
    
    el_grid_settings['show_saved_search'] = 'No';
    el_grid_settings['hide_advance_search'] = 'No';
    el_grid_settings['hide_search_tool'] = 'No';
    el_grid_settings['hide_multi_select'] = 'No';
    el_grid_settings['hide_paging_btn'] = 'No';
    el_grid_settings['hide_refresh_btn'] = 'No';
    
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
    el_grid_settings['default_sort'] = 'mll_label';
    el_grid_settings['sort_order'] = 'asc';
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
    
    el_grid_settings['subgrid'] = 'No';
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
        "name": "mll_label",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mll_label']['label_lang'];?>
"
    },
    {
        "name": "mlll_title",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mlll_title']['label_lang'];?>
"
    },
    {
        "name": "mll_module",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mll_module']['label_lang'];?>
"
    },
    {
        "name": "mll_status",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mll_status']['label_lang'];?>
"
    }];
    
    js_col_model_json = [{
        "name": "mll_label",
        "index": "mll_label",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mll_label']['label_lang'];?>
",
        "labelClass": "header-align-left",
        "resizable": true,
        "width": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mll_label']['width'];?>
",
        "search": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_label']['search'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "export": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_label']['export'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "sortable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_label']['sortable'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "hidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_label']['hidden'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "hideme": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_label']['hideme'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "addable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_label']['addable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "editable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_label']['editable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "align": "left",
        "edittype": "text",
        "editrules": {
            "required": true,
            "infoArr": {
                "required": {
                    "message": ci_js_validation_message(js_lang_label.GENERIC_PLEASE_ENTER_A_VALUE_FOR_THE__C35FIELD_C35_FIELD_C46 ,"#FIELD#",js_lang_label.LANGUAGELABELS_LANGUAGE_LABEL)
                }
            }
        },
        "searchoptions": {
            "attr": {
                "aria-grid-id": el_tpl_settings.main_grid_id,
                "aria-module-name": "languagelabels",
                "aria-unique-name": "mll_label",
                "autocomplete": "off"
            },
            "sopt": strSearchOpts,
            "searchhidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_label']['search'] == 'Yes') {?>true<?php } else { ?>false<?php }?>
        },
        "editoptions": {
            "aria-grid-id": el_tpl_settings.main_grid_id,
            "aria-module-name": "languagelabels",
            "aria-unique-name": "mll_label",
            "placeholder": "",
            "class": "inline-edit-row "
        },
        "ctrl_type": "textbox",
        "default_value": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mll_label']['default'];?>
",
        "filterSopt": "bw",
        "formatter": formatAdminModuleEditLink,
        "unformat": unformatAdminModuleEditLink
    },
    {
        "name": "mlll_title",
        "index": "mlll_title",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mlll_title']['label_lang'];?>
",
        "labelClass": "header-align-left",
        "resizable": true,
        "width": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mlll_title']['width'];?>
",
        "search": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mlll_title']['search'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "export": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mlll_title']['export'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "sortable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mlll_title']['sortable'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "hidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mlll_title']['hidden'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "hideme": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mlll_title']['hideme'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "addable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mlll_title']['addable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "editable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mlll_title']['editable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "align": "left",
        "edittype": "select",
        "editrules": {
            "infoArr": []
        },
        "searchoptions": {
            "attr": {
                "aria-grid-id": el_tpl_settings.main_grid_id,
                "aria-module-name": "languagelabels",
                "aria-unique-name": null,
                "autocomplete": "off"
            },
            "sopt": strSearchOpts,
            "searchhidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mlll_title']['search'] == 'Yes') {?>true<?php } else { ?>false<?php }?>
        },
        "editoptions": {
            "aria-grid-id": el_tpl_settings.main_grid_id,
            "aria-module-name": "languagelabels",
            "aria-unique-name": null,
            "placeholder": null,
            "class": "inline-edit-row "
        },
        "ctrl_type": "textbox",
        "default_value": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mlll_title']['default'];?>
",
        "filterSopt": "bw"
    },
    {
        "name": "mll_module",
        "index": "mll_module",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mll_module']['label_lang'];?>
",
        "labelClass": "header-align-left",
        "resizable": true,
        "width": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mll_module']['width'];?>
",
        "search": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_module']['search'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "export": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_module']['export'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "sortable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_module']['sortable'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "hidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_module']['hidden'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "hideme": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_module']['hideme'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "addable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_module']['addable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "editable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_module']['editable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "align": "left",
        "edittype": "select",
        "editrules": {
            "required": true,
            "infoArr": {
                "required": {
                    "message": ci_js_validation_message(js_lang_label.GENERIC_PLEASE_ENTER_A_VALUE_FOR_THE__C35FIELD_C35_FIELD_C46 ,"#FIELD#",js_lang_label.LANGUAGELABELS_MODULE)
                }
            }
        },
        "searchoptions": {
            "attr": {
                "aria-grid-id": el_tpl_settings.main_grid_id,
                "aria-module-name": "languagelabels",
                "aria-unique-name": "mll_module",
                "autocomplete": "off",
                "data-placeholder": " ",
                "class": "search-chosen-select",
                "multiple": "multiple"
            },
            "sopt": intSearchOpts,
            "searchhidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_module']['search'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
            "dataUrl": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value["mll_module"]["json"] == "Yes") {?>false<?php } else { ?>'<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_list_options"];?>
?alias_name=mll_module&mode=<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value["Search"];?>
&rformat=html<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
'<?php }?>,
            "value": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value["mll_module"]["json"] == "Yes") {?>$.parseJSON('<?php echo addslashes($_smarty_tpl->tpl_vars['count_arr']->value["mll_module"]["data"]);?>
')<?php } else { ?>null<?php }?>,
            "dataInit": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value['mll_module']['ajax'] == 'Yes') {?>initSearchGridAjaxChosenEvent<?php } else { ?>initGridChosenEvent<?php }?>,
            "ajaxCall": '<?php if ($_smarty_tpl->tpl_vars['count_arr']->value["mll_module"]["ajax"] == "Yes") {?>ajax-call<?php }?>',
            "multiple": true
        },
        "editoptions": {
            "aria-grid-id": el_tpl_settings.main_grid_id,
            "aria-module-name": "languagelabels",
            "aria-unique-name": "mll_module",
            "dataUrl": '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_list_options"];?>
?alias_name=mll_module&mode=<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value["Update"];?>
&rformat=html<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
',
            "dataInit": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value['mll_module']['ajax'] == 'Yes') {?>initEditGridAjaxChosenEvent<?php } else { ?>initGridChosenEvent<?php }?>,
            "ajaxCall": '<?php if ($_smarty_tpl->tpl_vars['count_arr']->value["mll_module"] == "Yes") {?>ajax-call<?php }?>',
            "data-placeholder": "<?php echo $_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','LANGUAGELABELS_MODULE');?>
",
            "class": "inline-edit-row chosen-select"
        },
        "ctrl_type": "dropdown",
        "default_value": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mll_module']['default'];?>
",
        "filterSopt": "in",
        "stype": "select"
    },
    {
        "name": "mll_status",
        "index": "mll_status",
        "label": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mll_status']['label_lang'];?>
",
        "labelClass": "header-align-center",
        "resizable": true,
        "width": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mll_status']['width'];?>
",
        "search": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_status']['search'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "export": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_status']['export'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "sortable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_status']['sortable'] == 'No') {?>false<?php } else { ?>true<?php }?>,
        "hidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_status']['hidden'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "hideme": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_status']['hideme'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "addable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_status']['addable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "editable": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_status']['editable'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
        "align": "center",
        "edittype": "select",
        "editrules": {
            "required": true,
            "infoArr": {
                "required": {
                    "message": ci_js_validation_message(js_lang_label.GENERIC_PLEASE_ENTER_A_VALUE_FOR_THE__C35FIELD_C35_FIELD_C46 ,"#FIELD#",js_lang_label.LANGUAGELABELS_STATUS)
                }
            }
        },
        "searchoptions": {
            "attr": {
                "aria-grid-id": el_tpl_settings.main_grid_id,
                "aria-module-name": "languagelabels",
                "aria-unique-name": "mll_status",
                "autocomplete": "off",
                "data-placeholder": " ",
                "class": "search-chosen-select",
                "multiple": "multiple"
            },
            "sopt": intSearchOpts,
            "searchhidden": <?php if ($_smarty_tpl->tpl_vars['list_config']->value['mll_status']['search'] == 'Yes') {?>true<?php } else { ?>false<?php }?>,
            "dataUrl": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value["mll_status"]["json"] == "Yes") {?>false<?php } else { ?>'<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_list_options"];?>
?alias_name=mll_status&mode=<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value["Search"];?>
&rformat=html<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
'<?php }?>,
            "value": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value["mll_status"]["json"] == "Yes") {?>$.parseJSON('<?php echo addslashes($_smarty_tpl->tpl_vars['count_arr']->value["mll_status"]["data"]);?>
')<?php } else { ?>null<?php }?>,
            "dataInit": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value['mll_status']['ajax'] == 'Yes') {?>initSearchGridAjaxChosenEvent<?php } else { ?>initGridChosenEvent<?php }?>,
            "ajaxCall": '<?php if ($_smarty_tpl->tpl_vars['count_arr']->value["mll_status"]["ajax"] == "Yes") {?>ajax-call<?php }?>',
            "multiple": true
        },
        "editoptions": {
            "aria-grid-id": el_tpl_settings.main_grid_id,
            "aria-module-name": "languagelabels",
            "aria-unique-name": "mll_status",
            "dataUrl": '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["get_list_options"];?>
?alias_name=mll_status&mode=<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value["Update"];?>
&rformat=html<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
',
            "dataInit": <?php if ($_smarty_tpl->tpl_vars['count_arr']->value['mll_status']['ajax'] == 'Yes') {?>initEditGridAjaxChosenEvent<?php } else { ?>initGridChosenEvent<?php }?>,
            "ajaxCall": '<?php if ($_smarty_tpl->tpl_vars['count_arr']->value["mll_status"] == "Yes") {?>ajax-call<?php }?>',
            "data-placeholder": "<?php echo $_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_PLEASE_SELECT__C35FIELD_C35','#FIELD#','LANGUAGELABELS_STATUS');?>
",
            "class": "inline-edit-row chosen-select"
        },
        "ctrl_type": "dropdown",
        "default_value": "<?php echo $_smarty_tpl->tpl_vars['list_config']->value['mll_status']['default'];?>
",
        "filterSopt": "in",
        "stype": "select"
    }];
         
    initMainGridListing();
    createTooltipHeading();
    callSwitchToParent();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

<?php }?> <?php }
}
