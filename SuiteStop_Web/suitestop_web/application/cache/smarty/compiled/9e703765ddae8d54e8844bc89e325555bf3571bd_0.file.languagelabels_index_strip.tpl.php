<?php
/* Smarty version 3.1.28, created on 2021-08-20 08:34:08
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/languagelabels/views/languagelabels_index_strip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_611f6900ea8430_38587771',
  'file_dependency' => 
  array (
    '9e703765ddae8d54e8844bc89e325555bf3571bd' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/languagelabels/views/languagelabels_index_strip.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611f6900ea8430_38587771 ($_smarty_tpl) {
?>
<div class="headingfix">
    <!-- Top Header Block -->
    <div class="heading" id="top_heading_fix">
		<!-- Top Strip Title Block -->
        <h3>
            <div class="screen-title">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_LISTING');?>
 :: <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('LANGUAGELABELS_LANGUAGE_LABELS');?>

            </div>        
        </h3>
		<!-- Top Strip Dropdown Block -->
        <div class="header-right-drops">
            
            
        </div>
    </div>
</div>    <?php }
}
