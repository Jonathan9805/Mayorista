<?php

namespace App\Http\Controllers;

use App\Models\Ajo;
use Illuminate\Http\Request;

class AjosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ajos = Ajo::all();
        return view('admin.ajos.index', compact('ajos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ajos.create');
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
        $ajo = new Ajo();
        $ajo->giro_comercial = $request->input('giro_comercial');
        $ajo->numero_local = $request->input('numero_local');
        $ajo->metraje = $request->input('metraje');
        $ajo->arriendo = $request->input('arriendo');
        $ajo->medidor = $request->input('medidor');
        $ajo->save();
        return redirect()->route('admin.ajos.index')->with('mensaje', 'local creado con exito')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ajo = Ajo::findOrFail($id);
        return view('admin.ajos.show', compact('ajo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ajo = Ajo::findOrFail($id);
        return view('admin.ajos.edit', compact('ajo'));
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

        $ajo = Ajo::findOrFail($id);
        $ajo->giro_comercial = $request->input('giro_comercial');
        $ajo->numero_local = $request->input('numero_local');
        $ajo->metraje = $request->input('metraje');
        $ajo->arriendo = $request->input('arriendo');
        $ajo->medidor = $request->input('medidor');
        $ajo->save();
        return redirect()->route('admin.ajos.index')->with('mensaje', 'Local editado con exito')
        ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ajo::destroy($id);
        return redirect()->route('admin.ajos.index')->with('mensaje', 'Local eliminado con exito')
        ->with('icono', 'success');
    }
}
