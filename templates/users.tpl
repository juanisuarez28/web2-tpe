{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}
<div class="content">
    <div class="deportes"> 
        <h1>Usuarios de la pagina:</h1>
        <ul>
        {foreach from=$users item=user}
            <li class="list-group-item">
                    {$user->username} | {$user->rol}
            </li>
        {/foreach}       
        </ul>
    </div>
</div>
{include file="templates/footer.tpl"}