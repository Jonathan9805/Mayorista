<?php

namespace App\Http\Controllers;

use App\Models\Fruta;
use Illuminate\Http\Request;

class FrutasController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frutas = Fruta::all();
        return view('admin.frutas.index', compact('frutas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.frutas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'giro_comercial' => 'required|string|max:255',
            'numero_local'=>'required',
            'metraje'=>'required',
            'arriendo'=>'required',
            'medidor'=>'required',       
        ]);
        $fruta = new Fruta();
        $fruta->giro_comercial = $request->input('giro_comercial');
        $fruta->numero_local = $request->input('numero_local');
        $fruta->metraje = $request->input('metraje');
        $fruta->arriendo = $request->input('arriendo');
        $fruta->medidor = $request->input('medidor');
        $fruta->save();
        return redirect()->route('admin.frutas.index')->with('mensaje', 'local creado con exito')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fruta = Fruta::findOrFail($id);
        return view('admin.frutas.show', compact('fruta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fruta = Fruta::findOrFail($id);
        return view('admin.frutas.edit', compact('fruta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'giro_comercial' => 'required|string|max:255',
            'numero_local'=>'required',
            'metraje'=>'required',
            'arriendo'=>'required',
            'medidor'=>'required',       
        ]);

        $fruta = Fruta::findOrFail($id);
        $fruta->giro_comercial = $request->input('giro_comercial');
        $fruta->numero_local = $request->input('numero_local');
        $fruta->metraje = $request->input('metraje');
        $fruta->arriendo = $request->input('arriendo');
        $fruta->medidor = $request->input('medidor');
        $fruta->save();
        return redirect()->route('admin.frutas.index')->with('mensaje', 'Local editado con exito')
        ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Fruta::destroy($id);
        return redirect()->route('admin.frutas.index')->with('mensaje', 'Local eliminado con exito')
        ->with('icono', 'success');
    }
}
