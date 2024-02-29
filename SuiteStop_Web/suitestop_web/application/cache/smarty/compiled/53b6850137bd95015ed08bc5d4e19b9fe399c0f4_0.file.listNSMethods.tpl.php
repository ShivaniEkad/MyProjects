<?php
/* Smarty version 3.1.28, created on 2021-08-09 05:11:29
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/notification/nsengine/views/listNSMethods.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_6110b901c29155_62194145',
  'file_dependency' => 
  array (
    '53b6850137bd95015ed08bc5d4e19b9fe399c0f4' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/notification/nsengine/views/listNSMethods.tpl',
      1 => 1626450608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6110b901c29155_62194145 ($_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['this']->value->css->add_css("ns_validate.css");?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->js->add_js("crypto-md5.js","application_ns.js");?>

<?php echo '<script'; ?>
 type="text/javascript">
        var api_key = '<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item("API_KEY");?>
';
        var api_secret = '<?php echo $_smarty_tpl->tpl_vars['this']->value->config->item("API_SECRET");?>
';     
        var ns_base = "<?php echo $_smarty_tpl->tpl_vars['ns_url']->value;?>
";
<?php echo '</script'; ?>
>
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title">Welcome to Notification Console</div>
    </div>
    <div class="panel-body">
        <?php
$_from = $_smarty_tpl->tpl_vars['all_methods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_j_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_j']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_j'] : false;
$__foreach_j_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_j_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_j_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['__smarty_foreach_j'] = new Smarty_Variable(array('iteration' => 0));
if ($__foreach_j_0_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_j']->value['iteration']++;
$__foreach_j_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>    
            <div class="col-md-12 api-block">
                <div class="method-name">
                    <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_j']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_j']->value['iteration'] : null);?>
. <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                </div>
                <div class="inputparams">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
?ns_debug=1" method="post" class="form-horizontal ns">
                       <div class="form-group">
                            <label class="col-xs-1 control-label"></label>
                            <div class="col-xs-10">
                                <button type="submit" class="btn btn-default">Send Request</button>
                            </div>
                        </div>
                    </form>
                    <pre class="code"></pre>
                    <iframe class="text"></iframe>
                </div>
            </div>
        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_j_0_saved_local_item;
}
}
if ($__foreach_j_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_j'] = $__foreach_j_0_saved;
}
if ($__foreach_j_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_j_0_saved_item;
}
if ($__foreach_j_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_j_0_saved_key;
}
?>
    </div>
</div><?php }
}
