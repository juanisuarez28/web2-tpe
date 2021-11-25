<?php
/* Smarty version 3.1.39, created on 2021-11-25 01:48:24
  from 'C:\xampp\htdocs\web2\TPE\templates\playerDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619edd58aa35a0_03501317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e6880aafc285607543f23fb58bf0c9f8f0def7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\playerDetail.tpl',
      1 => 1637800186,
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
function content_619edd58aa35a0_03501317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a class="btn btn-primary" href="<?php echo BASE_URL;?>
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

<form id="commentForm" data-idItem="<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">
    <input type="text" name="comment" id="comment" placeholder="Comentario" > 
    <label> Puntuacion: </label>
    <select name="score" id="score" placeholder="Puntuacion">
        <option value="1">1</option> 
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <button type="button" id="btn-agregar">Agregar comentario</button>
</form>

<div id="comments">
    <?php $_smarty_tpl->_subTemplateRender("file:vue/comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php echo '<script'; ?>
 src="js/comments.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
