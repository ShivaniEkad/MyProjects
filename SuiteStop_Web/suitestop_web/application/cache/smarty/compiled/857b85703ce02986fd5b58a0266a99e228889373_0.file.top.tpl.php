<?php
/* Smarty version 3.1.28, created on 2021-07-22 16:41:39
  from "/var/www/html/Appineers_V4_Web/application/webservice/views/top/top.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60f99fc35403c9_31255485',
  'file_dependency' => 
  array (
    '857b85703ce02986fd5b58a0266a99e228889373' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/application/webservice/views/top/top.tpl',
      1 => 1626450624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f99fc35403c9_31255485 ($_smarty_tpl) {
?>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url();?>
" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('COMPANY_NAME');?>
"><?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('COMPANY_NAME');?>
</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"></div>
    </div>
</nav><?php }
}
