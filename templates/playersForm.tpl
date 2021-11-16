 <h2>Crear Jugador:</h2>
<form action="createPlayer" method="post">
    <input type="text" name="name" id="name" placeholder="nombre" enctype="multipart/form-data">
    <select name="sport" id="sport" placeholder="ID del deporte">
        {foreach from=$sports item=sport}
            <option value="{$sport->id_deporte}">{$sport->deporte} - {$sport->categoria}</option>        
        {/foreach}
    <input type="number" name="dni" id="dni" placeholder="DNI">
    <input type="number" name="phone_number" id="phone_number" placeholder="numero telefonico">
    <input type="checkbox" name="cuota" id="cuota">
    <input type="file" name="images" id="images" placeholder="Foto jugador" multiple>
    <input type="submit" class="btn btn-primary" value="Guardar">
</form>

 <h2>Actualizar Jugador:</h2>
<form action="updatePlayer" method="post">
    <input type="text" name="anteriorNombre" id="anteriorNombre" placeholder="Anterior nombre">
    <input type="text" name="nombre" id="nombre" placeholder="nombre">
    <select name="sport" id="sport" placeholder="ID del deporte">
        {foreach from=$sports item=sport}
            <option value="{$sport->id_deporte}">{$sport->deporte} - {$sport->categoria}</option>        
        {/foreach}
    <input type="number" name="dni" id="dni" placeholder="DNI">
    <input type="number" name="telefono" id="telefono" placeholder="numero telefonico">
    <input type="checkbox" name="cuota" id="cuota">
    <input type="submit" class="btn btn-primary" value="modificar">
</form>
  