{include file="templates/header.tpl"}
<h2>Registrate</h2>
<form action="checkIn" method="post">
    <input type="text" name="username" id="username" placeholder="Ingrese su usuario">
    <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" >
    <input type="submit" class="btn btn-primary" value="Guardar">
</form>
<a href="login">Ya tiene una cuenta? Pulse aqui</a>
{include file="templates/footer.tpl"}