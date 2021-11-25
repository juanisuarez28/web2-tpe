<?php
/* Smarty version 3.1.39, created on 2021-11-25 01:30:47
  from 'C:\xampp\htdocs\web2\TPE\templates\sportDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ed937ba47f0_46043065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df41cef76f2f9c5df5c493ac4e0ef7f8aa78da62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\sportDetail.tpl',
      1 => 1637800151,
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
function content_619ed937ba47f0_46043065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a  class="btn btn-primary" href="<?php echo BASE_URL;?>
viewSports"> Volver </a>
<ul class="list-group">
    <li class="list-group-item">Deporte: <?php echo $_smarty_tpl->tpl_vars['sport']->value->deporte;?>
</li>
    <li class="list-group-item">Categoria: <?php echo $_smarty_tpl->tpl_vars['sport']->value->categoria;?>
</li>
    <li class="list-group-item">Genero: <?php echo $_smarty_tpl->tpl_vars['sport']->value->genero;?>
</li>
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
