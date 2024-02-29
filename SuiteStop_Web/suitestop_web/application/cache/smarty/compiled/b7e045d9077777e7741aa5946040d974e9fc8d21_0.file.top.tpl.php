<?php
/* Smarty version 3.1.28, created on 2021-07-16 13:38:29
  from "C:\xampp\htdocs\Appineers_V4_Web\application\front\views\top\top.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60f16fb534caf6_68610732',
  'file_dependency' => 
  array (
    'b7e045d9077777e7741aa5946040d974e9fc8d21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Appineers_V4_Web\\application\\front\\views\\top\\top.tpl',
      1 => 1626430805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f16fb534caf6_68610732 ($_smarty_tpl) {
?>
<nav class="navbar navbar-default white-top">
    <div class="container">
       
        <div class="navbar-header">
           
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="navbar-brand logo" href="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('site_url');?>
" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('COMPANY_NAME');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getCompanyLogoURL();?>
"  alt=""></a>
        </div>

       
    </div>

</nav><?php }
}
