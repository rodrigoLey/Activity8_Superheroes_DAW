@extends('layouts.app')
@section('content')

<style>
    
nav.navbar.navbar-expand-md.navbar-light.bg-white.shadow-sm{
    background-color: black !important; 
    font-weight: bolder !important;
}
a.navbar-brand{
    color: yellow !important;
}
a#navbarDropdown.nav-link.dropdown-toggle{
    color: yellow !important;
}
a.dropdown-item{
    color: red !important;
    font-weight: bolder !important;
}
.btn.btn-warning{
    transition: transform 0.2s ease-in-out;
}
.btn.btn-warning:hover{
    transform: scale(1.1); 
    color: #ffc107;
    background-color: black;
    font-weight: bolder;
}
.btn.btn-danger{
    transition: transform 0.2s ease-in-out;
}
.btn.btn-danger:hover{
    transform: scale(1.1); 
    color: #dc3545;
    background-color: white;
    font-weight: bolder;
}
.btn.btn-success{
    transition: transform 0.5s ease;
}
.btn.btn-success:hover{
    transform: rotate(360deg);
    color: white;
    font-weight: bold;
    border-color: limegreen;  
    background-color: limegreen;
}
</style>
<div class="container">
<br/>
@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif
<br/>
<a href="{{ url('superheroe/create') }}" class="btn btn-success" > Registrar nuevo superheroe </a>
<br/>
<br/>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre Alias</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Informacion Adicional</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $superheroes as $superheroes )
        <tr>
            <td>{{ $superheroes->id }}</td>
            <td>
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$superheroes->Foto }}" width="100" att="">
            </td>
            <td>{{ $superheroes->Nombre_Alias }}</td>
            <td>{{ $superheroes->Nombre }}</td>
            <td>{{ $superheroes->Apellido }}</td>
            <td>{{ $superheroes->Informacion_Adicional }}</td>
            <td>
            
            <a href="{{ url('/superheroe/'.$superheroes->id.'/edit') }}" class="btn btn-warning" >
                Editar 
            </a>
             | 
            
            <form action="{{ url('/superheroe/'.$superheroes->id ) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar este registro?')" value="Borrar">

            </form>

            </td>
            <td></td>
        </tr>
        @endforeach

    </tbody>

</table>
</div>
@endsection