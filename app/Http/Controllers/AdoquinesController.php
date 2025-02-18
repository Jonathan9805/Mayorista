<?php

namespace App\Http\Controllers;

use App\Models\Adoquin;
use Illuminate\Http\Request;

class AdoquinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adoquines = Adoquin::all();
        return view('admin.adoquines.index', compact('adoquines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.adoquines.create');
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
        $adoquin = new Adoquin();
        $adoquin->giro_comercial = $request->input('giro_comercial');
        $adoquin->numero_local = $request->input('numero_local');
        $adoquin->metraje = $request->input('metraje');
        $adoquin->arriendo = $request->input('arriendo');
        $adoquin->medidor = $request->input('medidor');
        $adoquin->save();
        return redirect()->route('admin.adoquines.index')->with('mensaje', 'local creado con exito')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $adoquin = Adoquin::findOrFail($id);
        return view('admin.adoquines.show', compact('adoquin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $adoquin = Adoquin::findOrFail($id);
        return view('admin.adoquines.edit', compact('adoquin'));
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

        $adoquin = Adoquin::findOrFail($id);
        $adoquin->giro_comercial = $request->input('giro_comercial');
        $adoquin->numero_local = $request->input('numero_local');
        $adoquin->metraje = $request->input('metraje');
        $adoquin->arriendo = $request->input('arriendo');
        $adoquin->medidor = $request->input('medidor');
        $adoquin->save();
        return redirect()->route('admin.adoquines.index')->with('mensaje', 'Local editado con exito')
        ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Adoquin::destroy($id);
        return redirect()->route('admin.adoquines.index')->with('mensaje', 'Local eliminado con exito')
        ->with('icono', 'success');
    }
}
