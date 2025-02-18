<?php

namespace App\Http\Controllers;

use App\Models\Frutilla;
use Illuminate\Http\Request;

class FrutillasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frutillas = Frutilla::all();
        return view('admin.frutillas.index', compact('frutillas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.frutillas.create');
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
        $frutilla = new Frutilla();
        $frutilla->giro_comercial = $request->input('giro_comercial');
        $frutilla->numero_local = $request->input('numero_local');
        $frutilla->metraje = $request->input('metraje');
        $frutilla->arriendo = $request->input('arriendo');
        $frutilla->medidor = $request->input('medidor');
        $frutilla->save();
        return redirect()->route('admin.frutillas.index')->with('mensaje', 'local creado con exito')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $frutilla = Frutilla::findOrFail($id);
        return view('admin.frutillas.show', compact('frutilla'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $frutilla = Frutilla::findOrFail($id);
        return view('admin.frutillas.edit', compact('frutilla'));
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

        $frutilla = Frutilla::findOrFail($id);
        $frutilla->giro_comercial = $request->input('giro_comercial');
        $frutilla->numero_local = $request->input('numero_local');
        $frutilla->metraje = $request->input('metraje');
        $frutilla->arriendo = $request->input('arriendo');
        $frutilla->medidor = $request->input('medidor');
        $frutilla->save();
        return redirect()->route('admin.frutillas.index')->with('mensaje', 'Local editado con exito')
        ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Frutilla::destroy($id);
        return redirect()->route('admin.frutillas.index')->with('mensaje', 'Local eliminado con exito')
        ->with('icono', 'success');
    }
}
