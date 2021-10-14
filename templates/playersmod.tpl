<h1>Jugadores del club 2021</h1>
<ul class="list-group">
{foreach from=$players item=player}
    <li class="list-group-item">
        {$player->nombre} | {$sports[$player->id_deporte -1]->deporte}
        <a href="viewPlayer/{$player->id}" class="btn btn-info">Ver</a>
        <a class="btn btn-danger" href="deletePlayer/{$player->id}'">Borrar</a>
    </li>
{/foreach}  
</ul>


