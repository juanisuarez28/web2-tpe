{include file="templates/header.tpl"}
<a href="{BASE_URL}home"> Volver </a>
<ul class="list-group">
 {foreach from=$players item=player}
        <li class="list-group-item">
            {$player->nombre} 
        </li>
    {/foreach} 
</ul>
{include file="templates/footer.tpl"}