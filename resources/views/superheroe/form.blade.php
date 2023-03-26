<h1> {{ $modo }} Superheroe </h1>
<br>
<label for="Nombre_Alias"> Nombre Alias: </label>
<input type="text" name="Nombre_Alias" value="{{ isset($superheroe->Nombre_Alias)?$superheroe->Nombre_Alias:'' }}" id="Nombre_Alias" >
<br>
<label for="Nombre"> Nombre: </label>
<input type="text" name="Nombre" value="{{ isset($superheroe->Nombre)?$superheroe->Nombre:'' }}" id="Nombre" >
<br>
<label for="Apellido"> Apellido: </label>
<input type="text" name="Apellido" value="{{ isset($superheroe->Apellido)?$superheroe->Apellido:'' }}" id="Apellido" >
<br>
<label for="Informacion_Adicional"> Informacion Adicional: </label>
<input type="text" name="Informacion_Adicional" value="{{ isset($superheroe->Informacion_Adicional)?$superheroe->Informacion_Adicional:'' }}" id="Informacion_Adicional" >
<br>
<label for="Foto"> Foto: </label>
@if(isset($superheroe->Foto))
<img src="{{ asset('storage').'/'.$superheroe->Foto }}" width="100" att="">
@endif
<input type="file" name="Foto" value="" id="Foto" >
<br>
<input type="submit" value="{{ $modo }} datos" >

<a href="{{ url('superheroe/') }}"> Regresar </a>

<br>