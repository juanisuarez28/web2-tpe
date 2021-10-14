<?php
/* Smarty version 3.1.39, created on 2021-10-08 04:24:08
  from 'C:\xampp\htdocs\web2\TPE\templates\playersMod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615fabc8555073_88022203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8c16d7e093baad11ec9dd52d264bbf712605bdf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\playersMod.tpl',
      1 => 1633659846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615fabc8555073_88022203 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Jugadores del club 2021</h1>
<ul class="list-group">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
    <li class="list-group-item">
        <?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
 | <?php echo $_smarty_tpl->tpl_vars['sports']->value[$_smarty_tpl->tpl_vars['player']->value->id_deporte-1]->deporte;?>

        <a href="viewPlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
" class="btn btn-info">Ver</a>
        <a class="btn btn-danger" href="deletePlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
'">Borrar</a>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
</ul>


<?php }
}
