<?php
/* Smarty version 3.1.39, created on 2021-11-16 20:55:35
  from 'C:\xampp\htdocs\web2\TPE\templates\playerDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61940cb7cfd2f7_70092683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e6880aafc285607543f23fb58bf0c9f8f0def7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\playerDetail.tpl',
      1 => 1637092324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61940cb7cfd2f7_70092683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="<?php echo BASE_URL;?>
viewPlayers"> Volver </a>
    <ul class="list-group">
        <li class="list-group-item">Nombre del Jugador: <?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
</li>
        <li class="list-group-item">DNI: <?php echo $_smarty_tpl->tpl_vars['player']->value->dni;?>
</li>
        <li class="list-group-item">Numero de telefono: <?php echo $_smarty_tpl->tpl_vars['player']->value->telefono;?>
</li>
        <li class="list-group-item">Cuota del Mes: <?php if ($_smarty_tpl->tpl_vars['player']->value->cuota_mensual == 0) {?>No pagó<?php } else { ?>pagó<?php }?></li>
    </ul>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
