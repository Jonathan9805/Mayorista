<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Illuminate\Http\Request;

class AlimentosController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alimentos = Alimento::all();
        return view('admin.alimentos.index', compact('alimentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.alimentos.create');
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
        $alimento = new Alimento();
        $alimento->giro_comercial = $request->input('giro_comercial');
        $alimento->numero_local = $request->input('numero_local');
        $alimento->metraje = $request->input('metraje');
        $alimento->arriendo = $request->input('arriendo');
        $alimento->medidor = $request->input('medidor');
        $alimento->save();
        return redirect()->route('admin.alimentos.index')->with('mensaje', 'local creado con exito')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alimento = Alimento::findOrFail($id);
        return view('admin.alimentos.show', compact('alimento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alimento = Alimento::findOrFail($id);
        return view('admin.alimentos.edit', compact('alimento'));
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

        $alimento = Alimento::findOrFail($id);
        $alimento->giro_comercial = $request->input('giro_comercial');
        $alimento->numero_local = $request->input('numero_local');
        $alimento->metraje = $request->input('metraje');
        $alimento->arriendo = $request->input('arriendo');
        $alimento->medidor = $request->input('medidor');
        $alimento->save();
        return redirect()->route('admin.alimentos.index')->with('mensaje', 'Local editado con exito')
        ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Alimento::destroy($id);
        return redirect()->route('admin.alimentos.index')->with('mensaje', 'Local eliminado con exito')
        ->with('icono', 'success');
    }
}
