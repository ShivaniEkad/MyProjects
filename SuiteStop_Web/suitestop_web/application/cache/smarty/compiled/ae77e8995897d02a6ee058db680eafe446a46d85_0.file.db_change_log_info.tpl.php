<?php
/* Smarty version 3.1.28, created on 2021-08-30 04:54:57
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/notifications/views/db_change_log_info.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_612c64a1024a73_87223865',
  'file_dependency' => 
  array (
    'ae77e8995897d02a6ee058db680eafe446a46d85' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/notifications/views/db_change_log_info.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612c64a1024a73_87223865 ($_smarty_tpl) {
?>
<div class="headingfix">
    <div class="heading" id="top_heading_fix">
        <h3>
            <div class="screen-title">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_VIEW');?>
 :: <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('DB_CHANGE_LOG_DB_CHANGE_LOG');?>

            </div>
        </h3>
        <div class="header-right-btns"></div>
    </div>
</div>
<div id="ajax_content_div" class="ajax-content-div top-frm-spacing" >
    <div id="scrollable_content" class="scrollable-content top-block-spacing">
        <?php if (is_array($_smarty_tpl->tpl_vars['db_log']->value) && count($_smarty_tpl->tpl_vars['db_log']->value) > 0) {?>
        <div class="box">
            <div class="title">
                <h4>
                    <span class="icon12 icomoon-icon-equalizer-2"></span>
                    <span>Table :: <?php echo $_smarty_tpl->tpl_vars['db_log']->value['vTableName'];?>
 
                </h4>
            </div>
            <div class="box" style="padding-left:25px">
                <h2>  
                    <span>Title :: <?php echo $_smarty_tpl->tpl_vars['db_log']->value['vEntityName'];?>
 </span>
                </h2>
                <h2>
        
                    <span> Performed By :: <?php echo $_smarty_tpl->tpl_vars['db_log']->value['vLoggedName'];?>
 </span>
                </h2>
                <h2>
                    <span> Operation :: <?php echo $_smarty_tpl->tpl_vars['db_log']->value['eOperation'];?>
 </span>
                </h2>
            </div>
            <div class="content">
                <?php if ($_smarty_tpl->tpl_vars['db_log']->value['eOperation'] == 'Added' || $_smarty_tpl->tpl_vars['db_log']->value['eOperation'] == 'Deleted') {?>
                <table  class="responsive table table-bordered">
                    <thead>    
                        <tr>
                            <th width='5%'>#</th>
                            <th width='25%'>Field Name</th>
                            <th width='30%'>Value</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->tpl_vars['db_log']->value['tFieldData'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_0_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                        <tr>
                            <td></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</td>
                        </tr>
                        <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
if ($__foreach_v_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_0_saved_key;
}
?>
                    </tbody>
                </table>    
                <?php } elseif ($_smarty_tpl->tpl_vars['db_log']->value['eOperation'] == 'Modified') {?>
                <table  class="responsive table table-bordered">
                    <thead>    
                        <tr>
                            <th width='5%'>#</th>
                            <th width='25%'>Field Name</th>
                            <th width='30%'>Value</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php
$_from = $_smarty_tpl->tpl_vars['db_log']->value['tFieldData'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_1_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_1_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_1_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                        <tr>
                            <td></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</td>
                        </tr>
                        <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
if ($__foreach_v_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_1_saved_key;
}
?>

                    </tbody>
                </table>   
                <?php } else { ?>
                No Operation Found.
                <?php }?>
            </div>
        </div>
        <?php } else { ?>
        <div align="center" class="text-error">
            No DB log added yet.
        </div>
        <?php }?>
    </div>
</div>
<?php }
}
