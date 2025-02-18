<?php

namespace App\Http\Controllers;

use App\Models\Flor;
use Illuminate\Http\Request;

class FloresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flores = Flor::all();
        return view('admin.flores.index', compact('flores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.flores.create');
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
        $flor = new Flor();
        $flor->giro_comercial = $request->input('giro_comercial');
        $flor->numero_local = $request->input('numero_local');
        $flor->metraje = $request->input('metraje');
        $flor->arriendo = $request->input('arriendo');
        $flor->medidor = $request->input('medidor');
        $flor->save();
        return redirect()->route('admin.flores.index')->with('mensaje', 'local creado con exito')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $flor = Flor::findOrFail($id);
        return view('admin.flores.show', compact('flor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $flor = Flor::findOrFail($id);
        return view('admin.flores.edit', compact('flor'));
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

        $flor = Flor::findOrFail($id);
        $flor->giro_comercial = $request->input('giro_comercial');
        $flor->numero_local = $request->input('numero_local');
        $flor->metraje = $request->input('metraje');
        $flor->arriendo = $request->input('arriendo');
        $flor->medidor = $request->input('medidor');
        $flor->save();
        return redirect()->route('admin.flores.index')->with('mensaje', 'Local editado con exito')
        ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Flor::destroy($id);
        return redirect()->route('admin.flores.index')->with('mensaje', 'Local eliminado con exito')
        ->with('icono', 'success');
    }
}
