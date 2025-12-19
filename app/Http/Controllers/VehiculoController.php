<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function create()
    {
        return view('vehiculos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'problema_reportado' => 'required',
            'nombre_cliente' => 'required',
            'telefono' => 'required',
            'estado' => 'required'
        ]);

        Vehiculo::create($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo registrado correctamente');
    }

    public function edit(Vehiculo $vehiculo)
    {
        return view('vehiculos.edit', compact('vehiculo'));
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'placa' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'problema_reportado' => 'required',
            'nombre_cliente' => 'required',
            'telefono' => 'required',
            'estado' => 'required'
        ]);

        $vehiculo->update($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo actualizado correctamente');
    }

    public function destroy(Vehiculo $vehiculo)
    {
        return redirect()->route('vehiculos.index')
            ->with('success', 'Registro conservado por historial');
    }
}
