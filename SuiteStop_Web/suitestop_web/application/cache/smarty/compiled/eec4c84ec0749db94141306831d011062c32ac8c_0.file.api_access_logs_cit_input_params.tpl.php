<?php
/* Smarty version 3.1.28, created on 2021-07-23 11:39:15
  from "/var/www/html/Appineers_V4_Web/application/admin/tools/views/api_access_logs_cit_input_params.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60faaa636f2df3_98208297',
  'file_dependency' => 
  array (
    'eec4c84ec0749db94141306831d011062c32ac8c' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/application/admin/tools/views/api_access_logs_cit_input_params.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60faaa636f2df3_98208297 ($_smarty_tpl) {
?>
<div class="headingfix">
    <div class="heading" id="top_heading_fix">
        <h3>
            <div class="screen-title">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_VIEW');?>
 :: <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('API_ACCESS_LOG_API_ACCESS_LOG');?>

            </div>
        </h3>
        <div class="header-right-btns"></div>
    </div>
</div>
<div id="ajax_content_div" class="ajax-content-div top-frm-spacing" >
    <div id="scrollable_content" class="scrollable-content top-block-spacing">
        <div style="width:98%;margin-bottom: 30px;margin-top: 20px;" class="frm-block-layout" >
            <pre><?php echo json_encode($_smarty_tpl->tpl_vars['data']->value['input_params'],JSON_PRETTY_PRINT);?>
</pre>
        </div>
    </div>
</div>
<?php }
}
