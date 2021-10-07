<?php
/* Smarty version 3.1.39, created on 2021-10-04 21:42:16
  from 'C:\xampp\htdocs\web2\TPE\templates\sports.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615b59183fcc31_27539703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c67751bf74e812b8f098dd3d13a87e70b1baa5ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\sports.tpl',
      1 => 1633376534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615b59183fcc31_27539703 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Deportes del Club 2021</h2>
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sports']->value, 'sport');
$_smarty_tpl->tpl_vars['sport']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sport']->value) {
$_smarty_tpl->tpl_vars['sport']->do_else = false;
?>
        <li class="list-group-item">
            <a href="viewSport/<?php echo $_smarty_tpl->tpl_vars['sport']->value->id_deporte;?>
"><?php echo $_smarty_tpl->tpl_vars['sport']->value->deporte;?>
 | <?php echo $_smarty_tpl->tpl_vars['sport']->value->categoria;?>
 | <?php echo $_smarty_tpl->tpl_vars['sport']->value->genero;?>
</a>
            <a class="btn btn-danger" href="deleteSport/<?php echo $_smarty_tpl->tpl_vars['sport']->value->id_deporte;?>
">Borrar</a>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
