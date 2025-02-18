<?php

namespace App\Http\Controllers;

use App\Models\Ropa;
use Illuminate\Http\Request;

class RopasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ropas = Ropa::all();
        return view('admin.ropas.index', compact('ropas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ropas.create');
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
        $ropa = new Ropa();
        $ropa->giro_comercial = $request->input('giro_comercial');
        $ropa->numero_local = $request->input('numero_local');
        $ropa->metraje = $request->input('metraje');
        $ropa->arriendo = $request->input('arriendo');
        $ropa->medidor = $request->input('medidor');
        $ropa->save();
        return redirect()->route('admin.ropas.index')->with('mensaje', 'local creado con exito')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ropa = Ropa::findOrFail($id);
        return view('admin.ropas.show', compact('ropa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ropa = Ropa::findOrFail($id);
        return view('admin.ropas.edit', compact('ropa'));
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

        $ropa = Ropa::findOrFail($id);
        $ropa->giro_comercial = $request->input('giro_comercial');
        $ropa->numero_local = $request->input('numero_local');
        $ropa->metraje = $request->input('metraje');
        $ropa->arriendo = $request->input('arriendo');
        $ropa->medidor = $request->input('medidor');
        $ropa->save();
        return redirect()->route('admin.ropas.index')->with('mensaje', 'Local editado con exito')
        ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ropa::destroy($id);
        return redirect()->route('admin.ropas.index')->with('mensaje', 'Local eliminado con exito')
        ->with('icono', 'success');
    }
}
