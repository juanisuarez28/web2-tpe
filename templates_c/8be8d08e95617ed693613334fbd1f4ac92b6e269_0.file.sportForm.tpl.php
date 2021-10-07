<?php
/* Smarty version 3.1.39, created on 2021-10-04 21:32:45
  from 'C:\xampp\htdocs\web2\TPE\templates\sportForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615b56dda14f87_18920366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8be8d08e95617ed693613334fbd1f4ac92b6e269' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\sportForm.tpl',
      1 => 1633375949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615b56dda14f87_18920366 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Crear deporte:</h2>
<form action="createSport" method="post">
    <input type="text" name="sport" id="sport" placeholder="nombre del deporte">
    <input type="text" name="category" id="category" placeholder="categoria" >
    <input type="text" name="gender" id="gender" placeholder="genero">
    <input type="submit" class="btn btn-primary" value="Guardar">
</form><?php }
}
