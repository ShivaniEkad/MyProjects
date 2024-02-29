<?php
/* Smarty version 3.1.28, created on 2021-08-20 06:25:07
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/basic_appineers_master/views/feedback_management_add_strip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_611f4ac3582868_80559658',
  'file_dependency' => 
  array (
    '46f69311ca351df2e4a08b6f3adeade853b14732' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/basic_appineers_master/views/feedback_management_add_strip.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611f4ac3582868_80559658 ($_smarty_tpl) {
?>
<!-- Module Form Page -->
<div class="headingfix">
    <div class="heading" id="top_heading_fix">
        <!-- Top Strip Title Block -->
        <h3>
            <div class="screen-title">
                <?php $_smarty_tpl->tpl_vars["mod_label_text"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->getDisplayLabel("Generic",$_smarty_tpl->tpl_vars['mode']->value,"label"), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "mod_label_text", 0);?>
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line($_smarty_tpl->tpl_vars['mod_label_text']->value);?>
 :: <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('FEEDBACK_MANAGEMENT_FEEDBACK_MANAGEMENT');?>

                <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update' && $_smarty_tpl->tpl_vars['recName']->value != '') {?>
                    :: <?php echo $_smarty_tpl->tpl_vars['recName']->value;?>
 
                <?php }?>
            </div>
        </h3>
        <!-- Top Strip Buttons Block -->
        <div class="header-right-btns">
            <!-- BackLink Icon -->
            <?php if ($_smarty_tpl->tpl_vars['backlink_allow']->value == true) {?>
                <div class="frm-back-to">
                    <a hijacked="yes" href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['index'];
echo $_smarty_tpl->tpl_vars['extra_hstr']->value;?>
"class="backlisting-link" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_BACK_TO_MODULE_LISTING','#MODULE_HEADING#','FEEDBACK_MANAGEMENT_FEEDBACK_MANAGEMENT');?>
">
                        <span class="icon16 minia-icon-arrow-left"></span>
                    </a>
                </div>
            <?php }?>
            <!-- Next Button -->
            <?php if ($_smarty_tpl->tpl_vars['next_link_allow']->value == true) {?>
                <div class="frm-next-rec">
                    <a hijacked="yes" title="<?php echo $_smarty_tpl->tpl_vars['next_prev_records']->value['next']['val'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['add'];?>
|mode|<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value['Update'];?>
|id|<?php echo $_smarty_tpl->tpl_vars['next_prev_records']->value['next']['enc_id'];
echo $_smarty_tpl->tpl_vars['extra_hstr']->value;?>
" class='btn next-btn'>
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_NEXT_SHORT');?>
 <span class='icon12 icomoon-icon-arrow-right'></span>
                    </a>
                </div>
            <?php }?>
            <!-- SwitchTo Dropdown -->
            <?php if ($_smarty_tpl->tpl_vars['switchto_allow']->value == true) {?>
                <div class="frm-switch-drop">
                     <?php if (is_array($_smarty_tpl->tpl_vars['switch_combo']->value) && count($_smarty_tpl->tpl_vars['switch_combo']->value) > 0) {?>
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display('vSwitchPage',"vSwitchPage","style='width:100%;' aria-switchto-self='".((string)$_smarty_tpl->tpl_vars['switch_cit']->value['param'])."' class='chosen-select' onchange='return loadAdminModuleAddSwitchPage(\"".((string)$_smarty_tpl->tpl_vars['mod_enc_url']->value['add'])."\",this.value, \"".((string)$_smarty_tpl->tpl_vars['extra_hstr']->value)."\")' ",'','',$_smarty_tpl->tpl_vars['enc_id']->value);?>

                    <?php }?>
                </div>
            <?php }?>
            <!-- Previous Button -->
            <?php if ($_smarty_tpl->tpl_vars['prev_link_allow']->value == true) {?>  
                <div class="frm-prev-rec">
                    <a hijacked="yes" title="<?php echo $_smarty_tpl->tpl_vars['next_prev_records']->value['prev']['val'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['add'];?>
|mode|<?php echo $_smarty_tpl->tpl_vars['mod_enc_mode']->value['Update'];?>
|id|<?php echo $_smarty_tpl->tpl_vars['next_prev_records']->value['prev']['enc_id'];
echo $_smarty_tpl->tpl_vars['extra_hstr']->value;?>
" class='btn prev-btn'>
                        <span class='icon12 icomoon-icon-arrow-left'></span> <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_PREV_SHORT');?>

                    </a>            
                </div>
            <?php }?>
            
            
            <div class="clear"></div>
        </div>
        <span style="display:none;position:inherit;" id="ajax_lang_loader"><i class="fa fa-refresh fa-spin-light fa-2x fa-fw"></i></span>
    </div>
</div><?php }
}
