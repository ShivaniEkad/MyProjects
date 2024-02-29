<?php
/* Smarty version 3.1.28, created on 2021-08-03 11:29:35
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/dashboard/views/sitemap_strip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_6109289fce5896_90183253',
  'file_dependency' => 
  array (
    'a7efe173d7cd158f11d241632ec448e2f2868c6d' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/dashboard/views/sitemap_strip.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6109289fce5896_90183253 ($_smarty_tpl) {
?>
<div class="headingfix">
    <div class="heading" id="top_heading_fix">
        <h3>
            <?php echo $_smarty_tpl->tpl_vars['this']->value->general->replaceDisplayLabel($_smarty_tpl->tpl_vars['this']->value->lang->line("GENERIC_WELLCOME_TO_ADMINPANEL"),"#COMPANY_NAME#",$_smarty_tpl->tpl_vars['this']->value->config->item('COMPANY_NAME'));?>

        </h3>
    </div>
</div><?php }
}
