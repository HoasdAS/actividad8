Mostrar listas de empleados
<table class="table table-light">
    <thread class="thread-light">
        <tr>
            <th>#</th>
            <th>Nombre de Heroe</th>
            <th>Nombre real</th>
            <th>Foto</th>
            <th>Info adicional</th>
            <th>Acciones</th>
        </tr>
    </thread>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->NombreDeHeroe }}</td>
            <td>{{ $empleado->NombreReal }}</td>
            <td>{{ $empleado->Foto }}</td>
            <td>{{ $empleado->InfoAdicional }}</td>
            <td>
                
            <a href="{{url('/empleado/'.$empleado->id.'/edit')}}"> editar</a>


            <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                @csrf
                @method('DELETE')
                {{method_field('DELETE')}}
                <input type="submit"  onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form> 
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>