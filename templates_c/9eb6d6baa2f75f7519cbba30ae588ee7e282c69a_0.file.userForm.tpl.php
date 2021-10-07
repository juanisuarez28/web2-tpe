<?php
/* Smarty version 3.1.39, created on 2021-10-05 17:29:58
  from 'C:\xampp\htdocs\web2\TPE\templates\userForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615c6f76afb9c2_13457481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9eb6d6baa2f75f7519cbba30ae588ee7e282c69a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\userForm.tpl',
      1 => 1633447750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615c6f76afb9c2_13457481 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Logueate pa</h2>
<form action="log_in" method="post">
    <input type="text" name="username" id="username" placeholder="Ingrese su usuario">
    <input type="text" name="password" id="password" placeholder="Ingrese su contraseña" >
    <input type="submit" class="btn btn-primary" value="Guardar">
</form><?php }
}
