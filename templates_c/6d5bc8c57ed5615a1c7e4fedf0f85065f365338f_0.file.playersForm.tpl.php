<?php
/* Smarty version 3.1.39, created on 2021-10-07 21:27:16
  from 'C:\xampp\htdocs\web2\TPE\templates\playersForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f4a14658ed5_40666065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d5bc8c57ed5615a1c7e4fedf0f85065f365338f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\playersForm.tpl',
      1 => 1633634828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615f4a14658ed5_40666065 (Smarty_Internal_Template $_smarty_tpl) {
?> <h2>Crear Jugador:</h2>
<form action="createPlayer" method="post">
    <input type="text" name="name" id="name" placeholder="nombre">
    <select name="sport" id="sport" placeholder="ID del deporte">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sports']->value, 'sport');
$_smarty_tpl->tpl_vars['sport']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sport']->value) {
$_smarty_tpl->tpl_vars['sport']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['sport']->value->id_deporte;?>
"><?php echo $_smarty_tpl->tpl_vars['sport']->value->deporte;?>
 - <?php echo $_smarty_tpl->tpl_vars['sport']->value->categoria;?>
</option>        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <input type="number" name="dni" id="dni" placeholder="DNI">
    <input type="number" name="phone_number" id="phone_number" placeholder="numero telefonico">
    <input type="checkbox" name="cuota" id="cuota">
    <input type="submit" class="btn btn-primary" value="Guardar">
</form>

 <h2>Actualizar Jugador:</h2>
<form action="updatePlayer" method="post">
    <input type="text" name="anteriorNombre" id="anteriorNombre" placeholder="Anterior nombre">
    <input type="text" name="nombre" id="nombre" placeholder="nombre">
    <select name="sport" id="sport" placeholder="ID del deporte">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sports']->value, 'sport');
$_smarty_tpl->tpl_vars['sport']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sport']->value) {
$_smarty_tpl->tpl_vars['sport']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['sport']->value->id_deporte;?>
"><?php echo $_smarty_tpl->tpl_vars['sport']->value->deporte;?>
 - <?php echo $_smarty_tpl->tpl_vars['sport']->value->categoria;?>
</option>        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <input type="number" name="dni" id="dni" placeholder="DNI">
    <input type="number" name="telefono" id="telefono" placeholder="numero telefonico">
    <input type="checkbox" name="cuota" id="cuota">
    <input type="submit" class="btn btn-primary" value="modificar">
</form>
  <?php }
}