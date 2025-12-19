<h1>Registrar Vehículo</h1>

<form action="{{ route('vehiculos.store') }}" method="POST">
    @csrf

    <label>Placa:</label><br>
    <input type="text" name="placa"><br><br>

    <label>Marca:</label><br>
    <input type="text" name="marca"><br><br>

    <label>Modelo:</label><br>
    <input type="text" name="modelo"><br><br>

    <label>Problema reportado:</label><br>
    <textarea name="problema_reportado"></textarea><br><br>

    <label>Nombre del cliente:</label><br>
    <input type="text" name="nombre_cliente"><br><br>

    <label>Teléfono:</label><br>
    <input type="text" name="telefono"><br><br>

    <label>Estado:</label><br>
    <select name="estado">
        <option value="ingresado">Ingresado</option>
        <option value="revisando">Revisando</option>
        <option value="reparacion">En reparación</option>
        <option value="listo">Listo</option>
    </select><br><br>

    <button type="submit">Guardar</button>
</form>

<br>
<a href="{{ route('vehiculos.index') }}">Volver</a>
