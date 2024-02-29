<?php
/* Smarty version 3.1.28, created on 2021-08-23 06:03:41
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/general/views/error_index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_61233a3d67c9e6_42043032',
  'file_dependency' => 
  array (
    '29e77b82988112b34eb10a02e71788a2634e97ea' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/general/views/error_index.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61233a3d67c9e6_42043032 ($_smarty_tpl) {
?>
<div class="box" style="display:none">
    <div class="title">
        <h4>
            <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_DATABASE_ERRORS_OCCURRED');?>

            <span class="error-minimize-log">
                <span class="min" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_HIDE_DB_QUERIES_LOG');?>
"></span>
            </span>
        </h4>
    </div>
    <div class="content noPad" style="display: block;">
        <?php if ($_smarty_tpl->tpl_vars['file_found']->value == '1') {?>
        <table class="responsive table table-bordered display ">
            <thead>
                <tr>
                    <th style="display:table-cell"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_DB_QUERY');?>
</th>
                    <th width="15%"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_FROM_IP');?>
</th>
                </tr>
            </thead>
            <tbody id="error_log_block">
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['error_log_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            </tbody>
        </table>
        <?php } else { ?>
            <div class="errormsg" align="center" style="height:50px;"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_QUERY_LOG_FILE_NOT_FOUND');?>
.!</div>
        <?php }?>
    </div>
</div><?php }
}
