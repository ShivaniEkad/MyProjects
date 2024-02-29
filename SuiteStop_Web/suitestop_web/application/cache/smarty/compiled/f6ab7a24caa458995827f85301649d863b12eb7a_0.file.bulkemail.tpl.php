<?php
/* Smarty version 3.1.28, created on 2021-08-23 05:31:00
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/bulkemail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_6123329402fde7_02286335',
  'file_dependency' => 
  array (
    'f6ab7a24caa458995827f85301649d863b12eb7a' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/admin/tools/views/bulkemail.tpl',
      1 => 1626450606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bulkemail_strip.tpl' => 1,
  ),
),false)) {
function content_6123329402fde7_02286335 ($_smarty_tpl) {
if (!is_callable('smarty_block_javascript')) require_once '/var/www/html/Appineers_V4_Web/Appineers_V4/application/third_party/Smarty/plugins/block.javascript.php';
if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->clean_js();?>

<?php }?>  
<div class='custom-bulkemail-container'>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:bulkemail_strip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="ajax_content_div" class="ajax-content-div top-frm-spacing">
        <div id="ajax_qLoverlay"></div>
        <div id="ajax_qLbar"></div>
        <div id="scrollable_content" class="scrollable-content top-block-spacing">
            <div id="bulkmail" class="frm-elem-block frm-stand-view">
                <form name="frmbulkmailadd" id="frmbulkmailadd" action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value['bulkmail_action'];?>
" method="post"  enctype="multipart/form-data">
                    <input type="hidden" id="mode" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['this']->value->input->get_post('mode');?>
">
                    <div class="main-content-block" id="main_content_block">
                        <div style="width:98%" class="frm-block-layout pad-calc-container">
                            <div class="box gradient <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_content_row'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_border_view'];?>
">
                                <div class="title <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_titles_bar'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_BULK_EMAIL');?>
</h4></div>
                                <div class="content <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_label_align'];?>
">
                                    <div class="form-row row-fluid">
                                        <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_SEND_TO');?>
 <em>*</em> :</label> 
                                        <div class="form-right-div">
                                            <?php if (is_array($_smarty_tpl->tpl_vars['db_email']->value) && count($_smarty_tpl->tpl_vars['db_email']->value) > 0) {?>
                                                <select id="vSendTo" name="vSendTo" class="frm-size-large  chosen-select">
                                                    <optgroup label="Other">
                                                        <option selected="selected" value="Other">Other</option>
                                                    </optgroup>
                                                    <!-- <?php
$_from = $_smarty_tpl->tpl_vars['db_email']->value;
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
                                                        <optgroup label="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                                                            <?php $_smarty_tpl->tpl_vars["innerArr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['v']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "innerArr", 0);?>
                                                            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['innerArr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                                <option value="Grp@@<?php echo $_smarty_tpl->tpl_vars['innerArr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Id'];?>
"><?php echo $_smarty_tpl->tpl_vars['innerArr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Val'];?>
</option>
                                                            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                                        </optgroup>
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
?> -->
                                                     <optgroup label="Modules">
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['db_email_custom']->value;
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
                                                        <option value="Custom@@<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['val'];?>
</option>
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
                                                    </optgroup>


                                                    <?php if (is_array($_smarty_tpl->tpl_vars['db_module']->value) && count($_smarty_tpl->tpl_vars['db_module']->value) > 0) {?>
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['db_module']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_2_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_2_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_2_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_2_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                                                            <optgroup label="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                                                                <?php
$_from = $_smarty_tpl->tpl_vars['v']->value;
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
                                                                    <option value="Mod@@<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
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
                                                            </optgroup>
                                                        <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_local_item;
}
}
if ($__foreach_v_2_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_item;
}
if ($__foreach_v_2_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_2_saved_key;
}
?>
                                                    <?php }?>
                                                </select>
                                            <?php } else { ?>
                                                <span class="error"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_NO_GROUP_PRESENT');?>
</span>
                                            <?php }?>
                                        </div>
                                        <div class="error-msg-form" ><label class="error" id="vSendToErr"></label></div>
                                    </div>
                                    <div class="form-row row-fluid" id="div_user">
                                        <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_ENTER_EMAIL_ADDRESS');?>
 <em>*</em> :</label> 
                                        <div class="form-right-div">
                                            <textarea title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_PLEASE_ENTER_FROM_NAME');?>
" id="vEmailAddress" name="vEmailAddress" class="elastic frm-size-large" ></textarea>
                                            <a class="tipR" style="text-decoration: none;" href="javascript://" oldtitle="Enter multiple email address with (,) seperated." title="Enter multiple email address with (,) seperated." aria-describedby="ui-tooltip-2">
                                                <span class="icomoon-icon-help"></span>
                                            </a>
                                        </div>
                                        <div class="error-msg-form" ><label class="error" id="vEmailAddressErr"></label></div>
                                    </div>
                                    <div class="form-row row-fluid">
                                        <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_EMAIL_SUBJECT');?>
 <em>*</em> :</label> 
                                        <div class="form-right-div">
                                            <input type="text" class="frm-size-large"  title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_PLEASE_ENTER_EMAIL_SUBJECT');?>
" id="vEmailSubject" value="" name="vEmailSubject">
                                        </div>
                                        <div class="error-msg-form" ><label class="error" id="vEmailSubjectErr"></label></div>
                                    </div>
                                    <div class="form-row row-fluid">
                                        <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_FROM_EMAIL');?>
 <em>*</em> :</label> 
                                        <div class="form-right-div">
                                            <input type="text" class="frm-size-large" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_PLEASE_ENTER_FROM_EMAIL');?>
" id="vFromEmail" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL_ADMIN']->value;?>
" name="vFromEmail" readonly="readonly">
                                        </div>
                                        <div class="error-msg-form" ><label class="error" id="vFromEmailErr"></label></div>
                                    </div>
                                    <div class="form-row row-fluid">
                                        <label class="form-label span3"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_EMAIL_TEMPLATE');?>
 <em>*</em> :</label> 
                                        <div class="form-right-div">
                                            <?php if (is_array($_smarty_tpl->tpl_vars['email_temp_data']->value) && count($_smarty_tpl->tpl_vars['email_temp_data']->value) > 0) {?>
                                                <select id="vEmailTemplate" name="vEmailTemplate" class="frm-size-large  chosen-select">
                                                    <option value="">Other</option>
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['email_temp_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_em_val_4_saved_item = isset($_smarty_tpl->tpl_vars['em_val']) ? $_smarty_tpl->tpl_vars['em_val'] : false;
$__foreach_em_val_4_saved_key = isset($_smarty_tpl->tpl_vars['em_key']) ? $_smarty_tpl->tpl_vars['em_key'] : false;
$_smarty_tpl->tpl_vars['em_val'] = new Smarty_Variable();
$__foreach_em_val_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_em_val_4_total) {
$_smarty_tpl->tpl_vars['em_key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['em_key']->value => $_smarty_tpl->tpl_vars['em_val']->value) {
$__foreach_em_val_4_saved_local_item = $_smarty_tpl->tpl_vars['em_val'];
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['em_val']->value['vEmailCode'];?>
"><?php echo $_smarty_tpl->tpl_vars['em_val']->value['vEmailTitle'];?>
</option>
                                                        <?php
$_smarty_tpl->tpl_vars['em_val'] = $__foreach_em_val_4_saved_local_item;
}
}
if ($__foreach_em_val_4_saved_item) {
$_smarty_tpl->tpl_vars['em_val'] = $__foreach_em_val_4_saved_item;
}
if ($__foreach_em_val_4_saved_key) {
$_smarty_tpl->tpl_vars['em_key'] = $__foreach_em_val_4_saved_key;
}
?>
                                                </select>
                                            <?php }?>
                                        </div>
                                    </div>
                                    <div id="templateVars">
                                    </div>
                                    <div id="div_editor" class="form-row row-fluid">
                                        <span><textarea title="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_EMAIL_CONTENT');?>
" id="vEmailContent" value="" name="vEmailContent" style="width:100%;min-height:300px;"></textarea></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="frm-bot-btn <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_action_bar'];?>
 <?php echo $_smarty_tpl->tpl_vars['rl_theme_arr']->value['frm_gener_action_btn'];?>
">
                            <div class="action-btn-align">
                                <input value="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_SEND_MAIL');?>
" name="ctrladd" type="submit" class='btn btn-info' onclick="return Project.modules.bulkmail.getValidateSystemEmail()"/>&nbsp;&nbsp;
                                <input type="button" value="Discard" class='btn' onclick="loadAdminSiteMapPage()">
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('javascript', array()); $_block_repeat=true; echo smarty_block_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
                                               
    var $bulkmail_sendto = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["bulkmail_sendto"];?>
';
    var $bulkmail_variables = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;
echo $_smarty_tpl->tpl_vars['mod_enc_url']->value["bulkmail_variables"];?>
';
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>
 
<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js('admin/forms/tinymce/tinymce.min.js','admin/admin/js_bulk_mail.js');?>

<?php if ($_smarty_tpl->tpl_vars['this']->value->input->is_ajax_request()) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->js->js_src();?>

<?php }?> <?php }
}
