<?php
/* Smarty version 3.1.39, created on 2021-11-25 02:58:21
  from 'C:\xampp\htdocs\web2\TPE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eedbdd95045_52382484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30cdbe983e8eca0af3d61efdd3f8ae78f43305e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\home.tpl',
      1 => 1637805500,
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
function content_619eedbdd95045_52382484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="content">
  <section class="contenido-principal">
        <div class="noticias">
            <h1 class="titulo-principal">Nuevas adquisiciones para nuestro club!</h1>
            <img src="images/entrenamiento.jpg" id="img-noticia" alt="nuevos elementos entrenamiento">
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, quos odit. Et repellat
                veritatis
                voluptatum numquam reprehenderit. Nulla cupiditate distinctio at pariatur nobis accusantium repellat
                nesciunt obcaecati, beatae nemo officia.</p>
        </div>
    </section>
    <section id="nuestras_categorias">
        <h1 class="titles" id="titulo-categorias">Nuestras categorias</h1>
        <h2 class="subtitle">Categoria Sub 21 Masculino</h2>
        <img src="images/sub21masc.jpg" id="img-noticia" alt="sub 21 masculino">
        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus at reiciendis atque. Adipisci
            deleniti
            similique labore, temporibus nobis, quas possimus officiis veritatis nulla mollitia facere aliquid minus
            ratione, nihil earum.</p>
        <h2 class="subtitle">Categoria Sub 21 Femenino</h2>
        <img src="images/sub21fem.jpg" id="img-noticia" alt="sub 21 femenino">
        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus at reiciendis atque. Adipisci
            deleniti
            similique labore, temporibus nobis, quas possimus officiis veritatis nulla mollitia facere aliquid minus
            ratione, nihil earum.</p>
        <h2 class="subtitle">Categoria sub 15 masculino</h2>
        <img src="images/sub15masc.jpg" id="img-noticia" alt="sub 15 masculino">
        <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere ipsam consequuntur, doloremque
            molestiae nostrum provident natus possimus iure assumenda sed asperiores eveniet tempore, dolore, veritatis
            atque temporibus. Minima, id reprehenderit?</p>
        <h2 class="subtitle">Categoria Primera Femenino</h2>
        <img src="images/primerafem.jpeg" id="img-noticia" alt="primera femenino">
        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem nesciunt commodi repudiandae,
            alias quae, tempore cupiditate ipsam harum quisquam placeat saepe explicabo pariatur ipsum dolorem nemo!
            Vero, voluptatum. Consequatur, atque!</p>
        <h2 class="subtitle">Categoria Primera masculino</h2>
        <img src="images/primeramasc.jpg" id="img-noticia" alt="primera masculino">
        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptatem deleniti sit voluptatum
            impedit,
            voluptate neque accusantium doloribus officiis architecto! Soluta corrupti tenetur doloremque fuga, esse
            cumque quas reprehenderit excepturi?</p>
    </section>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
