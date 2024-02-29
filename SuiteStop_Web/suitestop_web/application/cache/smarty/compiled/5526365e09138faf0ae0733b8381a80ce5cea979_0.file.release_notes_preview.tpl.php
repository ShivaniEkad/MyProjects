<?php
/* Smarty version 3.1.28, created on 2021-08-20 09:27:14
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/release_notes_preview.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_611f75725714d6_00298552',
  'file_dependency' => 
  array (
    '5526365e09138faf0ae0733b8381a80ce5cea979' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/release_notes_preview.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:release_notes_preview_strip.tpl' => 1,
  ),
),false)) {
function content_611f75725714d6_00298552 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>
<div class="module-custom-container">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:release_notes_preview_strip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
" data-custom-name="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
        <div id="ajax_content_div" class="ajax-content-div top-frm-spacing">
            <div class="release-notes grid-data-container pad-calc-container">
                <div class="centerdiv">
                    <?php if (is_array($_smarty_tpl->tpl_vars['release_notes']->value) && count($_smarty_tpl->tpl_vars['release_notes']->value) > 0) {?>
                    <div class="wrapper cf"> 
                        <!--sidebar-->
                        <div id="notes-sidebar" class="notes-sidebar">
                            <div class="sidebar-inside">
                                <div class="sticky-wrapper">
                                    <div id="left-content-list" class="left-menu release-note-menu">
                                        <ul class="navigation" id="left-content-block" data-default-id="<?php echo $_smarty_tpl->tpl_vars['release_id']->value;?>
">
                                            <?php
$_from = $_smarty_tpl->tpl_vars['release_notes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_menu_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_menu']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menu'] : false;
$__foreach_menu_0_saved_item = isset($_smarty_tpl->tpl_vars['note']) ? $_smarty_tpl->tpl_vars['note'] : false;
$_smarty_tpl->tpl_vars['note'] = new Smarty_Variable();
$__foreach_menu_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['__smarty_foreach_menu'] = new Smarty_Variable(array('index' => -1));
if ($__foreach_menu_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['index']++;
$__foreach_menu_0_saved_local_item = $_smarty_tpl->tpl_vars['note'];
?>	
                                            <li class='left-content-item'> 
                                                <a href="javascript://" title="<?php echo $_smarty_tpl->tpl_vars['note']->value['version_number'];?>
" class="left-content-anc <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['index'] : null) == 0) {?>active<?php }?>" data-note-id="<?php echo $_smarty_tpl->tpl_vars['note']->value['notes_id'];?>
"> 
                                                    <span class="date">
                                                        <?php if ($_smarty_tpl->tpl_vars['note']->value['release_status'] == 'Draft') {?>
                                                            Not Released
                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['note']->value['release_date'];?>

                                                        <?php }?>
                                                    </span> 
                                                    <span class="rversionno"><?php echo $_smarty_tpl->tpl_vars['note']->value['version_number'];?>
</span> 
                                                </a>
                                            </li>
                                            <?php
$_smarty_tpl->tpl_vars['note'] = $__foreach_menu_0_saved_local_item;
}
}
if ($__foreach_menu_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_menu'] = $__foreach_menu_0_saved;
}
if ($__foreach_menu_0_saved_item) {
$_smarty_tpl->tpl_vars['note'] = $__foreach_menu_0_saved_item;
}
?>  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end sidebar--> 
                        <!--main content-->
                        <div class="main_content" id="content">
                            <div id="content" class="content">
                                <div class="margin_horizontal cont_main release-notes-dis" id="helpdata">
                                <?php
$_from = $_smarty_tpl->tpl_vars['release_details']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_details_1_saved_item = isset($_smarty_tpl->tpl_vars['details']) ? $_smarty_tpl->tpl_vars['details'] : false;
$__foreach_details_1_saved_key = isset($_smarty_tpl->tpl_vars['version']) ? $_smarty_tpl->tpl_vars['version'] : false;
$_smarty_tpl->tpl_vars['details'] = new Smarty_Variable();
$__foreach_details_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_details_1_total) {
$_smarty_tpl->tpl_vars['version'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['version']->value => $_smarty_tpl->tpl_vars['details']->value) {
$__foreach_details_1_saved_local_item = $_smarty_tpl->tpl_vars['details'];
?>	
                                    <div id="note-content-<?php echo $_smarty_tpl->tpl_vars['release_notes']->value[$_smarty_tpl->tpl_vars['version']->value]['notes_id'];?>
" class="release-note">
                                        <h2>
                                            <?php echo $_smarty_tpl->tpl_vars['version']->value;?>

                                            <span class="date">
                                                <?php if ($_smarty_tpl->tpl_vars['release_notes']->value[$_smarty_tpl->tpl_vars['version']->value]['release_status'] == 'Draft') {?>
                                                    Not Released
                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['release_notes']->value[$_smarty_tpl->tpl_vars['version']->value]['release_date'];?>

                                                <?php }?>
                                            </span>
                                            <?php if (is_array($_smarty_tpl->tpl_vars['release_notes']->value[$_smarty_tpl->tpl_vars['version']->value]['app_versions']) && count($_smarty_tpl->tpl_vars['release_notes']->value[$_smarty_tpl->tpl_vars['version']->value]['app_versions']) > 0) {?>
                                            <span class="app-image-block">
                                            <?php
$_from = $_smarty_tpl->tpl_vars['release_notes']->value[$_smarty_tpl->tpl_vars['version']->value]['app_versions'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_app_value_2_saved_item = isset($_smarty_tpl->tpl_vars['app_value']) ? $_smarty_tpl->tpl_vars['app_value'] : false;
$__foreach_app_value_2_saved_key = isset($_smarty_tpl->tpl_vars['app_version']) ? $_smarty_tpl->tpl_vars['app_version'] : false;
$_smarty_tpl->tpl_vars['app_value'] = new Smarty_Variable();
$__foreach_app_value_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_app_value_2_total) {
$_smarty_tpl->tpl_vars['app_version'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['app_version']->value => $_smarty_tpl->tpl_vars['app_value']->value) {
$__foreach_app_value_2_saved_local_item = $_smarty_tpl->tpl_vars['app_value'];
?>
                                                <?php if ($_smarty_tpl->tpl_vars['app_value']->value['type'] == 'Android') {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['app_value']->value['app_url'];?>
" class="app-image-anc tip android" hijacked="yes" title="<?php echo $_smarty_tpl->tpl_vars['app_value']->value['app_name'];?>
" target="blank"><i class="fa fa-android app-image-fonts"></i></a>
                                                <?php } else { ?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['app_value']->value['app_url'];?>
" class="app-image-anc tip ios" hijacked="yes" title="<?php echo $_smarty_tpl->tpl_vars['app_value']->value['app_name'];?>
" target="blank"><i class="fa fa-apple app-image-fonts"></i></a>
                                                <?php }?>
                                            <?php
$_smarty_tpl->tpl_vars['app_value'] = $__foreach_app_value_2_saved_local_item;
}
}
if ($__foreach_app_value_2_saved_item) {
$_smarty_tpl->tpl_vars['app_value'] = $__foreach_app_value_2_saved_item;
}
if ($__foreach_app_value_2_saved_key) {
$_smarty_tpl->tpl_vars['app_version'] = $__foreach_app_value_2_saved_key;
}
?>
                                            </span>
                                            <?php }?>
                                        </h2>
                                        <ul class="note_list">
                                            <?php
$_from = $_smarty_tpl->tpl_vars['details']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_3_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_3_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_3_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                                            <li>
                                                <h4>
                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                                                    <span class="tag <?php echo $_smarty_tpl->tpl_vars['item']->value['class_name'];?>
"><i class="fa fa-star"></i>
                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
	  
                                                    </span>
                                                </h4>
                                                <div class="note_dtl">
                                                    <p><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
                                                </div>
                                            </li>
                                            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved_local_item;
}
}
if ($__foreach_item_3_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved_item;
}
?>	  
                                        </ul>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['details'] = $__foreach_details_1_saved_local_item;
}
}
if ($__foreach_details_1_saved_item) {
$_smarty_tpl->tpl_vars['details'] = $__foreach_details_1_saved_item;
}
if ($__foreach_details_1_saved_key) {
$_smarty_tpl->tpl_vars['version'] = $__foreach_details_1_saved_key;
}
?>
                                </div>
                            </div>
                        </div>
                        <!--end main content--> 
                    </div>
                    <?php } else { ?>
                        <div align="center" class="text-error">
                            No release notes added yet.
                        </div>
                    <?php }?>
                </div>
            </div>
         </div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_css("admin/release_notes.css");?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js("admin/admin/js_release_notes.js");?>


<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

<?php }?> 

<?php }
}
