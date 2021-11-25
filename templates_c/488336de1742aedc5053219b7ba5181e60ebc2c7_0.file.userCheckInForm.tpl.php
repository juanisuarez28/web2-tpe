<?php
/* Smarty version 3.1.39, created on 2021-11-25 03:39:23
  from 'C:\xampp\htdocs\web2\TPE\templates\userCheckInForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ef75bad59b6_26312139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '488336de1742aedc5053219b7ba5181e60ebc2c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\userCheckInForm.tpl',
      1 => 1637807958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619ef75bad59b6_26312139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="inicio-sesion">
    <h2>Registrate</h2>
    <form action="checkIn" method="post">
        <input type="text" name="username" id="username" placeholder="Ingrese su usuario">
        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" >
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
    <a class="btn btn-primary" href="login">Ya tiene una cuenta? Pulse aqui</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
