<h1>Listado de Vehículos</h1>

<a href="{{ route('vehiculos.create') }}">Registrar vehículo</a>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if($vehiculos->count() == 0)
    <p>No hay vehículos registrados.</p>
@else
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
        <tr>
            <th>Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cliente</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vehiculos as $vehiculo)
            <tr>
                <td>{{ $vehiculo->placa }}</td>
                <td>{{ $vehiculo->marca }}</td>
                <td>{{ $vehiculo->modelo }}</td>
                <td>{{ $vehiculo->nombre_cliente }}</td>
                <td>{{ $vehiculo->estado }}</td>
                <td>
                    <a href="{{ route('vehiculos.edit', $vehiculo->id) }}">Editar</a>

                    <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif

