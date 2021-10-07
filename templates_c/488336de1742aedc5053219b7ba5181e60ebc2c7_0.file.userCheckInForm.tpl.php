<?php
/* Smarty version 3.1.39, created on 2021-10-06 20:37:32
  from 'C:\xampp\htdocs\web2\TPE\templates\userCheckInForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615decec392d80_54798875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '488336de1742aedc5053219b7ba5181e60ebc2c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\userCheckInForm.tpl',
      1 => 1633464280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615decec392d80_54798875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>registrate pa</h2>
<form action="checkIn" method="post">
    <input type="text" name="username" id="username" placeholder="Ingrese su usuario">
    <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" >
    <input type="submit" class="btn btn-primary" value="Guardar">
</form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
