<?php
/* Smarty version 3.1.28, created on 2021-08-27 05:28:54
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/views/admin_form_direction.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_6128781668aaa8_41521625',
  'file_dependency' => 
  array (
    '23e45de102abc199bb7feb2aff27f960f1ee5079' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/views/admin_form_direction.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6128781668aaa8_41521625 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['controls_allow']->value == false || $_smarty_tpl->tpl_vars['rm_ctrl_directions']->value == true) {?>
    <input value="Stay" id="ctrl_flow_stay" name="ctrl_flow" type="hidden" />
<?php } else { ?>
    <div class='action-dir-align'>
        <?php if ($_smarty_tpl->tpl_vars['prev_link_allow']->value == true) {?>
            <input value="Prev" id="ctrl_flow_prev" name="ctrl_flow" class="regular-radio" type="radio" <?php if ($_smarty_tpl->tpl_vars['ctrl_flow']->value == 'Prev') {?> checked=true <?php }?> />
            <label for="ctrl_flow_prev">&nbsp;</label><label for="ctrl_flow_prev" class="inline-elem-margin"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_PREV_SHORT');?>
</label>&nbsp;&nbsp;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['next_link_allow']->value == true || $_smarty_tpl->tpl_vars['mode']->value == 'Add') {?>
            <input value="Next" id="ctrl_flow_next" name="ctrl_flow" class="regular-radio" type="radio" <?php if ($_smarty_tpl->tpl_vars['ctrl_flow']->value == 'Next') {?> checked=true <?php }?> />
            <label for="ctrl_flow_next">&nbsp;</label><label for="ctrl_flow_next" class="inline-elem-margin"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_NEXT_SHORT');?>
</label>&nbsp;&nbsp;
        <?php }?>
        <input value="List" id="ctrl_flow_list" name="ctrl_flow" class="regular-radio" type="radio" <?php if ($_smarty_tpl->tpl_vars['ctrl_flow']->value == 'List') {?> checked=true <?php }?> />
        <label for="ctrl_flow_list">&nbsp;</label><label for="ctrl_flow_list" class="inline-elem-margin"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_LIST_SHORT');?>
</label>&nbsp;&nbsp;
        <input value="Stay" id="ctrl_flow_stay" name="ctrl_flow" class="regular-radio" type="radio" <?php if ($_smarty_tpl->tpl_vars['ctrl_flow']->value == '' || $_smarty_tpl->tpl_vars['ctrl_flow']->value == 'Stay') {?> checked=true <?php }?> />
        <label for="ctrl_flow_stay">&nbsp;</label><label for="ctrl_flow_stay" class="inline-elem-margin"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_STAY_SHORT');?>
</label>
    </div>
<?php }?>

<?php }
}
