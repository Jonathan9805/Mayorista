<?php

namespace App\Http\Controllers;

use App\Models\Cangrejo;
use Illuminate\Http\Request;

class CangrejosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cangrejos = Cangrejo::all();
        return view('admin.cangrejos.index', compact('cangrejos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cangrejos.create');
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
        $cangrejo = new Cangrejo();
        $cangrejo->giro_comercial = $request->input('giro_comercial');
        $cangrejo->numero_local = $request->input('numero_local');
        $cangrejo->metraje = $request->input('metraje');
        $cangrejo->arriendo = $request->input('arriendo');
        $cangrejo->medidor = $request->input('medidor');
        $cangrejo->save();
        return redirect()->route('admin.cangrejos.index')->with('mensaje', 'local creado con exito')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cangrejo = Cangrejo::findOrFail($id);
        return view('admin.cangrejos.show', compact('cangrejo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cangrejo = Cangrejo::findOrFail($id);
        return view('admin.cangrejos.edit', compact('cangrejo'));
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

        $cangrejo = Cangrejo::findOrFail($id);
        $cangrejo->giro_comercial = $request->input('giro_comercial');
        $cangrejo->numero_local = $request->input('numero_local');
        $cangrejo->metraje = $request->input('metraje');
        $cangrejo->arriendo = $request->input('arriendo');
        $cangrejo->medidor = $request->input('medidor');
        $cangrejo->save();
        return redirect()->route('admin.cangrejos.index')->with('mensaje', 'Local editado con exito')
        ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cangrejo::destroy($id);
        return redirect()->route('admin.cangrejos.index')->with('mensaje', 'Local eliminado con exito')
        ->with('icono', 'success');
    }
}
