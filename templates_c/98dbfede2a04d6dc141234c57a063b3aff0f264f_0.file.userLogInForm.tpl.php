<?php
/* Smarty version 3.1.39, created on 2021-10-08 04:03:45
  from 'C:\xampp\htdocs\web2\TPE\templates\userLogInForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615fa7019a55b8_12568761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98dbfede2a04d6dc141234c57a063b3aff0f264f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\userLogInForm.tpl',
      1 => 1633658449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615fa7019a55b8_12568761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Login:</h2>
<form action="verify" method="post">
    <input type="text" name="username" id="username" placeholder="Ingrese su usuario">
    <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" >
    <input type="submit" class="btn btn-primary" value="Entrar">
</form>
<h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
<a href="showCheckIn">Pulsa aqui para registrarte</a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
