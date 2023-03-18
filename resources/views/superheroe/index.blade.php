Index Superheroe
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
            <td>${{ $superheroes->Foto }}</td>
            <td>{{ $superheroes->Nombre_Alias }}</td>
            <td>{{ $superheroes->Nombre }}</td>
            <td>{{ $superheroes->Apellido }}</td>
            <td>{{ $superheroes->Informacion_Adicional }}</td>
            <td>Editar | 
            
            <form action="{{ url('/superheroe/'.$superheroes->id ) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Deseas borrar este registro?')" value="Borrar">

            </form>

            </td>
            <td></td>
        </tr>
        @endforeach

    </tbody>

</table>