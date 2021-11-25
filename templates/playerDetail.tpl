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

<form id="commentForm" data-idItem="{$player->id}">
    <input type="text" name="comment" id="comment" placeholder="Comentario" > 
    <label> Puntuacion: </label>
    <select name="score" id="score" placeholder="Puntuacion">
        <option value="1">1</option> 
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <button type="button" id="btn-agregar">Agregar comentario</button>
</form>

<div id="comments">
    {include file="vue/comments.tpl"}
</div>

<script src="js/comments.js"></script>
{include file="templates/footer.tpl"}

