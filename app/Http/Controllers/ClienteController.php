<?php

namespace App\Http\Controllers;
use App\Models\Membresia;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {

        $primerMembresiaId = Membresia::first()->id;


        $cliente = new Cliente;
        $cliente->nombre = $request->nombre;
        $cliente->apellidoPaterno = $request->apellidoPaterno;
        $cliente->apellidoMaterno = $request->apellidoMaterno;
        $cliente->fechanacimiento = $request->fechanacimiento;
        $cliente->idmembresia = $primerMembresiaId; 
        $cliente->save();


        return redirect()->route('clientes.show', $cliente->id);
    }

    public function show($id)
    {

        $cliente = Cliente::with(['rentas', 'rentas.pelicula', 'membresia'])->findOrFail($id);
    
        return view('clientes.show', ['cliente' => $cliente]);
    }
    
    public function edit(Cliente $cliente)
    {
        
    }

    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('clientes.index');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}



