{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}
<a href="{BASE_URL}viewSports"> Volver </a>
<ul class="list-group">
    <li class="list-group-item">Deporte: {$sport->deporte}</li>
    <li class="list-group-item">Categoria: {$sport->categoria}</li>
    <li class="list-group-item">Genero: {$sport->genero}</li>
</ul>
{include file="templates/footer.tpl"}