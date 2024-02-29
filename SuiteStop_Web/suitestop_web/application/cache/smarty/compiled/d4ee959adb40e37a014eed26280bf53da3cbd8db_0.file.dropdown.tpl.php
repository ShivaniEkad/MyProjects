<?php
/* Smarty version 3.1.28, created on 2021-08-04 06:16:56
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/views/libraries/dropdown.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_610a30d828d7b9_12310840',
  'file_dependency' => 
  array (
    'd4ee959adb40e37a014eed26280bf53da3cbd8db' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/views/libraries/dropdown.tpl',
      1 => 1626450622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610a30d828d7b9_12310840 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/function.html_options.php';
if ($_smarty_tpl->tpl_vars['with_attributes']->value == 1) {?>
    <?php if ($_smarty_tpl->tpl_vars['options_only']->value == 1) {?>
        <?php if ($_smarty_tpl->tpl_vars['data_type']->value == 'opt_group') {?>
            <?php
$_from = $_smarty_tpl->tpl_vars['data_array']->value;
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
                <?php if (is_array($_smarty_tpl->tpl_vars['val']->value) && count($_smarty_tpl->tpl_vars['val']->value) > 0) {?>
                <optgroup label="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                <?php
$__section_j_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__section_j'] : false;
$__section_j_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['val']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_0_total = $__section_j_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_0_total != 0) {
for ($__section_j_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_0_iteration <= $__section_j_0_total; $__section_j_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                    <?php $_smarty_tpl->tpl_vars["selected_attr"] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "selected_attr", 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['val']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['combo_selected']->value) {?>
                        <?php $_smarty_tpl->tpl_vars["selected_attr"] = new Smarty_Variable('selected="selected"', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "selected_attr", 0);?>
                    <?php }?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['selected_attr']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['val']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attr'];?>
><?php echo $_smarty_tpl->tpl_vars['val']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['val'];?>
</option>
                <?php
}
}
if ($__section_j_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_0_saved;
}
?>
                </optgroup>
                <?php }?>
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
        <?php } else { ?>
            <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data_array']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php $_smarty_tpl->tpl_vars["selected_attr"] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "selected_attr", 0);?>
                <?php if ($_smarty_tpl->tpl_vars['data_array']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['combo_selected']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["selected_attr"] = new Smarty_Variable('selected="selected"', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "selected_attr", 0);?>
                <?php }?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['data_array']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['selected_attr']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['data_array']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attr'];?>
><?php echo $_smarty_tpl->tpl_vars['data_array']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['val'];?>
</option>
            <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
        <?php }?>
    <?php } else { ?>
        <select name="<?php echo $_smarty_tpl->tpl_vars['combo_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['combo_id']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['combo_extra']->value;?>
 data-template=true>
            <?php if ($_smarty_tpl->tpl_vars['data_type']->value == 'opt_group') {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['data_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_1_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_1_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_1_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
                    <?php if (is_array($_smarty_tpl->tpl_vars['val']->value) && count($_smarty_tpl->tpl_vars['val']->value) > 0) {?>
                    <optgroup label="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                    <?php
$__section_j_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__section_j'] : false;
$__section_j_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['val']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_2_total = $__section_j_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_2_total != 0) {
for ($__section_j_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_2_iteration <= $__section_j_2_total; $__section_j_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                        <?php $_smarty_tpl->tpl_vars["selected_attr"] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "selected_attr", 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['val']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['combo_selected']->value) {?>
                            <?php $_smarty_tpl->tpl_vars["selected_attr"] = new Smarty_Variable('selected="selected"', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "selected_attr", 0);?>
                        <?php }?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['selected_attr']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['val']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attr'];?>
><?php echo $_smarty_tpl->tpl_vars['val']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['val'];?>
</option>
                    <?php
}
}
if ($__section_j_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_2_saved;
}
?>
                    </optgroup>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_1_saved_local_item;
}
}
if ($__foreach_val_1_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_1_saved_item;
}
if ($__foreach_val_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_val_1_saved_key;
}
?>
            <?php } else { ?>
                <?php
$__section_i_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__section_i'] : false;
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data_array']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total != 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <?php $_smarty_tpl->tpl_vars["selected_attr"] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "selected_attr", 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['data_array']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['combo_selected']->value) {?>
                        <?php $_smarty_tpl->tpl_vars["selected_attr"] = new Smarty_Variable('selected="selected"', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "selected_attr", 0);?>
                    <?php }?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['data_array']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['selected_attr']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['data_array']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attr'];?>
><?php echo $_smarty_tpl->tpl_vars['data_array']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['val'];?>
</option>
                <?php
}
}
if ($__section_i_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_3_saved;
}
?>
            <?php }?>
        </select>
    <?php }
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['options_only']->value == 1) {?>
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['combo_array']->value,'selected'=>$_smarty_tpl->tpl_vars['combo_selected']->value),$_smarty_tpl);?>

    <?php } else { ?>
        <select name="<?php echo $_smarty_tpl->tpl_vars['combo_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['combo_id']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['combo_extra']->value;?>
>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['combo_array']->value,'selected'=>$_smarty_tpl->tpl_vars['combo_selected']->value),$_smarty_tpl);?>

        </select>
    <?php }
}
}
}
