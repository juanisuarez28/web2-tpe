{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}
<a href="{BASE_URL}viewSports"> Volver </a>
<ul class="list-group">
 {foreach from=$players item=player}
        <li class="list-group-item">
            {$player->nombre} 
        </li>
    {/foreach} 
</ul>
{include file="templates/footer.tpl"}