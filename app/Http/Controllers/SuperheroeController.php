<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superheroe;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superheroe::all();
        return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superheroes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre_verdadero' => 'required',
            'nombre_superheroe' => 'required',
            'foto' => 'required',
        ]);

        // Crea un nuevo objeto Superheroe con los datos recibidos del formulario
        $superheroe = new Superheroe();
        $superheroe->nombre_verdadero = $request->nombre_verdadero;
        $superheroe->nombre_superheroe = $request->nombre_superheroe;
        $superheroe->foto = $request->foto;
        $superheroe->informacion_adicional = $request->informacion_adicional;

        // Guarda el objeto en la base de datos
        $superheroe->save();

        // Redirecciona a la página de índice de superhéroes
        return redirect()->route('superheroes.index');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroes.show', compact('superheroe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroes.edit', compact('superheroe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'nombre_verdadero' => 'required',
            'nombre_superheroe' => 'required',
            'foto' => 'required',
        ]);

        // Busca el superhéroe por su ID
        $superheroe = Superheroe::findOrFail($id);

        // Actualiza los atributos del superhéroe
        $superheroe->nombre_verdadero = $request->nombre_verdadero;
        $superheroe->nombre_superheroe = $request->nombre_superheroe;
        $superheroe->foto = $request->foto;
        $superheroe->informacion_adicional = $request->informacion_adicional;

        // Guarda los cambios en la base de datos
        $superheroe->save();

        // Redirecciona a la página de índice de superhéroes
        return redirect()->route('superheroes.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        $superheroe->delete();
        return redirect()->route('superheroes.index');
    }
}