<style>
h1{
    color: blue;
    font-weight: bolder;
}
</style>

<h1> {{ $modo }} Superheroe </h1>

<div class="form-group">

<br>
<label for="Nombre_Alias"> Nombre Alias: </label>
<input type="text" class="form-control" name="Nombre_Alias" value="{{ isset($superheroe->Nombre_Alias)?$superheroe->Nombre_Alias:'' }}" id="Nombre_Alias" >
</div>

<div class="form-group">
<label for="Nombre"> Nombre: </label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($superheroe->Nombre)?$superheroe->Nombre:'' }}" id="Nombre" >
</div>

<div class="form-group">
<label for="Apellido"> Apellido: </label>
<input type="text" class="form-control" name="Apellido" value="{{ isset($superheroe->Apellido)?$superheroe->Apellido:'' }}" id="Apellido" >
</div>

<div class="form-group">
<label for="Informacion_Adicional"> Informacion Adicional: </label>
<input type="text" class="form-control" name="Informacion_Adicional" value="{{ isset($superheroe->Informacion_Adicional)?$superheroe->Informacion_Adicional:'' }}" id="Informacion_Adicional" >
</div>

<div class="form-group">
<label for="Foto">  </label>
@if(isset($superheroe->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$superheroe->Foto }}" width="100" att="">
@endif
<input type="file" class="form-control" name="Foto" value="" id="Foto" >
</div>
<br/>
<input class="btn btn-success" type="submit" value="{{ $modo }} datos" >

<a class="btn btn-primary" href="{{ url('superheroe/') }}"> Regresar </a>
