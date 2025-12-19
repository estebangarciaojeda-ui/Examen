<h1>Editar Vehículo</h1>

<form action="{{ route('vehiculos.update', $vehiculo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Placa:</label><br>
    <input type="text" name="placa" value="{{ $vehiculo->placa }}"><br><br>

    <label>Marca:</label><br>
    <input type="text" name="marca" value="{{ $vehiculo->marca }}"><br><br>

    <label>Modelo:</label><br>
    <input type="text" name="modelo" value="{{ $vehiculo->modelo }}"><br><br>

    <label>Problema reportado:</label><br>
    <textarea name="problema_reportado">{{ $vehiculo->problema_reportado }}</textarea><br><br>

    <label>Nombre del cliente:</label><br>
    <input type="text" name="nombre_cliente" value="{{ $vehiculo->nombre_cliente }}"><br><br>

    <label>Teléfono:</label><br>
    <input type="text" name="telefono" value="{{ $vehiculo->telefono }}"><br><br>

    <label>Estado:</label><br>
    <select name="estado">
        <option value="ingresado" {{ $vehiculo->estado == 'ingresado' ? 'selected' : '' }}>Ingresado</option>
        <option value="revisando" {{ $vehiculo->estado == 'revisando' ? 'selected' : '' }}>Revisando</option>
        <option value="reparacion" {{ $vehiculo->estado == 'reparacion' ? 'selected' : '' }}>En reparación</option>
        <option value="listo" {{ $vehiculo->estado == 'listo' ? 'selected' : '' }}>Listo</option>
    </select><br><br>

    <button type="submit">Actualizar</button>
</form>

<br>
<a href="{{ route('vehiculos.index') }}">Volver</a>
