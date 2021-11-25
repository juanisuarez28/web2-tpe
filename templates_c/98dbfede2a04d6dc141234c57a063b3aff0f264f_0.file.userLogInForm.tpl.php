<?php
/* Smarty version 3.1.39, created on 2021-11-25 03:41:09
  from 'C:\xampp\htdocs\web2\TPE\templates\userLogInForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ef7c5b57a33_25375904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98dbfede2a04d6dc141234c57a063b3aff0f264f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\userLogInForm.tpl',
      1 => 1637808021,
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
function content_619ef7c5b57a33_25375904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="inicio-sesion">
    <h2>Login:</h2>
    <form action="verify" method="post">
        <input type="text" name="username" id="username" placeholder="Ingrese su usuario">
        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" >
        <input type="submit" class="btn btn-primary" value="Entrar">
    </form>
    <h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
    <a class="btn btn-primary" href="showCheckIn">Pulsa aqui para registrarte</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
