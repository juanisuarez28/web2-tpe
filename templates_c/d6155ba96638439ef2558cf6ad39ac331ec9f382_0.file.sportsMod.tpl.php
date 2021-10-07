<?php
/* Smarty version 3.1.39, created on 2021-10-07 22:51:23
  from 'C:\xampp\htdocs\web2\TPE\templates\sportsMod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f5dcb5bc057_37106076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6155ba96638439ef2558cf6ad39ac331ec9f382' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\sportsMod.tpl',
      1 => 1633639854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615f5dcb5bc057_37106076 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Deportes del Club 2021</h2>
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
