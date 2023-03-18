Formulario de creacion de superheroes.
<form action="{{ url('/superheroe')}}" method="post" enctype="multipart/form-data" >
@csrf 

<label for="Nombre_Alias"> Nombre Alias: </label>
<input type="text" name="Nombre_Alias" id="Nombre_Alias" >
<br>

<label for="Nombre"> Nombre: </label>
<input type="text" name="Nombre" id="Nombre" >
<br>

<label for="Apellido"> Apellido: </label>
<input type="text" name="Apellido" id="Apellido" >
<br>

<label for="Informacion_Adicional"> Informacion Adicional: </label>
<input type="text" name="Informacion_Adicional" id="Informacion_Adicional" >
<br>

<label for="Foto"> Foto: </label>
<input type="file" name="Foto" id="Foto" >
<br>

<input type="submit" value="Guardar datos" >
<br>

</form>