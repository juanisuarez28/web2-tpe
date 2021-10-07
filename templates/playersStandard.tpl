    <h1>Jugadores del club 2021</h1>
    <ul class="list-group">
    {foreach from=$players item=player}
        <li class="list-group-item">
            {$player->nombre} <a href="viewPlayer/{$player->id}" class="btn btn-info">Ver</a>
        </li>
    {/foreach}       
    </ul>

