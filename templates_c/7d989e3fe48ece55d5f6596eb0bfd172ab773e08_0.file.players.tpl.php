<?php
/* Smarty version 3.1.39, created on 2021-10-05 23:57:42
  from 'C:\xampp\htdocs\web2\TPE\templates\players.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615cca560336b2_60334253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d989e3fe48ece55d5f6596eb0bfd172ab773e08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\players.tpl',
      1 => 1633464369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615cca560336b2_60334253 (Smarty_Internal_Template $_smarty_tpl) {
?>    <h1>Jugadores del club 2021</h1>
    <ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
        <li class="list-group-item">
            <a href="viewPlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
</a>
             <a class="btn btn-danger" href="deletePlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
'">Borrar</a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>       
        </li>
    </ul>

<?php }
}
