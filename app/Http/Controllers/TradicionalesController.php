<?php

namespace App\Http\Controllers;

use App\Models\Tradicional;
use Illuminate\Http\Request;

class TradicionalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tradicionales = Tradicional::all();
        return view('admin.tradicionales.index', compact('tradicionales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tradicionales.create');
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
        $tradicional = new Tradicional();
        $tradicional->giro_comercial = $request->input('giro_comercial');
        $tradicional->numero_local = $request->input('numero_local');
        $tradicional->metraje = $request->input('metraje');
        $tradicional->arriendo = $request->input('arriendo');
        $tradicional->medidor = $request->input('medidor');
        $tradicional->save();
        return redirect()->route('admin.tradicionales.index')->with('mensaje', 'local creado con exito')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tradicional = Tradicional::findOrFail($id);
        return view('admin.tradicionales.show', compact('tradicional'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tradicional = Tradicional::findOrFail($id);
        return view('admin.tradicionales.edit', compact('tradicional'));
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

        $tradicional = Tradicional::findOrFail($id);
        $tradicional->giro_comercial = $request->input('giro_comercial');
        $tradicional->numero_local = $request->input('numero_local');
        $tradicional->metraje = $request->input('metraje');
        $tradicional->arriendo = $request->input('arriendo');
        $tradicional->medidor = $request->input('medidor');
        $tradicional->save();
        return redirect()->route('admin.tradicionales.index')->with('mensaje', 'Local editado con exito')
        ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tradicional::destroy($id);
        return redirect()->route('admin.tradicionales.index')->with('mensaje', 'Local eliminado con exito')
        ->with('icono', 'success');
    }
}

