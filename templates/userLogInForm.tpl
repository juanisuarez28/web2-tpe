{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}
<div class="inicio-sesion">
    <h2>Login:</h2>
    <form action="verify" method="post">
        <input type="text" name="username" id="username" placeholder="Ingrese su usuario">
        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" >
        <input type="submit" class="btn btn-primary" value="Entrar">
    </form>
    <h4>{$error}</h4>
    <a class="btn btn-primary" href="showCheckIn">Pulsa aqui para registrarte</a>
</div>
{include file="templates/footer.tpl"}