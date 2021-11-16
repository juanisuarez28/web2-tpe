<?php
/* Smarty version 3.1.39, created on 2021-11-16 20:52:34
  from 'C:\xampp\htdocs\web2\TPE\templates\sportsmod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61940c0210e248_72774251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fdcbd833c788d2a1f901affc6f0d002b2944b16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\sportsmod.tpl',
      1 => 1637092346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
  ),
),false)) {
function content_61940c0210e248_72774251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="logout" class="btn btn-warning" > Cerrar sesión</a>
<h2>Deportes del Club 2021</h2>
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sports']->value, 'sport');
$_smarty_tpl->tpl_vars['sport']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sport']->value) {
$_smarty_tpl->tpl_vars['sport']->do_else = false;
?>
        <li class="list-group-item">
            ID <?php echo $_smarty_tpl->tpl_vars['sport']->value->id_deporte;?>
: <?php echo $_smarty_tpl->tpl_vars['sport']->value->deporte;?>
 | <?php echo $_smarty_tpl->tpl_vars['sport']->value->categoria;?>
 | <?php echo $_smarty_tpl->tpl_vars['sport']->value->genero;?>
 <a href="viewSport/<?php echo $_smarty_tpl->tpl_vars['sport']->value->id_deporte;?>
" class="btn btn-info">Ver</a>
            <a class="btn btn-danger" href="deleteSport/<?php echo $_smarty_tpl->tpl_vars['sport']->value->id_deporte;?>
">Borrar</a>
            <a class="btn btn-success" href="viewPlayersOfSport/<?php echo $_smarty_tpl->tpl_vars['sport']->value->id_deporte;?>
">Jugadores de <?php echo $_smarty_tpl->tpl_vars['sport']->value->deporte;?>
 en <?php echo $_smarty_tpl->tpl_vars['sport']->value->categoria;?>
</a>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
