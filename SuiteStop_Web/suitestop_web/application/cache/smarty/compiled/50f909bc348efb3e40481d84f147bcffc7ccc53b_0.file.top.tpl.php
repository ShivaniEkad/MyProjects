<?php
/* Smarty version 3.1.28, created on 2023-09-17 07:20:22
  from "D:\xampp\htdocs\SuiteStop_Web\suitestop_web\application\front\views\top\top.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_65068c9681ca24_30685367',
  'file_dependency' => 
  array (
    '50f909bc348efb3e40481d84f147bcffc7ccc53b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\SuiteStop_Web\\suitestop_web\\application\\front\\views\\top\\top.tpl',
      1 => 1674813949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65068c9681ca24_30685367 ($_smarty_tpl) {
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
