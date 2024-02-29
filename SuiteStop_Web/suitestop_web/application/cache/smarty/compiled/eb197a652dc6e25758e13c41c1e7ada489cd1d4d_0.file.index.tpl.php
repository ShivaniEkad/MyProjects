<?php
/* Smarty version 3.1.28, created on 2023-09-17 07:20:22
  from "D:\xampp\htdocs\SuiteStop_Web\suitestop_web\application\front\content\views\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_65068c96958765_01614891',
  'file_dependency' => 
  array (
    'eb197a652dc6e25758e13c41c1e7ada489cd1d4d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\SuiteStop_Web\\suitestop_web\\application\\front\\content\\views\\index.tpl',
      1 => 1674813949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65068c96958765_01614891 ($_smarty_tpl) {
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line("FRONT_WELCOME");?>
</div>
    </div>
    <div class="panel-body">
        <div class="col-md-12">
            <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line("FRONT_WELCOME_TO_THE");?>
 <?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('COMPANY_NAME');?>
</h3>            
        </div>
    </div>
</div>

<?php }
}
