<?php

namespace App\Http\Controllers;

use App\Models\Abasto;
use Illuminate\Http\Request;

class AbastosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abastos = Abasto::all();
        return view('admin.abastos.index', compact('abastos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.abastos.create');
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
        $abasto = new Abasto();
        $abasto->giro_comercial = $request->input('giro_comercial');
        $abasto->numero_local = $request->input('numero_local');
        $abasto->metraje = $request->input('metraje');
        $abasto->arriendo = $request->input('arriendo');
        $abasto->medidor = $request->input('medidor');
        $abasto->save();
        return redirect()->route('admin.abastos.index')->with('mensaje', 'local creado con exito')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $abasto = Abasto::findOrFail($id);
        return view('admin.abastos.show', compact('abasto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $abasto = Abasto::findOrFail($id);
        return view('admin.abastos.edit', compact('abasto'));
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

        $abasto = Abasto::findOrFail($id);
        $abasto->giro_comercial = $request->input('giro_comercial');
        $abasto->numero_local = $request->input('numero_local');
        $abasto->metraje = $request->input('metraje');
        $abasto->arriendo = $request->input('arriendo');
        $abasto->medidor = $request->input('medidor');
        $abasto->save();
        return redirect()->route('admin.abastos.index')->with('mensaje', 'Local editado con exito')
        ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Abasto::destroy($id);
        return redirect()->route('admin.abastos.index')->with('mensaje', 'Local eliminado con exito')
        ->with('icono', 'success');
    }
}
