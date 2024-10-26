<?php

namespace App\Http\Controllers;
use App\Models\Pelicula;
use App\Models\Renta;
use App\Models\Cliente;
use Illuminate\Http\Request;

class RentaController extends Controller
{
    public function index()
    {
        $rentas = Renta::with('pelicula', 'cliente')->get();

        return view('rentas.index', ['rentas' => $rentas]);
    }

    public function create(Request $request)
    {
        $peliculas = Pelicula::all();

        $clienteActual = $request->user(); 

        return view('rentas.create', ['peliculas' => $peliculas, 'clienteActual' => $clienteActual]);
    }

    public function store(Request $request)
    {
    
        $renta = new Renta;
        $renta->fecharegistro = $request->fecharegistro;
        $renta->fechadevolucion = $request->fechadevolucion;
        $renta->fechaentrega = $request->fechaentrega;
        $renta->idcliente = $request->idcliente;
        $renta->idpelicula = $request->idpelicula;
        $renta->save();

        return redirect()->route('clientes.show', $renta->idcliente);
    }

    public function show($id)
    {

    }
    
    public function edit(Renta $renta)
    {
        return view('rentas.edit', compact('renta'));
    }

    public function update(Request $request, Renta $renta)
    {
        $renta->update($request->all());
        return redirect()->route('clientes.show', $renta->idcliente);
    }

    public function destroy(Renta $renta)
    {
        $renta->delete();
        return redirect()->route('clientes.show', $renta->idcliente);
    }
}
