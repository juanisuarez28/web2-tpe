<?php
/* Smarty version 3.1.39, created on 2021-11-25 03:18:22
  from 'C:\xampp\htdocs\web2\TPE\templates\playersmod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ef26ea5f0b1_09883689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f143dd2586fc3f32131356a17dfeda062b848d79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\playersmod.tpl',
      1 => 1637806660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/playersForm.tpl' => 1,
  ),
),false)) {
function content_619ef26ea5f0b1_09883689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="logout" class="btn btn-warning" > Cerrar sesión</a>
<div class="content">
    <div class="deportes">
        <h1>Jugadores del club 2021</h1>
        <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
            <li class="list-group-item">
                <?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
 | <?php echo $_smarty_tpl->tpl_vars['sports']->value[$_smarty_tpl->tpl_vars['player']->value->id_deporte-1]->deporte;?>

                <a href="viewPlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
" class="btn btn-info">Ver</a>
                <a class="btn btn-danger" href="deletePlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
'">Borrar</a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
        </ul>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/playersForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
