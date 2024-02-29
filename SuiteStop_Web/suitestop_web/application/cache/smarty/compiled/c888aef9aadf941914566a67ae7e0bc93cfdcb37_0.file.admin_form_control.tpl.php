<?php
/* Smarty version 3.1.28, created on 2021-08-27 05:28:54
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/views/admin_form_control.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_612878166a27e8_66898981',
  'file_dependency' => 
  array (
    'c888aef9aadf941914566a67ae7e0bc93cfdcb37' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/views/admin_form_control.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612878166a27e8_66898981 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['controls_allow']->value == false) {?>
    <div class="clear">&nbsp;</div>
<?php }?>
<div class="action-btn-align" id="action_btn_container">
    <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>
        <?php if ($_smarty_tpl->tpl_vars['update_allow']->value == true) {?>
            <input value="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_UPDATE');?>
" name="ctrlupdate" type="submit" id="frmbtn_update" class='btn btn-info'/>&nbsp;&nbsp;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['delete_allow']->value == true) {?>
            <input value="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_DELETE');?>
" name="ctrldelete" type="button" id="frmbtn_delete" class='btn btn-danger' onclick="return deleteAdminRecordData('<?php echo $_smarty_tpl->tpl_vars['enc_id']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['index'];?>
','<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['inline_edit_action'];?>
', '<?php echo $_smarty_tpl->tpl_vars['extra_qstr']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['extra_hstr']->value;?>
');" />&nbsp;&nbsp;
        <?php }?>
    <?php } else { ?>
    <input value="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_SAVE');?>
" name="ctrladd" type="submit" id="frmbtn_add" class='btn btn-info'/>&nbsp;&nbsp;
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['discard_allow']->value == true) {?>
        <input value="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_DISCARD');?>
" name="ctrldiscard" type="button" id="frmbtn_discard" class='btn' onclick="return loadAdminModuleListing('<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['index'];?>
', '<?php echo $_smarty_tpl->tpl_vars['extra_hstr']->value;?>
')">
    <?php }?>
</div>


<?php }
}
