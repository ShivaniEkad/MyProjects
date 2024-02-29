<?php
/* Smarty version 3.1.28, created on 2021-07-22 08:41:55
  from "C:\xampp\htdocs\Appineers_V4_Web\application\admin\tools\views\api_access_logs_cit_input_params.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60f91333bb6111_92952474',
  'file_dependency' => 
  array (
    '0b402140f1f86c0aa81fdeecea97a9b8f27c66cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Appineers_V4_Web\\application\\admin\\tools\\views\\api_access_logs_cit_input_params.tpl',
      1 => 1626430805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f91333bb6111_92952474 ($_smarty_tpl) {
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
