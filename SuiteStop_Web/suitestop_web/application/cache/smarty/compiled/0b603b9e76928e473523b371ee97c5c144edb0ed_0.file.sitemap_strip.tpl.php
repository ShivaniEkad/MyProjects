<?php
/* Smarty version 3.1.28, created on 2021-07-16 13:38:43
  from "C:\xampp\htdocs\Appineers_V4_Web\application\admin\dashboard\views\sitemap_strip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60f16fc3272649_55770951',
  'file_dependency' => 
  array (
    '0b603b9e76928e473523b371ee97c5c144edb0ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Appineers_V4_Web\\application\\admin\\dashboard\\views\\sitemap_strip.tpl',
      1 => 1626430804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f16fc3272649_55770951 ($_smarty_tpl) {
?>
<div class="headingfix">
    <div class="heading" id="top_heading_fix">
        <h3>
            <?php echo $_smarty_tpl->tpl_vars['this']->value->general->replaceDisplayLabel($_smarty_tpl->tpl_vars['this']->value->lang->line("GENERIC_WELLCOME_TO_ADMINPANEL"),"#COMPANY_NAME#",$_smarty_tpl->tpl_vars['this']->value->config->item('COMPANY_NAME'));?>

        </h3>
    </div>
</div><?php }
}
