<h2>Crear deporte:</h2>
<form action="createSport" method="post">
    <input type="text" name="sport" id="sport" placeholder="nombre del deporte">
    <input type="text" name="category" id="category" placeholder="categoria" >
    <input type="text" name="gender" id="gender" placeholder="genero">
    <input type="submit" class="btn btn-primary" value="Guardar">
</form>

<h2>Actualizar deporte:</h2>
<form action="updateSport" method="post">
    <input type="number" name="id" id="id" placeholder="id del deporte">
    <input type="text" name="deporte" id="deporte" placeholder="nombre del deporte" >
    <input type="text" name="categoria" id="gategoria" placeholder="categoria nueva">
    <input type="text" name="genero" id="genero" placeholder="genero nuevo">
    <input type="submit" class="btn btn-primary" value="Guardar">
</form>