<?php
/* Smarty version 3.1.39, created on 2021-11-25 03:45:23
  from 'C:\xampp\htdocs\web2\TPE\templates\usersMod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ef8c30b3f10_36738105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06d364c8c1c0094ed35b616646fe84374e06d99e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\usersMod.tpl',
      1 => 1637808315,
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
function content_619ef8c30b3f10_36738105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <div class="deportes">
        <h1>Usuarios de la pagina:</h1>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <li class="list-group-item">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
 | <?php echo $_smarty_tpl->tpl_vars['user']->value->rol;?>

                    <a class="btn btn-danger" href="deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
">Borrar</a>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->rol != "mod") {?>
                    <a class="btn btn-info" href="updateRol/<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
/mod">hacer mod</a>                   
                    <?php } else { ?>
                        <a class="btn btn-info" href="updateRol/<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
/standard">hacer standard</a>
                    <?php }?>
                    
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>       
        </ul>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
