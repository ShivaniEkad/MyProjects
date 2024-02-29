<?php
/* Smarty version 3.1.28, created on 2021-07-26 12:05:56
  from "/var/www/html/Appineers_V4_Web/application/admin/views/admin_sess_expire_template.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60fea524108933_23242623',
  'file_dependency' => 
  array (
    '5f2c4cb1ede1626219db6fb2f1c399c9f9b21675' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/application/admin/views/admin_sess_expire_template.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60fea524108933_23242623 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['this']->value->systemsettings->getSettings('CPANEL_TITLE');?>
</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <base href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_css("admin/style.css","admin/icons.css","bootstrap/bootstrap.css","bootstrap/main.css","theme/".((string)$_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_DISPLAY'))."/theme.css");?>

        <?php echo $_smarty_tpl->tpl_vars['this']->value->css->add_css("theme/".((string)$_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_DISPLAY'))."/".((string)$_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_PATTERN')),"theme/".((string)$_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_CUSTOMIZE')));?>

        <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

        <?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js("admin/bootstrap/bootstrap.js","admin/misc/cookie/jquery.cookie.js","admin/misc/mouse/jquery.mousewheel.js");?>

        <?php echo '<script'; ?>
 type="text/javascript">
            var admin_url = "<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
";
        <?php echo '</script'; ?>
>
    </head>
    <body>
        <div>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['include_script_template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </div>
        <?php echo $_smarty_tpl->tpl_vars['this']->value->css->css_src();?>

        <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

    </body>
</html>
<?php }
}
