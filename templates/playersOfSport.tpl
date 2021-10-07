{include file="templates/header.tpl"}
<ul class="list-group">
 {foreach from=$players item=player}
        <li class="list-group-item">
            {$player->nombre} 
        </li>
    {/foreach} 
</ul>
{include file="templates/footer.tpl"}