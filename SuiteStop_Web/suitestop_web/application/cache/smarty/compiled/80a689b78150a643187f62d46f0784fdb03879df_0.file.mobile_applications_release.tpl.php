<?php
/* Smarty version 3.1.28, created on 2021-08-23 05:30:57
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/mobile_applications_release.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_6123329119be64_80447713',
  'file_dependency' => 
  array (
    '80a689b78150a643187f62d46f0784fdb03879df' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/mobile_applications_release.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mobile_applications_release_strip.tpl' => 1,
  ),
),false)) {
function content_6123329119be64_80447713 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>
<div class="module-custom-container">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:mobile_applications_release_strip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
" data-custom-name="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
        <div id="ajax_content_div" class="ajax-content-div top-frm-spacing">
            <div class="grid-data-container pad-calc-container">
                <?php if (is_array($_smarty_tpl->tpl_vars['applications']->value) && count($_smarty_tpl->tpl_vars['applications']->value) > 0) {?>
                    <div class="l-section">
                        <div class="c-flex is--hotandnew hotandnew-block" id="mobile_apps">
                            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['applications']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <?php $_smarty_tpl->tpl_vars["version_data"] = new Smarty_Variable($_smarty_tpl->tpl_vars['applications']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['versions_list'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "version_data", 0);?>
                                <div class="c-flex__item is--contrast w-inline-block">
                                    <h3 class="c-tool-title">
                                        <?php echo $_smarty_tpl->tpl_vars['applications']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mam_application_name'];?>

                                        <span class="application-icons">
                                            <?php if ($_smarty_tpl->tpl_vars['applications']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mam_device_type'] == 'Android') {?>
                                                <a href="javascript://"><i class="fa fa-android app-icon-fonts"></i></a>
                                            <?php } else { ?>
                                                <a href="javascript://"><i class="fa fa-apple app-icon-fonts"></i></a>
                                            <?php }?>
                                        </span>
                                    </h3>
                                    <ul class="nav nav-tabs"></ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active scrollbars" id="list-<?php echo $_smarty_tpl->tpl_vars['applications']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mam_application_master_id'];?>
">
                                            <ul>
                                                <?php
$__section_j_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__section_j'] : false;
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['version_data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total != 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['version_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['application_url'];?>
" target="_blank">
                                                            <span class="rversionno"><?php echo $_smarty_tpl->tpl_vars['version_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['mav_version_number'];?>
</span>
                                                            <span class="date"><?php echo $_smarty_tpl->tpl_vars['this']->value->general->dateSystemFormat($_smarty_tpl->tpl_vars['version_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['mav_date_published']);?>
</span> 
                                                        </a>
                                                    </li>
                                                <?php
}
}
if ($__section_j_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_1_saved;
}
?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                        </div>
                    </div>
                <?php } else { ?>
                    <div align="center" class="text-error">
                        No mobile application released yet.
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_css("admin/mobile_applications.css");?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js("admin/admin/js_mobile_applications.js");?>


<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

<?php }?> <?php }
}
