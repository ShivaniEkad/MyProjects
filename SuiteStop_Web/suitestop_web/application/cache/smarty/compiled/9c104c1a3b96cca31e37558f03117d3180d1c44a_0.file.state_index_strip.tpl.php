<?php
/* Smarty version 3.1.28, created on 2021-08-20 09:18:17
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/state_index_strip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_611f7359d0f067_32851291',
  'file_dependency' => 
  array (
    '9c104c1a3b96cca31e37558f03117d3180d1c44a' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/state_index_strip.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611f7359d0f067_32851291 ($_smarty_tpl) {
?>
<div class="headingfix">
    <!-- Top Header Block -->
    <div class="heading" id="top_heading_fix">
		<!-- Top Strip Title Block -->
        <h3>
            <div class="screen-title">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_LISTING');?>
 :: 
                <?php if ($_smarty_tpl->tpl_vars['parent_switch_combo']->value[$_smarty_tpl->tpl_vars['parID']->value] != '') {?>
                    <?php echo $_smarty_tpl->tpl_vars['parent_switch_combo']->value[$_smarty_tpl->tpl_vars['parID']->value];?>
 :: 
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('STATE_STATE');?>

            </div>        
        </h3>
		<!-- Top Strip Dropdown Block -->
        <div class="header-right-drops">
            
            <!-- Parent Module SwitchTo Dropdown -->
            <?php if ($_smarty_tpl->tpl_vars['parMod']->value != '' && $_smarty_tpl->tpl_vars['parID']->value != '') {?>
                
                <?php if ($_smarty_tpl->tpl_vars['parMod']->value == "country") {?>     
                    <div class="frm-back-to frm-list-back">
                        <a hijacked="yes" href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL('tools/country/index');
echo $_smarty_tpl->tpl_vars['extra_hstr']->value;?>
" class="backlisting-link" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->parseLabelMessage('GENERIC_BACK_TO_MODULE_LISTING','#MODULE_HEADING#','COUNTRY_COUNTRY');?>
">
                            <span class="icon16 minia-icon-arrow-left"></span>
                        </a>
                    </div>
                <?php }?>
                <div class="frm-switch-drop frm-list-switch">
                    <?php if (is_array($_smarty_tpl->tpl_vars['parent_switch_combo']->value) && count($_smarty_tpl->tpl_vars['parent_switch_combo']->value) > 0) {?>
                        <?php $_smarty_tpl->tpl_vars["enc_parID"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->getAdminEncodeURL($_smarty_tpl->tpl_vars['parID']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "enc_parID", 0);?>
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->dropdown->display("vParentSwitchPage","vParentSwitchPage","style='width:100%;' aria-switchto-parent='".((string)$_smarty_tpl->tpl_vars['parent_switch_cit']->value['param'])."' class='chosen-select' onchange='return loadAdminModuleListingSwitch(\"".((string)$_smarty_tpl->tpl_vars['mod_enc_url']->value['index'])."\", this.value, \"".((string)$_smarty_tpl->tpl_vars['extra_hstr']->value)."\")'",'','',$_smarty_tpl->tpl_vars['enc_parID']->value);?>

                    <?php }?>
                </div>
            <?php }?>
            
            <!-- Top Detail View Icons -->
            <?php if ($_smarty_tpl->tpl_vars['top_detail_view']->value["exists"] == "1") {?>
                <div class="frm-detail-view">
                    <?php if ($_smarty_tpl->tpl_vars['top_detail_view']->value["flag"] == "1") {?>
                        <a href="javascript://" class="tipR active hide-top-detail-view" title="Show View" id="hide_top_view" aria-module-name="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getMD5EncryptString('DetailView','state');?>
" onclick="return hideShowTopView(this);">
                            <span><i id="top_show_view_content" class="minia-icon-list icon14"></i></span>
                        </a>
                    <?php } else { ?>
                        <a href="javascript://" class="tipR" title="Hide View" id="hide_top_view" aria-module-name="<?php echo $_smarty_tpl->tpl_vars['this']->value->general->getMD5EncryptString('DetailView','state');?>
" onclick="return hideShowTopView(this);">
                            <span><i id="top_show_view_content" class="minia-icon-list icon14"></i></span>
                        </a>
                    <?php }?>
                </div>
            <?php }?>
        </div>
    </div>
</div>    <?php }
}
