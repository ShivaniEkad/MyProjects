<?php
/* Smarty version 3.1.28, created on 2021-07-23 04:12:06
  from "/var/www/html/Appineers_V4_Web/application/admin/views/cit/admin_include_css.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60fa4196cf4e21_02788094',
  'file_dependency' => 
  array (
    'e3148c8448266332c9b17985e3934bcaa590a21a' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/application/admin/views/cit/admin_include_css.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60fa4196cf4e21_02788094 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pPage']->value == "true") {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("admin/style.css","admin/icons.css","admin/font-awesome.css","bootstrap/bootstrap.css","bootstrap/bootstrap-responsive.css","misc/jquery.ui.pattern.css");?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("jqueryui/jquery-ui-1.9.2.custom.min.css","forms/validate.css","misc/jquery.qtip.css","rating-master/jquery.raty.css","bootstrap/main.css");?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("theme/".((string)$_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_DISPLAY'))."/theme.css","theme/".((string)$_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_DISPLAY'))."/".((string)$_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_PATTERN')));?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("theme/".((string)$_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_CUSTOMIZE')),"admin/cform_generate.css","global/global.css","custom/custom.css");?>

<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("admin/style.css","admin/icons.css","admin/font-awesome.css","bootstrap/bootstrap.css","bootstrap/bootstrap-responsive.css","misc/jquery.ui.pattern.css");?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("jqueryui/jquery-ui-1.9.2.custom.min.css","chosen/chosen.css","jqGrid/jquery.multiselect.css","jqGrid/jquery.multiselect.filter.css","jqGrid/ui.jqgrid.css");?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("datepicker/jquery.ui.datepicker.css","datepicker/jquery-ui-timepicker-addon.css","datepicker/daterangepicker.css");?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("codemirror/codemirror.css","forms/validate.css","forms/jquery.inputlimiter.css","misc/jquery.qtip.css");?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("misc/jquery.pnotify.default.css","stuhover/stuhover.css","x-editable/bootstrap-editable.css");?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("colorpicker/colpick.css","paginate/jquery.paginate.css","rating-master/jquery.raty.css","autocomplete_token/token-input.css");?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("autocomplete_token/token-input-facebook.css","autocomplete_token/token-input-mac.css","autocomplete_token/token-input-simple.css");?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("fancybox/jquery.fancybox.css","gridster/jquery.gridster.css","toastr/toastr.min.css","bootstrap/main.css");?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("theme/".((string)$_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_DISPLAY'))."/theme.css","theme/".((string)$_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_DISPLAY'))."/".((string)$_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_PATTERN')));?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_common_css("theme/".((string)$_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_CUSTOMIZE')),"admin/cform_generate.css","global/global.css","custom/custom.css");?>

<?php }
}
}
