<?php
/* Smarty version 3.1.39, created on 2021-11-25 01:09:03
  from 'C:\xampp\htdocs\web2\TPE\templates\vue\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ed41f7ddb09_68002375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfbbf776f458ef1dcd3577323fc13ae1cae5ee20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\vue\\comments.tpl',
      1 => 1637798939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ed41f7ddb09_68002375 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <h2>Puntuacion y estado del jugador/a: </h2>
    <ul v-if="comments!=null">
        <li v-for="comment in comments"> Estado: {{ comment.comentario }} | Puntuacion: {{ comment.puntaje }}<button class="btn btn-danger" id="btn-delete" v-on:click.prevent='deleteComment(comment.id)'>eliminar Comentario</button></li>
    </ul>
    <div v-else> 
        <p >Aun no tiene puntaje y estado agregado.</p>
    </div>

<?php }
}
