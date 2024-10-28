<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModeloRequest;
use App\Http\Requests\UpdateModeloRequest;
use App\Models\Modelo;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $eventos = Evento::all();
        return view ('eventos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModeloRequest $request)
    {
        //
        Evento::create(request->all());
        return redirect()->route('eventos.index')
        ->with('success', 'Evento criado com sucesso');

        $request->merge([
            'realizado' => $request->has('realizado') ? tru : false
        ]);

        Evento::create($request->all());
        return redirect()->away('/eventos')
        ->with('success', 'Evento criado com sucesso');

    }

    /**
     * Display the specified resource.
     */
    public function show(Modelo $modelo)
    {
        //
        return view ('eventos.show',compact('evento'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modelo $modelo)
    {
        //
        return view('eventos.edit', compact('evento'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModeloRequest $request, Modelo $modelo)
    {
        //
        $evento->update($request->all());

        return redirect()->route('eventos.index')
        ->with('success','Evento atualizado com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modelo $modelo)
    {
        //
        $evento->delete();

        return redirect()->rout('eventos.index')
        ->with('success' , 'Evento removido com sucesso');
        
    }
}
