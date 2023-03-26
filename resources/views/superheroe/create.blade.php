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
</style>

<div class="container">
<form action="{{ url('/superheroe')}}" method="post" enctype="multipart/form-data" >
@csrf 
@include('superheroe.form', ['modo'=>'Crear'] )


</form>
</div>
@endsection