{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}
<div class="content">
    <div class="deportes">
        <h1>Usuarios de la pagina:</h1>
        <ul>
        {foreach from=$users item=user}
            <li class="list-group-item">
                    {$user->username} | {$user->rol}
                    <a class="btn btn-danger" href="deleteUser/{$user->username}">Borrar</a>
                    {if $user->rol != "mod"}
                    <a class="btn btn-info" href="updateRol/{$user->username}/mod">hacer mod</a>                   
                    {else}
                        <a class="btn btn-info" href="updateRol/{$user->username}/standard">hacer standard</a>
                    {/if}
                    
            </li>
        {/foreach}       
        </ul>
    </div>
</div>
{include file="templates/footer.tpl"}