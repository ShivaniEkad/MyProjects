<?php
/* Smarty version 3.1.28, created on 2021-07-16 13:38:43
  from "C:\xampp\htdocs\Appineers_V4_Web\application\admin\dashboard\views\sitemap.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_60f16fc308d530_82977290',
  'file_dependency' => 
  array (
    '4066a4eff115ee7ae4d143dfafd4d6159cf91cfb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Appineers_V4_Web\\application\\admin\\dashboard\\views\\sitemap.tpl',
      1 => 1626430804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sitemap_strip.tpl' => 1,
  ),
),false)) {
function content_60f16fc308d530_82977290 ($_smarty_tpl) {
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
$_smarty_tpl->tpl_vars["parent_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['menu_arr']->value[0], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "parent_arr", 0);?>
<div class="contentwrapper custom-sitemap-container">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sitemap_strip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="ajax_content_div" class="ajax-content-div row-fluid home-page-boxes">
        <div id="ajax_qLoverlay"></div>
        <div id="ajax_qLbar"></div>
        <div id="scrollable_content" class="scrollable-content">
            <div class="sitemap-blocks pad-calc-container">
                <?php $_smarty_tpl->tpl_vars["close_map_block"] = new Smarty_Variable('1', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "close_map_block", 0);?>
                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['parent_arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <?php $_smarty_tpl->tpl_vars["child_arr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['menu_arr']->value[$_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "child_arr", 0);?>
                    <?php $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "k", 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['k']->value%4 == 0) {?> 
                    <div class="sitemap-items">
                    <?php }?>
                        <div class="span3 box">
                            <div class="title">
                                <h4><span class="icon14 <?php echo $_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icon'];?>
"></span><?php echo $_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['label_lang'];?>
</h4>
                            </div>
                            <div class="content box-height">
                                <?php if (is_array($_smarty_tpl->tpl_vars['child_arr']->value) && count($_smarty_tpl->tpl_vars['child_arr']->value) > 0) {?>
                                    <ul class="sitemap">
                                        <?php
$__section_j_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__section_j'] : false;
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['child_arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total != 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                            <li>
                                                <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['target'];?>
" 
                                                   title="<?php echo $_smarty_tpl->tpl_vars['child_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['label_lang'];?>
" class="nav-active-link <?php echo $_smarty_tpl->tpl_vars['child_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['class'];?>
">
                                                    <span class="icon12 <?php echo $_smarty_tpl->tpl_vars['child_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['icon'];?>
"></span>
                                                    <?php echo $_smarty_tpl->tpl_vars['child_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['label_lang'];?>

                                                </a>
                                            </li>
                                        <?php
}
}
if ($__section_j_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_1_saved;
}
?>
                                        <?php if ($_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['code'] == 'home') {?>
                                            <li>
                                                <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['label_lang'];?>
">
                                                    <span class="icon12 <?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['icon'];?>
"></span>
                                                    <?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['label_lang'];?>

                                                </a>
                                            </li>
                                            <li>
                                                <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['label_lang'];?>
" class="fancybox-popup nav-active-link">
                                                    <span class="icon12 <?php echo $_smarty_tpl->tpl_vars['password_arr']->value['icon'];?>
"></span> 
                                                    <?php echo $_smarty_tpl->tpl_vars['password_arr']->value['label_lang'];?>

                                                </a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                <?php } elseif ($_smarty_tpl->tpl_vars['parent_arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['code'] == 'home') {?>
                                    <ul class="sitemap">
                                        <li>
                                            <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['label_lang'];?>
">
                                                <span class="icon12 <?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['icon'];?>
"></span>
                                                <?php echo $_smarty_tpl->tpl_vars['profile_arr']->value['label_lang'];?>

                                            </a>
                                        </li>
                                        <li>
                                            <a hijacked="yes" aria-nav-code="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['password_arr']->value['label_lang'];?>
" class="fancybox-popup nav-active-link">
                                                <span class="icon12 <?php echo $_smarty_tpl->tpl_vars['password_arr']->value['icon'];?>
"></span> 
                                                <?php echo $_smarty_tpl->tpl_vars['password_arr']->value['label_lang'];?>

                                            </a>
                                        </li>
                                    </ul>
                                <?php }?>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['k']->value%4 == 3) {?> 
                        <div class="clear"></div>
                    </div>  
                        <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['parent_arr']->value) == ($_smarty_tpl->tpl_vars['k']->value+1)) {?>
                        <?php $_smarty_tpl->tpl_vars["close_map_block"] = new Smarty_Variable('0', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "close_map_block", 0);?>
                    <?php }?>
                <?php }} else {
 ?>
                    <div align="center" class="errormsg"><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->line('GENERIC_NO_SITEMAP_ITEMS_ADDED_YET');?>
</div>
                <?php
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                <?php if ($_smarty_tpl->tpl_vars['close_map_block']->value == '0') {?>
                <div class="sitemap-items">
                <?php }?>
                
                <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }
}
