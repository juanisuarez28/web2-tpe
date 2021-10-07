<?php
/* Smarty version 3.1.39, created on 2021-10-06 22:22:47
  from 'C:\xampp\htdocs\web2\TPE\templates\indexUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e05979ec475_24926220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd3e7acacc68ff3025687c13fdda70bd95122ce6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\indexUser.tpl',
      1 => 1633551765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/playersStandard.tpl' => 1,
    'file:templates/sportsStandard.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615e05979ec475_24926220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="logout" class="btn btn-warning"> Cerrar sesión</a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/playersStandard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/sportsStandard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
