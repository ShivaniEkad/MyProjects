<?php
/* Smarty version 3.1.28, created on 2021-08-24 08:06:04
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/general/views/navigation_index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_6124a86c342599_96393364',
  'file_dependency' => 
  array (
    '8a0289aeda67da1f6f9398713f2183cdf021e654' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/general/views/navigation_index.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6124a86c342599_96393364 ($_smarty_tpl) {
?>
<div class="box" style="">
    <div class="title">
        <h4>
            <span><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_NAVIGATION_LOG');?>
 &nbsp;

                <?php if (($_smarty_tpl->tpl_vars['admin_user']->value == "Yes" && is_array($_smarty_tpl->tpl_vars['user_data']->value) && count($_smarty_tpl->tpl_vars['user_data']->value) > 0)) {?>
                    <select name="userCombo" id="userCombo" onchange='loadNavigationLogPrint()' class='navigation-user-flush-combo'>
                        <?php
$_from = $_smarty_tpl->tpl_vars['user_data']->value;
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['iAdminId'];?>
" <?php if ($_smarty_tpl->tpl_vars['user_id']->value == $_smarty_tpl->tpl_vars['val']->value['iAdminId']) {?>selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['vName'];?>
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
                <?php }?>

                <select name="navigationCombo" id="navigationCombo" onchange="loadNavigationLogPrint()" class='navigation-combo'>
                    <?php
$_from = $_smarty_tpl->tpl_vars['data_log_arr']->value;
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
                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['range']->value == $_smarty_tpl->tpl_vars['key']->value) {?>selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
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
                </select>&nbsp;
                <select name="actionCombo" id="actionCombo" onchange="loadNavigationLogPrint()" class='navigation-action-combo'>
                    <option value="All" <?php if ($_smarty_tpl->tpl_vars['action']->value == 'All') {?>selected=true<?php }?>>All</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['data_action_arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_2_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_2_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_2_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_2_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['action']->value == $_smarty_tpl->tpl_vars['key']->value) {?>selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_2_saved_local_item;
}
}
if ($__foreach_val_2_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_2_saved_item;
}
if ($__foreach_val_2_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_val_2_saved_key;
}
?>   
                </select> &nbsp;
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_FLUSH');?>
&nbsp;
                <select name="flushCombo" id="flushCombo" class='navigation-user-flush-combo'>
                    <?php
$_from = $_smarty_tpl->tpl_vars['data_flush_arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_3_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_3_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_3_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_3_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?> 
                        <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_3_saved_local_item;
}
}
if ($__foreach_val_3_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_3_saved_item;
}
if ($__foreach_val_3_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_val_3_saved_key;
}
?>
                </select>
                <div class="btn btn-primary" onclick="loadFlushLogPrint()">
                    Go
                </div>
            </span> 
            <span class="nv-minimize-log">
                <span class="min" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_HIDE_NAVIGATION_LOG');?>
"></span>
            </span>
        </h4>
    </div>
    <div class="content noPad" style="display: block;">    
    <?php if ((!is_array($_smarty_tpl->tpl_vars['db_navig_data']->value) || count($_smarty_tpl->tpl_vars['db_navig_data']->value) == 0)) {?>
        <div class="alert alert-error center" style="width:96%">
            No results found.
        </div>
    <?php } else { ?>
        <table class="responsive table table-bordered display">
            <thead>
                <tr>
                    <th style="display:table-cell">#</th>
                    <th width="25%"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_MENU');?>
</th>
                    <th width="42%"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_NAVIGATION');?>
</th>
                    <th width="15%"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_ACTION');?>
</th>
                    <th width="15%"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_TIMESTAMP');?>
</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['db_navig_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_4_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_4_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_4_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_4_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value % 2 == 0) {?>
                        <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable('odd', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'class', 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable('even', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'class', 0);?>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars["row_no"] = new Smarty_Variable($_smarty_tpl->tpl_vars['key']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "row_no", 0);?>
                    <tr class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
                        <td style="display:table-cell"><?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['vMainMenu'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['val']->value['eNavigAction'] == "Deleted") {?>
                                <div class='errormsg'><?php echo $_smarty_tpl->tpl_vars['val']->value['vSubMenu'];?>
 &nbsp; >> &nbsp; <?php echo $_smarty_tpl->tpl_vars['val']->value['vRecordName'];?>
</div>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['val']->value['eNavigType'] == "Form") {?>
                                    <a href='<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
#<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['val']->value["vSupQString"]);?>
' title="<?php echo $_smarty_tpl->tpl_vars['val']->value['vRecordName'];?>
" ><?php echo $_smarty_tpl->tpl_vars['val']->value['vSubMenu'];?>
</a> &nbsp; >> &nbsp; 
                                    <a href='<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
#<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['val']->value["vNavigQString"]);?>
' title="<?php echo $_smarty_tpl->tpl_vars['val']->value['vSubMenu'];?>
" ><?php echo $_smarty_tpl->tpl_vars['val']->value['vRecordName'];?>
</a>
                                <?php } else { ?>
                                    <a href='<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
#<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['val']->value["vNavigQString"]);?>
' title="<?php echo $_smarty_tpl->tpl_vars['val']->value['vSubMenu'];?>
" ><?php echo $_smarty_tpl->tpl_vars['val']->value['vSubMenu'];?>
</a>
                                <?php }?>
                            <?php }?>
                        </td>
                        <td> 
                            <?php if ($_smarty_tpl->tpl_vars['val']->value['eNavigAction'] == "Deleted") {?>
                                <div class='errormsg'><?php echo $_smarty_tpl->tpl_vars['val']->value['eNavigAction'];?>
</div>
                            <?php } else { ?>
                               <?php echo $_smarty_tpl->tpl_vars['val']->value['eNavigAction'];?>

                            <?php }?>
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['this']->value->general->navigationDateTime($_smarty_tpl->tpl_vars['val']->value['dTimeStamp']);?>

                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_4_saved_local_item;
}
}
if ($__foreach_val_4_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_4_saved_item;
}
if ($__foreach_val_4_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_val_4_saved_key;
}
?>   
            </tbody>
        </table>
     <?php }?>
    </div>
</div>

<?php }
}
