<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;

class LocalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locales = Local::all();
        return view('admin.locales.index', compact('locales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.locales.create');
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
        $local = new Local();
        $local->giro_comercial = $request->input('giro_comercial');
        $local->numero_local = $request->input('numero_local');
        $local->metraje = $request->input('metraje');
        $local->arriendo = $request->input('arriendo');
        $local->medidor = $request->input('medidor');
        $local->save();
        return redirect()->route('admin.locales.index')->with('mensaje', 'local creado con exito')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $local = Local::findOrFail($id);
        return view('admin.locales.show', compact('local'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $local = Local::findOrFail($id);
        return view('admin.locales.edit', compact('local'));
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

        $local = Local::findOrFail($id);
        $local->giro_comercial = $request->input('giro_comercial');
        $local->numero_local = $request->input('numero_local');
        $local->metraje = $request->input('metraje');
        $local->arriendo = $request->input('arriendo');
        $local->medidor = $request->input('medidor');
        $local->save();
        return redirect()->route('admin.locales.index')->with('mensaje', 'Local editado con exito')
        ->with('icono', 'success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Local::destroy($id);
        return redirect()->route('admin.locales.index')->with('mensaje', 'Local eliminado con exito')
        ->with('icono', 'success');
    }
}
