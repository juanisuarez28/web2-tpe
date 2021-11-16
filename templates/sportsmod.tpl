{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}
<a href="logout" class="btn btn-warning" > Cerrar sesión</a>
<h2>Deportes del Club 2021</h2>
<ul class="list-group">
    {foreach from=$sports item=sport}
        <li class="list-group-item">
            ID {$sport->id_deporte}: {$sport->deporte} | {$sport->categoria} | {$sport->genero} <a href="viewSport/{$sport->id_deporte}" class="btn btn-info">Ver</a>
            <a class="btn btn-danger" href="deleteSport/{$sport->id_deporte}">Borrar</a>
            <a class="btn btn-success" href="viewPlayersOfSport/{$sport->id_deporte}">Jugadores de {$sport->deporte} en {$sport->categoria}</a>
        </li>
    {/foreach}
</ul>