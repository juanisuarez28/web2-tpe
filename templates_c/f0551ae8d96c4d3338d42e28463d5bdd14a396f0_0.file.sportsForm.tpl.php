<?php
/* Smarty version 3.1.39, created on 2021-11-25 03:33:02
  from 'C:\xampp\htdocs\web2\TPE\templates\sportsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ef5de556745_69419663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0551ae8d96c4d3338d42e28463d5bdd14a396f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\sportsForm.tpl',
      1 => 1637807580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ef5de556745_69419663 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
    <div class="formulario">
    <h1>Formularios</h1>
        <h2>Crear deporte:</h2>
        <form action="createSport" method="post">
            <input type="text" name="sport" id="sport" placeholder="nombre del deporte">
            <input type="text" name="category" id="category" placeholder="categoria" >
            <input type="text" name="gender" id="gender" placeholder="genero">
            <input type="submit" class="btn btn-primary" value="Guardar">
        </form>

        <h2>Actualizar deporte:</h2>
        <form action="updateSport" method="post">
            <input type="number" name="id" id="id" placeholder="id del deporte">
            <input type="text" name="deporte" id="deporte" placeholder="nombre del deporte" >
            <input type="text" name="categoria" id="gategoria" placeholder="categoria nueva">
            <input type="text" name="genero" id="genero" placeholder="genero nuevo">
            <input type="submit" class="btn btn-primary" value="Guardar">
        </form>
    </div>
</div><?php }
}
