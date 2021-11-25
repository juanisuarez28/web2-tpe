<?php
/* Smarty version 3.1.39, created on 2021-11-24 21:27:54
  from 'C:\xampp\htdocs\web2\TPE\templates\playerDetailStandard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ea04a6b6822_28084999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adfb720e5e217800e15d8f700edcaf82266fa5a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\playerDetailStandard.tpl',
      1 => 1637785670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:vue/comments.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619ea04a6b6822_28084999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="<?php echo BASE_URL;?>
viewPlayers"> Volver </a>
    <ul class="list-group">
        <li class="list-group-item">Nombre del Jugador: <?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
</li>
        <li class="list-group-item">DNI: <?php echo $_smarty_tpl->tpl_vars['player']->value->dni;?>
</li>
        <li class="list-group-item">Numero de telefono: <?php echo $_smarty_tpl->tpl_vars['player']->value->telefono;?>
</li>
        <li class="list-group-item">Cuota del Mes: <?php if ($_smarty_tpl->tpl_vars['player']->value->cuota_mensual == 0) {?>No pagó<?php } else { ?>pagó<?php }?></li>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['player']->value->imagen;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
            <li class="list-group-item"><img src="<?php echo $_smarty_tpl->tpl_vars['player']->value->imagen;?>
"></li>
        <?php }?>
    </ul>

<form action="createComment/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
" id="commentForm" data-idItem="<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">
</form>

<div id="comments">
    <?php $_smarty_tpl->_subTemplateRender("file:vue/comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php echo '<script'; ?>
 src="js/comments.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
