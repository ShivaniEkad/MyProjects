<?php
/* Smarty version 3.1.28, created on 2021-08-03 11:29:57
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/views/admin_frame_template.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_610928b5c03ad5_03383389',
  'file_dependency' => 
  array (
    '6c44994b2d14e7436ce8a976a82262cbcc8fc7ea' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/views/admin_frame_template.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_template_js.tpl' => 1,
    'file:admin_include_css.tpl' => 1,
    'file:admin_include_js.tpl' => 1,
  ),
),false)) {
function content_610928b5c03ad5_03383389 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <base href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
" />
        <title><?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('CPANEL_TITLE');?>
</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin_template_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tplmode'=>"frame"), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin_include_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['pPage']->value == "true") {?>
            <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_common_src("print");?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_common_src("common");?>

        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['this']->value->general->getJSLanguageLables();?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin_include_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['pPage']->value == "true") {?>
            <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_common_src("print");?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_common_src("common");?>

        <?php }?>
        <?php echo '<script'; ?>
 type='text/javascript'>
            var cus_enc_url_json = $.parseJSON('<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getCustomEncryptURL();?>
');
            var cus_enc_mode_json = $.parseJSON('<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getCustomEncryptMode();?>
');
            var cus_shortcuts_json = $.parseJSON('<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getShortcutsList();?>
');
         <?php echo '</script'; ?>
>
    </head>
    <body class="admin-fancy-body">
        <div id='grid_wrapper' class="grid-fancy-wrapper">
            <div id="ajax-navigate">
                <div id="trmid_template">
                    <?php $_smarty_tpl->tpl_vars["error_class"] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "error_class", 0);?>
                    <?php $_smarty_tpl->tpl_vars["style_val"] = new Smarty_Variable("display:none;", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "style_val", 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['this']->value->session->flashdata('success') != '') {?>
                    <?php $_smarty_tpl->tpl_vars["error_class"] = new Smarty_Variable("alert-success", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "error_class", 0);?>
                    <?php $_smarty_tpl->tpl_vars["style_val"] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "style_val", 0);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['this']->value->session->flashdata('failure') != '') {?>   
                    <?php $_smarty_tpl->tpl_vars["error_class"] = new Smarty_Variable("alert-error", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "error_class", 0);?>
                    <?php $_smarty_tpl->tpl_vars["style_val"] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "style_val", 0);?>
                    <?php }?>    
                    <div class="errorbox-position" id="var_msg_cnt" style="<?php echo $_smarty_tpl->tpl_vars['style_val']->value;?>
">
                        <div class="closebtn-errorbox">
                            <a href="javascript:void(0);" onclick="Project.closeMessage();"><button class="close" type="button">×</button></a>
                        </div>
                        <div class="content-errorbox alert <?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
" id="err_msg_cnt">
                            <?php if ($_smarty_tpl->tpl_vars['this']->value->session->flashdata('success') != '') {?>
                            <?php echo $_smarty_tpl->tpl_vars['this']->value->session->flashdata('success');?>

                            <?php }?>   
                            <?php if ($_smarty_tpl->tpl_vars['this']->value->session->flashdata('failure') != '') {?>   
                            <?php echo $_smarty_tpl->tpl_vars['this']->value->session->flashdata('failure');?>

                            <?php }?>
                        </div>
                    </div>
                    <div id="main_content_div" class="main-content-div">
                        <div class="clearfix content-loader <?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_PATTERN_BODY');?>
" id="content">
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['include_script_template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                        </div>
                        <div class="clearfix content-loader cslide <?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_PATTERN_BODY');?>
" id="content_slide">

                        </div>
                    </div>
                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

            <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

        </div>
    </body>
</html><?php }
}
