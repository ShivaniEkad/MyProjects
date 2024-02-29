<?php
/* Smarty version 3.1.28, created on 2021-08-27 15:18:55
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/ajax_bulk_mail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_6129025f9438b9_15440806',
  'file_dependency' => 
  array (
    '2896fdf987cb9bd3ed9ca76cdee8fbb997ae0823' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/ajax_bulk_mail.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6129025f9438b9_15440806 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['sent_type']->value == 'Groups') {?>
    <label class="form-label span3">Select User(s) <em>*</em> :</label> 
    <div class="form-right-div" id="user_dropdown">
        <?php if (is_array($_smarty_tpl->tpl_vars['email_arr']->value) && count($_smarty_tpl->tpl_vars['email_arr']->value) > 0) {?>
            <select id="vUser" name="vUser[]" multiple="multiple" data-placeholder="Select User(s)" class="chosen-select frm-size-large">
                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['email_arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['email_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['vEmail'];?>
"><?php echo $_smarty_tpl->tpl_vars['email_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['vEmail'];?>
</option>
                <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
            </select>
            <a class="tipR" style="text-decoration: none;" href="javascript://" title="Select All" aria-chosen-select='vUser' aria-chzn-type='select'>
                <span class='silk-icon-arrow-left arrow-image'></span>
            </a>
            <a class="tipR" style="text-decoration: none;" href="javascript://" title="Deselect All" aria-chosen-select='vUser' aria-chzn-type='deselect'>
                <span class="silk-icon-arrow-right arrow-image" style="display: none;"></span>
            </a>
        <?php } else { ?>
            <span class="error">No users present in this group</span>
        <?php }?>
    </div>
    <div class="error-msg-form" ><label class="error" id="vUserErr"></label></div>
<?php } elseif ($_smarty_tpl->tpl_vars['sent_type']->value == 'Modules') {?>
    <label class="form-label span3">Select Email Field<em>*</em> :</label> 
    <div class="form-right-div" id="user_dropdown">
        <?php if (is_array($_smarty_tpl->tpl_vars['email_arr']->value) && count($_smarty_tpl->tpl_vars['email_arr']->value) > 0) {?>
            <select id="vFieldName" name="vFieldName" data-placeholder="Select Email Field" class="chosen-select frm-size-large">
            <?php
$_from = $_smarty_tpl->tpl_vars['email_arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_0_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_0_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_0_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
            <?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_local_item;
}
}
if ($__foreach_val_0_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_item;
}
if ($__foreach_val_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_val_0_saved_key;
}
?>
            </select>
        <?php } else { ?>
            <span class="errormsg">No email fields present in this module listing. Please add any one field to send mail..!</span>
        <?php }?>
    </div>
    <div class="error-msg-form" ><label class="error" id="vFieldNameErr"></label></div>
<?php } else { ?>
    <label class="form-label span3">Enter Email Address <em>*</em> :</label> 
    <div class="form-right-div">
        <textarea title="Please Enter From Name" id="vEmailAddress" name="vEmailAddress" class="elastic frm-size-large"></textarea>
        <a class="tipR" style="text-decoration: none;" href="javascript://" title="Enter multiple email address with (,) seperated.">
            <span class="icomoon-icon-help"></span>
        </a>
    </div>
    <div class="error-msg-form" ><label class="error" id="vEmailAddressErr"></label></div>
<?php }
}
}
