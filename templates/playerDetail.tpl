{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}
<a href="{BASE_URL}viewPlayers"> Volver </a>
    <ul class="list-group">
        <li class="list-group-item">Nombre del Jugador: {$player->nombre}</li>
        <li class="list-group-item">DNI: {$player->dni}</li>
        <li class="list-group-item">Numero de telefono: {$player->telefono}</li>
        <li class="list-group-item">Cuota del Mes: {if $player ->cuota_mensual== 0}No pagó{else}pagó{/if}</li>
    </ul>
{include file="templates/footer.tpl"}

