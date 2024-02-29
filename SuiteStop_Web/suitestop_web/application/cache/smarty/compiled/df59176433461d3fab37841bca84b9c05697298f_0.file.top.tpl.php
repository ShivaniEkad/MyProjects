<?php
/* Smarty version 3.1.28, created on 2021-07-16 13:38:41
  from "C:\xampp\htdocs\Appineers_V4_Web\application\admin\views\top\top.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60f16fc1ba6e53_97877489',
  'file_dependency' => 
  array (
    'df59176433461d3fab37841bca84b9c05697298f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Appineers_V4_Web\\application\\admin\\views\\top\\top.tpl',
      1 => 1626430805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_page_translate.tpl' => 1,
  ),
),false)) {
function content_60f16fc1ba6e53_97877489 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\Appineers_V4_Web\\application\\third_party\\Smarty\\plugins\\function.html_options.php';
$_smarty_tpl->tpl_vars["logo_file_url"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->getCompanyLogoURL(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "logo_file_url", 0);
$_smarty_tpl->tpl_vars["admin_groups"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->getAdminUserGroups(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "admin_groups", 0);
$_smarty_tpl->tpl_vars["total_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->systemsettings->getMenuArray("Top"), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "total_arr", 0);
$_smarty_tpl->tpl_vars["menu_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['total_arr']->value['menu'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "menu_arr", 0);
$_smarty_tpl->tpl_vars["home_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['total_arr']->value['home'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "home_arr", 0);
$_smarty_tpl->tpl_vars["profile_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['total_arr']->value['profile'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "profile_arr", 0);
$_smarty_tpl->tpl_vars["password_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['total_arr']->value['password'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "password_arr", 0);
$_smarty_tpl->tpl_vars["logout_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['total_arr']->value['logout'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "logout_arr", 0);
$_smarty_tpl->tpl_vars["color_code"] = new Smarty_Variable($_smarty_tpl->tpl_vars['total_arr']->value['color_code'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "color_code", 0);
$_smarty_tpl->tpl_vars["notifications"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->general->getNotifications(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "notifications", 0);
$_smarty_tpl->tpl_vars["notifications_active"] = new Smarty_Variable($_smarty_tpl->tpl_vars['notifications']->value['notifications_active'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "notifications_active", 0);
$_smarty_tpl->tpl_vars["notifications_count"] = new Smarty_Variable($_smarty_tpl->tpl_vars['notifications']->value['notifications_count'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "notifications_count", 0);?>


<div class="top-bg <?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_PATTERN_HEAD');?>
" id="logo_template">
    <div class="container-fluid navbar">
        <div class="top-model-view logo">
            <div class="logo-left">
                <a hijacked="yes" href="<?php echo $_smarty_tpl->tpl_vars['home_arr']->value['url'];?>
" class="brand">
                    <?php if ($_smarty_tpl->tpl_vars['logo_file_url']->value != '') {?>
                        <img alt="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('COMPANY_NAME');?>
" class="admin-logo-top" src="<?php echo $_smarty_tpl->tpl_vars['logo_file_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('COMPANY_NAME');?>
">            
                    <?php } else { ?>
                        <div class='brand-logo-icon'></div>
                    <?php }?>
                </a>
            </div>
            
        </div>
        <div class="top-navigation-bar">
            <div class="translate-box-top-menu">
                <?php if ($_smarty_tpl->tpl_vars['this']->value->config->item("ENABLE_PAGE_TRANSLATION") == 1) {?>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin_page_translate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php }?>
            </div>
            <?php if (is_array($_smarty_tpl->tpl_vars['admin_groups']->value) && count($_smarty_tpl->tpl_vars['admin_groups']->value) > 0) {?>
                <?php $_smarty_tpl->tpl_vars["default_group"] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->session->userdata('iGroupId'), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "default_group", 0);?>
                <div class="lang-combo">
                    <span class="lang-box">
                        <select name="topGroupCombo" id="topGroupCombo" class="chosen-select lang-combo">
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['admin_groups']->value,'selected'=>$_smarty_tpl->tpl_vars['default_group']->value),$_smarty_tpl);?>

                        </select>
                    </span>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['this']->value->config->item('MULTI_LINGUAL_PROJECT') == 'Yes') {?>
                <?php $_smarty_tpl->tpl_vars['topDefLang'] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->config->item('DEFAULT_LANG'), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'topDefLang', 0);?>
                <?php $_smarty_tpl->tpl_vars['topPrimeLang'] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->config->item('PRIME_LANG'), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'topPrimeLang', 0);?>
                <?php $_smarty_tpl->tpl_vars['topOtherLang'] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->config->item('OTHER_LANG'), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'topOtherLang', 0);?>
                <?php $_smarty_tpl->tpl_vars['top_lang_data'] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->config->item('LANG_INFO'), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'top_lang_data', 0);?>
                <div class="lang-combo">
                    <span class="lang-box">
                        <select name="topLangCombo" id="topLangCombo" class="chosen-select lang-combo">
                            <option value="<?php echo $_smarty_tpl->tpl_vars['topPrimeLang']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['topDefLang']->value == $_smarty_tpl->tpl_vars['topPrimeLang']->value) {?> selected= true <?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['top_lang_data']->value[$_smarty_tpl->tpl_vars['topPrimeLang']->value]['vLangTitle'];?>

                            </option>
                            <?php if ((is_array($_smarty_tpl->tpl_vars['topOtherLang']->value)) && (count($_smarty_tpl->tpl_vars['topOtherLang']->value) > 0)) {?>
                                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['topOtherLang']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['topOtherLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
" <?php if ($_smarty_tpl->tpl_vars['topDefLang']->value == $_smarty_tpl->tpl_vars['topOtherLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]) {?> selected=true <?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['top_lang_data']->value[$_smarty_tpl->tpl_vars['topOtherLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]]['vLangTitle'];?>
 
                                    </option>
                                <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                            <?php }?> 
                        </select>
                    </span>
                </div>
            <?php }?>
            <div class="top-menu <?php echo $_smarty_tpl->tpl_vars['this']->value->config->item('ADMIN_THEME_PATTERN_LEFT');?>
">
                <ul id="navTopMenu">
                    <?php $_smarty_tpl->tpl_vars["parent_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['menu_arr']->value[0][1], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "parent_arr", 0);?>
                    <?php if (is_array($_smarty_tpl->tpl_vars['menu_arr']->value) && count($_smarty_tpl->tpl_vars['menu_arr']->value) > 0) {?>
                        <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['parent_arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <?php $_smarty_tpl->tpl_vars["child_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['menu_arr']->value[$_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_arr", 0);?>
                            <li id="parent_menu_<?php echo $_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" class="top parent-menu-li">
                                <a hijacked="yes" class="top_link top-parent-menu" href="javascript://" title="<?php echo $_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['label_lang'];?>
"> 
                                    <span class="down">
                                        <i class="icon15 <?php echo $_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icon'];?>
"></i>
                                        <?php echo $_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['label_lang'];?>

                                    </span>
                                    <i class="icon16 icomoon-icon-arrow-down-2"></i>
                                </a>
                                <?php if (is_array($_smarty_tpl->tpl_vars['child_arr']->value) && count($_smarty_tpl->tpl_vars['child_arr']->value) > 0) {?>
                                    <ul class="sub top-menu-<?php echo $_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['code'];?>
 menu-style-list-1" >
                                        <?php
$__section_j_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__section_j'] : false;
$__section_j_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['child_arr']->value[1]) ? count($_loop) : max(0, (int) $_loop));
$__section_j_2_total = $__section_j_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_2_total != 0) {
for ($__section_j_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_2_iteration <= $__section_j_2_total; $__section_j_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                            <?php $_smarty_tpl->tpl_vars["nested_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['menu_arr']->value[$_smarty_tpl->tpl_vars['child_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id']], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "nested_arr", 0);?>
                                            <li class="child-menu-li">
                                                <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['target'];?>
" 
                                                   title="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['label_lang'];?>
" class="top-child-menu <?php echo $_smarty_tpl->tpl_vars['child_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['class'];?>
">
                                                    <span class="down-child icon13 <?php echo $_smarty_tpl->tpl_vars['child_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['icon'];?>
"></span> 
                                                    <?php echo $_smarty_tpl->tpl_vars['child_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['label_lang'];?>

                                                    <?php if (is_array($_smarty_tpl->tpl_vars['nested_arr']->value) && count($_smarty_tpl->tpl_vars['nested_arr']->value) > 0) {?>
                                                        <i class="icon16 icomoon-icon-arrow-down-2 child-arrow"></i>
                                                    <?php }?>
                                                </a>
                                                <?php if (is_array($_smarty_tpl->tpl_vars['nested_arr']->value) && count($_smarty_tpl->tpl_vars['nested_arr']->value) > 0) {?>
                                                    <ul class="nes top-menu-<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['code'];?>
 menu-style-list-4" >
                                                        <?php
$__section_k_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_k']) ? $_smarty_tpl->tpl_vars['__section_k'] : false;
$__section_k_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nested_arr']->value[1]) ? count($_loop) : max(0, (int) $_loop));
$__section_k_3_total = $__section_k_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_3_total != 0) {
for ($__section_k_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_3_iteration <= $__section_k_3_total; $__section_k_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                                                            <li class="nested-menu-li">
                                                                <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['nested_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['nested_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['nested_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['target'];?>
" 
                                                                   title="<?php echo $_smarty_tpl->tpl_vars['nested_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['label_lang'];?>
" class="top-nested-menu <?php echo $_smarty_tpl->tpl_vars['nested_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['class'];?>
">
                                                                    <span class="down-child icon13 <?php echo $_smarty_tpl->tpl_vars['nested_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['icon'];?>
"></span> 
                                                                    <?php echo $_smarty_tpl->tpl_vars['nested_arr']->value[1][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['label_lang'];?>

                                                                </a>
                                                            </li>
                                                        <?php
}
}
if ($__section_k_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_k'] = $__section_k_3_saved;
}
?>
                                                    </ul>
                                                <?php }?>
                                            </li>
                                        <?php
}
}
if ($__section_j_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_2_saved;
}
?>
                                        <?php if ($_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['code'] == 'home') {?>
                                            <li class="child-menu-li">
                                                <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['label_lang'];?>
">
                                                    <span class="down-child icon13 <?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['icon'];?>
"></span>
                                                    <?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['label_lang'];?>

                                                </a>
                                            </li>
                                            <li class="child-menu-li">
                                                <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['label_lang'];?>
" class="fancybox-popup">
                                                    <span class="down-child icon13 <?php echo $_smarty_tpl->tpl_vars['password_arr']->value['icon'];?>
"></span>
                                                    <?php echo $_smarty_tpl->tpl_vars['password_arr']->value['label_lang'];?>

                                                </a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                    <?php if (is_array($_smarty_tpl->tpl_vars['child_arr']->value[2]) && count($_smarty_tpl->tpl_vars['child_arr']->value[2]) > 0) {?>
                                        <ul class="sub top-menu-<?php echo $_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['code'];?>
 menu-style-list-2" >
                                            <?php
$__section_k_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_k']) ? $_smarty_tpl->tpl_vars['__section_k'] : false;
$__section_k_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['child_arr']->value[2]) ? count($_loop) : max(0, (int) $_loop));
$__section_k_4_total = $__section_k_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_4_total != 0) {
for ($__section_k_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_4_iteration <= $__section_k_4_total; $__section_k_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                                                <li class="child-menu-li">
                                                    <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[2][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[2][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[2][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['target'];?>
" 
                                                       title="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[2][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['label_lang'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[2][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['class'];?>
">
                                                        <span class="down-child icon13 <?php echo $_smarty_tpl->tpl_vars['child_arr']->value[2][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['icon'];?>
"></span> 
                                                        <?php echo $_smarty_tpl->tpl_vars['child_arr']->value[2][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['label_lang'];?>

                                                    </a>
                                                </li>
                                            <?php
}
}
if ($__section_k_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_k'] = $__section_k_4_saved;
}
?>
                                        </ul>
                                        <?php if (is_array($_smarty_tpl->tpl_vars['child_arr']->value[3]) && count($_smarty_tpl->tpl_vars['child_arr']->value[3]) > 0) {?>
                                            <ul class="sub top-menu-<?php echo $_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['code'];?>
 menu-style-list-3" >
                                                <?php
$__section_l_5_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_l']) ? $_smarty_tpl->tpl_vars['__section_l'] : false;
$__section_l_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['child_arr']->value[3]) ? count($_loop) : max(0, (int) $_loop));
$__section_l_5_total = $__section_l_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_l'] = new Smarty_Variable(array());
if ($__section_l_5_total != 0) {
for ($__section_l_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] = 0; $__section_l_5_iteration <= $__section_l_5_total; $__section_l_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']++){
?>
                                                    <li class="child-menu-li">
                                                        <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[3][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[3][(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[3][(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['target'];?>
" 
                                                           title="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[3][(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['label_lang'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[3][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['class'];?>
">
                                                            <span class="down-child icon13 <?php echo $_smarty_tpl->tpl_vars['child_arr']->value[3][(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['icon'];?>
"></span> 
                                                            <?php echo $_smarty_tpl->tpl_vars['child_arr']->value[3][(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['label_lang'];?>

                                                        </a>
                                                    </li>
                                                <?php
}
}
if ($__section_l_5_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_l'] = $__section_l_5_saved;
}
?>
                                            </ul>
                                        <?php }?>
                                    <?php }?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['code'] == 'home') {?>
                                    <ul class="sub top-menu-<?php echo $_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['code'];?>
" >
                                        <li class="child-menu-li">
                                            <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['label_lang'];?>
">
                                                <span class="down-child icon13 <?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['icon'];?>
"></span>
                                                <?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['label_lang'];?>

                                            </a>
                                        </li>
                                        <li class="child-menu-li">
                                            <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['label_lang'];?>
" class="fancybox-popup">
                                                <span class="down-child icon13 <?php echo $_smarty_tpl->tpl_vars['password_arr']->value['icon'];?>
"></span>
                                                <?php echo $_smarty_tpl->tpl_vars['password_arr']->value['label_lang'];?>

                                            </a>
                                        </li>
                                    </ul>
                                <?php }?>
                            </li>
                        <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
                    <?php }?>    
                    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['notifications_active'] == 'Y') {?>
                    <li class="top parent-menu top-notification fixed-top-menu-item" id="notification-menu-item">
                        <a hijacked="yes" href="#" class="top_link top-parent-menu-li" >
                            <span class="icon14  icomoon-icon-bell-2" ></span>
                            <?php if ($_smarty_tpl->tpl_vars['notifications']->value['count'] > 0) {?>
                                <span class="top-notification-badge"><?php echo $_smarty_tpl->tpl_vars['notifications']->value['count'];?>
</span>
                            <?php }?>
                        </a>
                        <ul class="sub top-menu- menu-style-list-1 notification-list">
                            <li class="top-notification-heading">
                                <?php if ($_smarty_tpl->tpl_vars['notifications_count']->value == '1') {?>
                                    <?php $_smarty_tpl->tpl_vars["fullTab"] = new Smarty_Variable('selected full-tab', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "fullTab", 0);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['notifications']->value['admin_notifications_active'] == 'Y') {?>
                                    <?php $_smarty_tpl->tpl_vars["hide_desktop"] = new Smarty_Variable('Style="display:none;"', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "hide_desktop", 0);?>
                                    <div class="top-notification-heading-left selected <?php echo $_smarty_tpl->tpl_vars['fullTab']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['notifications_count']->value;?>
>General<a class="viewall" href="<?php echo $_smarty_tpl->tpl_vars['notifications']->value['admin_listing_url'];?>
"><i class="fa fa-arrow-circle-right fa-16"></i></a></div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['notifications']->value['desktop_notifications_active'] == 'Y') {?>
                                    <div class="top-notification-heading-right <?php echo $_smarty_tpl->tpl_vars['fullTab']->value;?>
">Desktop <a class="viewall" href="<?php echo $_smarty_tpl->tpl_vars['notifications']->value['desktop_listing_url'];?>
"><i class="fa fa-arrow-circle-right fa-16"></i></a></div>
                                <?php }?>
                                <div class="clear"></div>
                            </li> 
                            <?php if (is_array($_smarty_tpl->tpl_vars['notifications']->value) && count($_smarty_tpl->tpl_vars['notifications']->value) > 0) {?>
                                <?php if ($_smarty_tpl->tpl_vars['notifications']->value['admin_notifications_active'] == 'Y') {?>
                                    <?php if (count($_smarty_tpl->tpl_vars['notifications']->value['data']) == 0) {?>
                                        <li class="top-notification-content no-not-content">
                                            <a hijacked="yes" href="#" class="view-notifications" >
                                                <span class="down-child icon13 icomoon-icon-error"></span>
                                                <span class="message">No Notifications</span>
                                            </a>
                                        </li>
                                    <?php } else { ?>   
                                        <?php
$_from = $_smarty_tpl->tpl_vars['notifications']->value['data'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_0_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_0_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
                                            <li class="top-notification-content">
                                                <a hijacked="yes" href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
" class="fancybox-popup view-notifications" >
                                                    <span class="<?php echo $_smarty_tpl->tpl_vars['val']->value['icon'];?>
"></span>
                                                    <?php if ($_smarty_tpl->tpl_vars['val']->value['is_read'] == 'No') {?>
                                                        <span class="message"><strong><?php echo $_smarty_tpl->tpl_vars['val']->value['message'];?>
</strong></span>
                                                    <?php } else { ?>
                                                        <span class="message"><?php echo $_smarty_tpl->tpl_vars['val']->value['message'];?>
</span>
                                                    <?php }?>
                                                    <span class="time"><?php echo $_smarty_tpl->tpl_vars['val']->value['time'];?>
</span>
                                                </a>
                                            </li>
                                        <?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_local_item;
}
}
if ($__foreach_val_0_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_item;
}
?>
                                    <?php }?>  
                                <?php }?>    
                                <?php if ($_smarty_tpl->tpl_vars['notifications']->value['desktop_notifications_active'] == 'Y') {?>
                                    <?php if (count($_smarty_tpl->tpl_vars['notifications']->value['desktop']) == 0) {?>
                                    <li class="top-notification-content top-notification-desktop no-not-content" <?php echo $_smarty_tpl->tpl_vars['hide_desktop']->value;?>
 >
                                            <a hijacked="yes" href="#" class="view-notifications" >
                                                <span class="down-child icon13 icomoon-icon-error"></span>
                                                <span class="message">No Notifications</span>
                                            </a>
                                        </li>
                                    <?php } else { ?>    
                                        <?php
$_from = $_smarty_tpl->tpl_vars['notifications']->value['desktop'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_1_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_1_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
                                        <li class="top-notification-content top-notification-desktop" <?php echo $_smarty_tpl->tpl_vars['hide_desktop']->value;?>
 >
                                            <a hijacked="yes" href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
" class="fancybox-popup view-notifications" >
                                                <span class="<?php echo $_smarty_tpl->tpl_vars['val']->value['icon'];?>
"></span>
                                                <span class="message"><?php echo $_smarty_tpl->tpl_vars['val']->value['message'];?>
</span>
                                                <span class="time"><?php echo $_smarty_tpl->tpl_vars['val']->value['time'];?>
</span>
                                            </a>
                                        </li>
                                        <?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_1_saved_local_item;
}
}
if ($__foreach_val_1_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_1_saved_item;
}
?>
                                    <?php }?>
                                <?php }?>    
                            <?php }?> 
                        </ul>
                    </li>
                    
                    <?php }?>
                    <li class="top initials fixed-top-menu-item" id="profile-menu-item">
                        <a hijacked="yes" href="javascript://"  class="top_link top-parent-menu-li" title="Profile"> 
                            <img data-name="<?php echo $_smarty_tpl->tpl_vars['this']->value->session->userdata('vName');?>
" data-color="#fff" class="profile" width="35px" height="35px" data-radius='50' data-char-count='2' data-text-color='<?php echo $_smarty_tpl->tpl_vars['color_code']->value;?>
' data-font-size='40' />
                        </a>
                        <ul class="sub top-menu- menu-style-list-1 initials-list" style="height: auto;">
                            <?php if (is_array($_smarty_tpl->tpl_vars['profile_arr']->value) && count($_smarty_tpl->tpl_vars['menu_arr']->value) > 0) {?>
                                <li class="child-menu-li">
                                    <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['label_lang'];?>
">
                                        <span class="down-child icon13 <?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['icon'];?>
"></span>
                                        <?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['label_lang'];?>

                                    </a>
                                </li>
                            <?php }?>    
                            <?php if (is_array($_smarty_tpl->tpl_vars['password_arr']->value) && count($_smarty_tpl->tpl_vars['menu_arr']->value) > 0) {?>
                                <li class="child-menu-li">
                                    <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['label_lang'];?>
" class="fancybox-popup">
                                        <span class="down-child icon13 <?php echo $_smarty_tpl->tpl_vars['password_arr']->value['icon'];?>
"></span>
                                        <?php echo $_smarty_tpl->tpl_vars['password_arr']->value['label_lang'];?>

                                    </a>
                                </li>
                            <?php }?>    
                            <li class="child-menu-li">
                                <a hijacked="yes" href="javascript://" title="<?php echo $_smarty_tpl->tpl_vars['logout_arr']->value['label_lang'];?>
" class="top-child-menu admin-link-logout"> 
                                    <span class="icon15 icomoon-icon-exit"></span> <?php echo $_smarty_tpl->tpl_vars['logout_arr']->value['label_lang'];?>

                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php }
}
