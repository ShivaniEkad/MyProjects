<?php
/* Smarty version 3.1.28, created on 2021-08-02 10:15:50
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/webservice/views/top/top.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_6107c5d6da6c96_97219019',
  'file_dependency' => 
  array (
    'd6dddbac4b73f5b2e3f7f8f35d7c8ad9300710fd' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/webservice/views/top/top.tpl',
      1 => 1626450624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6107c5d6da6c96_97219019 ($_smarty_tpl) {
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
