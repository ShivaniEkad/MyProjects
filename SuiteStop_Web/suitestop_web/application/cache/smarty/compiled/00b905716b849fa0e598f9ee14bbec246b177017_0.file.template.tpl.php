<?php
/* Smarty version 3.1.28, created on 2021-07-16 13:38:28
  from "C:\xampp\htdocs\Appineers_V4_Web\application\front\views\template.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60f16fb49db171_69213984',
  'file_dependency' => 
  array (
    '00b905716b849fa0e598f9ee14bbec246b177017' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Appineers_V4_Web\\application\\front\\views\\template.tpl',
      1 => 1626430805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top/top.tpl' => 1,
    'file:bottom/footer.tpl' => 1,
  ),
),false)) {
function content_60f16fb49db171_69213984 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
    <head>
        <meta charset="utf-8" /> <base href="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('site_url');?>
" />
        <title><?php if (is_array($_smarty_tpl->tpl_vars['meta_info']->value) && $_smarty_tpl->tpl_vars['meta_info']->value['title'] != '') {
echo $_smarty_tpl->tpl_vars['meta_info']->value['title'];
} else {
echo $_smarty_tpl->tpl_vars['this']->value->systemsettings->getSettings('META_TITLE');
}?></title>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getCompanyFavIconURL();?>
" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <meta name="description" content="<?php if (is_array($_smarty_tpl->tpl_vars['meta_info']->value) && $_smarty_tpl->tpl_vars['meta_info']->value['description'] != '') {
echo $_smarty_tpl->tpl_vars['meta_info']->value['description'];
} else {
echo $_smarty_tpl->tpl_vars['this']->value->systemsettings->getSettings('META_DESCRIPTION');
}?>" />
        <meta name="keywords" content="<?php if (is_array($_smarty_tpl->tpl_vars['meta_info']->value) && $_smarty_tpl->tpl_vars['meta_info']->value['keywords'] != '') {
echo $_smarty_tpl->tpl_vars['meta_info']->value['keywords'];
} else {
echo $_smarty_tpl->tpl_vars['this']->value->systemsettings->getSettings('META_KEYWORD');
}?>" />
        <?php if (is_array($_smarty_tpl->tpl_vars['meta_info']->value) && is_array($_smarty_tpl->tpl_vars['meta_info']->value['other'])) {?>
            <?php $_smarty_tpl->tpl_vars["meta_other"] = new Smarty_Variable($_smarty_tpl->tpl_vars['meta_info']->value['other'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "meta_other", 0);?>
            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['meta_other']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <meta <?php echo $_smarty_tpl->tpl_vars['meta_other']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['key'];?>
="<?php echo $_smarty_tpl->tpl_vars['meta_other']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['value'];?>
" content="<?php echo $_smarty_tpl->tpl_vars['meta_other']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['content'];?>
" />
            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
        <?php } else { ?>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <?php if ($_smarty_tpl->tpl_vars['this']->value->systemsettings->getSettings('META_OTHER') != '') {?>
                <?php echo $_smarty_tpl->tpl_vars['this']->value->systemsettings->getSettings('META_OTHER');?>

            <?php }?>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_css("bootstrap3/bootstrap.min.css","font-awesome/icons.css");?>

        <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_css("font-awesome/font-awesome.min.css","toastr/toastr.min.css","style.css","media.css");?>

        <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

        <?php echo '<script'; ?>
 type='text/javascript'>
            var site_url = '<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item("site_url");?>
';
        <?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->tpl_vars['this']->value->general->getJSLanguageLables();?>

        <?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js("bootstrap3/bootstrap.min.js");?>

        <?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js("validate/jquery.validate.min.js","validate/additional-methods.min.js","common.js");?>

        <?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js("blockui/jquery.blockUI.min.js","bootbox/bootbox.min.js","toastr/toastr.min.js");?>

    </head>
    <body class="<?php echo $_smarty_tpl->tpl_vars['page_html_class']->value;?>
">
        <?php $_smarty_tpl->tpl_vars["msg_box_style"] = new Smarty_Variable("display:none;", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_style", 0);?>
        <?php $_smarty_tpl->tpl_vars["msg_box_class"] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_class", 0);?>
        <?php $_smarty_tpl->tpl_vars["msg_box_close"] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_close", 0);?>
        <?php $_smarty_tpl->tpl_vars["msg_box_text"] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_text", 0);?>
        <?php if ($_smarty_tpl->tpl_vars['this']->value->session->flashdata('success') != '') {?>
            <?php $_smarty_tpl->tpl_vars["msg_box_style"] = new Smarty_Variable("display:block;", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_style", 0);?>
            <?php $_smarty_tpl->tpl_vars["msg_box_class"] = new Smarty_Variable("alert-success", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_class", 0);?>
            <?php $_smarty_tpl->tpl_vars["msg_box_close"] = new Smarty_Variable("success", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_close", 0);?>
            <?php $_smarty_tpl->tpl_vars["msg_box_text"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->session->flashdata('success'), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_text", 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['this']->value->session->flashdata('failure') != '') {?>   
            <?php $_smarty_tpl->tpl_vars["msg_box_style"] = new Smarty_Variable("display:block;", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_style", 0);?>
            <?php $_smarty_tpl->tpl_vars["msg_box_class"] = new Smarty_Variable("alert-error", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_class", 0);?>
            <?php $_smarty_tpl->tpl_vars["msg_box_close"] = new Smarty_Variable("error", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_close", 0);?>
            <?php $_smarty_tpl->tpl_vars["msg_box_text"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->session->flashdata('failure'), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_text", 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['this']->value->session->flashdata('warning') != '') {?>   
            <?php $_smarty_tpl->tpl_vars["msg_box_style"] = new Smarty_Variable("display:block;", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_style", 0);?>
            <?php $_smarty_tpl->tpl_vars["msg_box_class"] = new Smarty_Variable("alert-warning", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_class", 0);?>
            <?php $_smarty_tpl->tpl_vars["msg_box_close"] = new Smarty_Variable("warning", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_close", 0);?>
            <?php $_smarty_tpl->tpl_vars["msg_box_text"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->session->flashdata('warning'), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_text", 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['this']->value->session->flashdata('info') != '') {?>   
            <?php $_smarty_tpl->tpl_vars["msg_box_style"] = new Smarty_Variable("display:block;", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_style", 0);?>
            <?php $_smarty_tpl->tpl_vars["msg_box_class"] = new Smarty_Variable("alert-info", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_class", 0);?>
            <?php $_smarty_tpl->tpl_vars["msg_box_close"] = new Smarty_Variable("info", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_close", 0);?>
            <?php $_smarty_tpl->tpl_vars["msg_box_text"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->session->flashdata('info'), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "msg_box_text", 0);?>
        <?php }?>
        <div class="errorbox-position" id="var_msg_cnt" style="<?php echo $_smarty_tpl->tpl_vars['msg_box_style']->value;?>
">
            <div class="closebtn-errorbox <?php echo $_smarty_tpl->tpl_vars['msg_box_close']->value;?>
" id="closebtn_errorbox">
                <a href="javascript:void(0);" onClick="Project.closeMessage();"><button class="close" type="button">×</button></a>
            </div>
            <div class="content-errorbox alert <?php echo $_smarty_tpl->tpl_vars['msg_box_class']->value;?>
" id="err_msg_cnt"><?php echo $_smarty_tpl->tpl_vars['msg_box_text']->value;?>
</div>
        </div>
        <div id="top-container">
            <!--top-part start here-->
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:top/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!--top-part End here-->
        </div>
        <div id="midd-container" class="container">
            <!-- middle part start here-->
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['include_script_template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <!-- middle part end here-->
        </div>
        <div id="bott-container">
            <!--bottom link start here-->
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:bottom/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!--bottom part End here-->
        </div>
        <?php if (trim($_smarty_tpl->tpl_vars['this']->value->systemsettings->getSettings('GOOGLE_ANALYTICS')) != '') {?>
            <?php echo '<script'; ?>
 type="text/javascript">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->systemsettings->getSettings('GOOGLE_ANALYTICS');?>

            <?php echo '</script'; ?>
>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

        <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

        <?php echo '<script'; ?>
 type='text/javascript'>
            $(document).ready(function () {
                Project.init();
            });
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
