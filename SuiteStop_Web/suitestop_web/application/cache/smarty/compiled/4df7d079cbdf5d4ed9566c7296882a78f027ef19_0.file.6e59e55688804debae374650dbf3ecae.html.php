<?php
/* Smarty version 3.1.28, created on 2021-08-23 06:03:41
  from "/var/www/html/Appineers_V4_Web/Appineers_V4/application/cache/queries/query_e/6e59e55688804debae374650dbf3ecae.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_61233a3d691ae1_01723978',
  'file_dependency' => 
  array (
    '4df7d079cbdf5d4ed9566c7296882a78f027ef19' => 
    array (
      0 => '/var/www/html/Appineers_V4_Web/Appineers_V4/application/cache/queries/query_e/6e59e55688804debae374650dbf3ecae.html',
      1 => 1629698617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61233a3d691ae1_01723978 ($_smarty_tpl) {
?>
                        
    <tr class="query-error">
        <td style="display:table-cell">
            <div>Error Number: 1146</div><div>Table 'appineers_v4.mod_country' doesn't exist</div><div>SELECT `iCountryId` AS `id`,`vCountry` AS val
FROM `mod_country`
WHERE `mod_country`.`iSysRecDeleted` <> 1
ORDER BY `val` asc</div><div>Filename: database/DB_driver.php</div><div>Line Number: 210</div>
        </td>
        <td></td>
    </tr>                        
    <tr class="query-error">
        <td style="display:table-cell">
            <div>Error Number: 1146</div><div>Table 'appineers_v4.mod_country' doesn't exist</div><div>SELECT COUNT(*) AS tot
FROM `mod_country`
WHERE `mod_country`.`iSysRecDeleted` <> 1</div><div>Filename: database/DB_driver.php</div><div>Line Number: 210</div>
        </td>
        <td></td>
    </tr><?php }
}
