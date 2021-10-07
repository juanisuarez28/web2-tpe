<?php
/* Smarty version 3.1.39, created on 2021-10-07 22:40:20
  from 'C:\xampp\htdocs\web2\TPE\templates\indexMod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f5b34d47f46_74931790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9da7cd68045d03f34b2f483a543ae88955e4236' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\indexMod.tpl',
      1 => 1633639175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/playersMod.tpl' => 1,
    'file:templates/playersForm.tpl' => 1,
    'file:templates/sportsMod.tpl' => 1,
    'file:templates/sportsForm.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615f5b34d47f46_74931790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="logout" class="btn btn-warning" > Cerrar sesión</a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/playersMod.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/playersForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/sportsMod.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/sportsForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
