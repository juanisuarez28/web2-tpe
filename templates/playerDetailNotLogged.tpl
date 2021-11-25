{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}
<a class="btn btn-primary" href="{BASE_URL}viewPlayers"> Volver </a>
    <ul class="list-group">
        <li class="list-group-item">Nombre del Jugador: {$player->nombre}</li>
        <li class="list-group-item">DNI: {$player->dni}</li>
        <li class="list-group-item">Numero de telefono: {$player->telefono}</li>
        <li class="list-group-item">Cuota del Mes: {if $player ->cuota_mensual== 0}No pagó{else}pagó{/if}</li>
        {if {$player->imagen}}
            <li class="list-group-item"><img src="{$player->imagen}"></li>
        {/if}
    </ul>

<form action="createComment/{$player->id}" id="commentForm" data-idItem="{$player->id}">
</form>

<div id="comments">
    {include file="vue/comments.tpl"}
</div>

<script src="./js/comments.js"></script>
{include file="templates/footer.tpl"}