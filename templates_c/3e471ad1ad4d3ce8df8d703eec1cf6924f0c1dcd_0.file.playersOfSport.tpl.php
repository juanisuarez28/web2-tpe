<?php
/* Smarty version 3.1.39, created on 2021-10-08 04:00:03
  from 'C:\xampp\htdocs\web2\TPE\templates\playersOfSport.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615fa623d9e174_46025931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e471ad1ad4d3ce8df8d703eec1cf6924f0c1dcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\playersOfSport.tpl',
      1 => 1633658390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615fa623d9e174_46025931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="<?php echo BASE_URL;?>
home"> Volver </a>
<ul class="list-group">
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
        <li class="list-group-item">
            <?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
 
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
