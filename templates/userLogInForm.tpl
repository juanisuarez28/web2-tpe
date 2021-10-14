{include file="templates/header.tpl"}
<h2>Login:</h2>
<form action="verify" method="post">
    <input type="text" name="username" id="username" placeholder="Ingrese su usuario">
    <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" >
    <input type="submit" class="btn btn-primary" value="Entrar">
</form>
<h4>{$error}</h4>
<a href="showCheckIn">Pulsa aqui para registrarte</a>
{include file="templates/footer.tpl"}