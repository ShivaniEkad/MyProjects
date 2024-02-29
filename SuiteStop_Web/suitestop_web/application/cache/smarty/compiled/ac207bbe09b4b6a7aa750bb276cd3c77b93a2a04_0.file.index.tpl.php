<?php
/* Smarty version 3.1.28, created on 2021-07-22 16:41:18
  from "/var/www/html/Appineers_V4_Web/application/front/content/views/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60f99faed08065_16750459',
  'file_dependency' => 
  array (
    'ac207bbe09b4b6a7aa750bb276cd3c77b93a2a04' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/application/front/content/views/index.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f99faed08065_16750459 ($_smarty_tpl) {
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
