<br>
<label for="Nombre_Alias"> Nombre Alias: </label>
<input type="text" name="Nombre_Alias" value="{{ $superheroe->Nombre_Alias }}" id="Nombre_Alias" >
<br>
<label for="Nombre"> Nombre: </label>
<input type="text" name="Nombre" value="{{ $superheroe->Nombre }}" id="Nombre" >
<br>
<label for="Apellido"> Apellido: </label>
<input type="text" name="Apellido" value="{{ $superheroe->Apellido }}" id="Apellido" >
<br>
<label for="Informacion_Adicional"> Informacion Adicional: </label>
<input type="text" name="Informacion_Adicional" value="{{ $superheroe->Informacion_Adicional }}" id="Informacion_Adicional" >
<br>
<label for="Foto"> Foto: </label>
{{ $superheroe->Foto }}
<input type="file" name="Foto" value="{{ $superheroe->Foto }}" id="Foto" >
<br>
<input type="submit" value="Guardar datos" >
<br>