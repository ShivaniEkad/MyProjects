<?php
/* Smarty version 3.1.28, created on 2021-08-04 06:35:14
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_610a352299ff05_37514875',
  'file_dependency' => 
  array (
    '84b14cb820df7c219a3bdfc89a2731fc799aced2' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/menu.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610a352299ff05_37514875 ($_smarty_tpl) {
if (!is_callable('smarty_block_javascript')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/block.javascript.php';
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>
<div>
    <div class="headingfix">
        <div class="heading" id="top_heading_fix" style="width: 1351px;">
            <h3 style="padding-left: 221px; width: 1077.71px;">
                <div class="screen-title">
                    <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_MENU');?>

                </div>
            </h3>
            <div class="header-right-drops"></div>
        </div>
    </div>
    <div id="ajax_content_div" class="ajax-content-div top-frm-spacing">
        <div id="ajax_qLoverlay"></div>
        <div id="ajax_qLbar"></div>
        <div id="scrollable_content" class="scrollable-content top-block-spacing">
            <div id="bulkmail" class="frm-elem-block frm-stand-view">
                <div class="main-content-block" id="main_content_block">
                    <div style="width:98%" class="frm-block-layout pad-calc-container">
                        <div class="box gradient single-row-view ">
                            <div class="title frm-title-none"></div>
                            <div class="content label-lt-align menu-content">
                                <table class='responsive table table-bordered menu-table'>
                                    <thead>
                                        <tr>
                                            <th width="40%">
                                                <div align="left" class="global-extended-col-name"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_MENU_TITLE');?>
</div>
                                            </th>
                                            <th width="40%">
                                                <div align="left"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_MENU_CAPABILITY');?>
</div>
                                            </th>
                                            <th width="20%">
                                                <div align="left"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_MENU_STATUS');?>
</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['menu_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_0_saved_item = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data'] : false;
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable();
$__foreach_data_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_data_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$__foreach_data_0_saved_local_item = $_smarty_tpl->tpl_vars['data'];
?>
                                        <tr class="menu-parent-item">
                                            <td width="40%" class="menu-parent-title" colspan="2">
                                                <a href="javascript://" class="<?php if ($_smarty_tpl->tpl_vars['edit_title']->value == true) {?>editable editable-click edit-menu-title<?php }?>" hijacked="yes" 
                                                   data-value="<?php echo $_smarty_tpl->tpl_vars['data']->value['parent_menu_display'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL($_smarty_tpl->tpl_vars['data']->value['parent_admin_menu_id']);?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['parent_menu_display'];?>

                                                </a>
                                            </td>
                                            
                                            <td width="20%">
                                                <a href="javascript://" class="<?php if ($_smarty_tpl->tpl_vars['edit_status']->value == true) {?>editable editable-click edit-menu-status<?php }?>" hijacked="yes" 
                                                    data-value="<?php echo $_smarty_tpl->tpl_vars['data']->value['parent_status'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL($_smarty_tpl->tpl_vars['data']->value['parent_admin_menu_id']);?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['parent_status'];?>

                                                </a>
                                            </td>
                                        </tr>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['children_arr'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_child_1_saved_item = isset($_smarty_tpl->tpl_vars['child']) ? $_smarty_tpl->tpl_vars['child'] : false;
$_smarty_tpl->tpl_vars['child'] = new Smarty_Variable();
$__foreach_child_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_child_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$__foreach_child_1_saved_local_item = $_smarty_tpl->tpl_vars['child'];
?>
                                        <tr class="menu-child-item">
                                            <td width="40%" class='menu-child-title'>
                                                <a href="javascript://" class="<?php if ($_smarty_tpl->tpl_vars['edit_title']->value == true) {?>editable editable-click edit-menu-title<?php }?>" hijacked="yes" 
                                                   data-value="<?php echo $_smarty_tpl->tpl_vars['child']->value['child_menu_display'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL($_smarty_tpl->tpl_vars['child']->value['child_admin_menu_id']);?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['child']->value['child_menu_display'];?>

                                                </a>
                                            </td>
                                            <td width="40%">
                                                <a href="javascript://" class="<?php if ($_smarty_tpl->tpl_vars['edit_capability']->value == true && $_smarty_tpl->tpl_vars['child']->value['child_capability_added_by'] != 'System') {?>editable editable-click edit-menu-capability<?php }?>" hijacked="yes" 
                                                   data-value="<?php echo $_smarty_tpl->tpl_vars['child']->value['child_capability_code'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL($_smarty_tpl->tpl_vars['child']->value['child_admin_menu_id']);?>
" >
                                                    <?php echo $_smarty_tpl->tpl_vars['child']->value['child_capability_code'];?>

                                                </a>
                                            </td>
                                            <td width="20%">
                                                <a href="javascript://" class="<?php if ($_smarty_tpl->tpl_vars['edit_status']->value == true) {?>editable editable-click edit-menu-status<?php }?>" hijacked="yes" 
                                                   data-value="<?php echo $_smarty_tpl->tpl_vars['child']->value['child_status'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL($_smarty_tpl->tpl_vars['child']->value['child_admin_menu_id']);?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['child']->value['child_status'];?>

                                                </a>
                                            </td>
                                        </tr>
                                        <?php
$_smarty_tpl->tpl_vars['child'] = $__foreach_child_1_saved_local_item;
}
}
if ($__foreach_child_1_saved_item) {
$_smarty_tpl->tpl_vars['child'] = $__foreach_child_1_saved_item;
}
?>
                                    <?php
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_local_item;
}
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_item;
}
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('javascript', array()); $_block_repeat=true; echo smarty_block_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    $.fn.editable.defaults.mode = 'inline', $.fn.editable.defaults.clear = false;
    var el_form_settings = {};
    el_form_settings['edit_title'] = '<?php echo $_smarty_tpl->tpl_vars['edit_title']->value;?>
';
    el_form_settings['edit_capability'] = '<?php echo $_smarty_tpl->tpl_vars['edit_capability']->value;?>
';
    el_form_settings['edit_status'] = '<?php echo $_smarty_tpl->tpl_vars['edit_status']->value;?>
';
    el_form_settings['status_list_url'] = admin_url+'<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['menu_status_list'];?>
';
    el_form_settings['capability_list_url'] = admin_url+'<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['menu_capability_list'];?>
';
    el_form_settings['save_menu_data_url'] = admin_url+'<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['menu_save_menu_data'];?>
';
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js('admin/admin/js_admin_menu.js');?>


<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

<?php }
}
}
