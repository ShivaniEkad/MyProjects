<?php
/* Smarty version 3.1.28, created on 2021-07-23 04:12:29
  from "/var/www/html/Appineers_V4_Web/application/admin/dashboard/views/sitemap_strip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60fa41ad25a503_05142985',
  'file_dependency' => 
  array (
    'c0724ce784da31a51a66f9360fbd911ac037b4e4' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/application/admin/dashboard/views/sitemap_strip.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60fa41ad25a503_05142985 ($_smarty_tpl) {
?>
<div class="headingfix">
    <div class="heading" id="top_heading_fix">
        <h3>
            <?php echo $_smarty_tpl->tpl_vars['this']->value->general->replaceDisplayLabel($_smarty_tpl->tpl_vars['this']->value->lang->line("GENERIC_WELLCOME_TO_ADMINPANEL"),"#COMPANY_NAME#",$_smarty_tpl->tpl_vars['this']->value->config->item('COMPANY_NAME'));?>

        </h3>
    </div>
</div><?php }
}
