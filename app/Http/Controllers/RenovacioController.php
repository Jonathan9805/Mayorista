<?php

namespace App\Http\Controllers;

use App\Models\Renovacion;
use Illuminate\Http\Request;

class RenovacioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $renovaciones = Renovacion::all();
        return view('admin.renovaciones.index', compact('renovaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.renovaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'solicitud'=>'required|file',
            'cedula'=>'required|file',
            'pago_patente'=>'required|file',
            'no_adeudar'=>'required|file',
            'carta'=>'required|file',
            'especie'=>'required|file',
            'ruc'=>'required|file',
            'certificado_salud'=>'required|file',
            'renovacion'=>'required|file',
            
        ]);
        $renovacion = new Renovacion();
        $renovacion->nombre = $request->input('nombre');
        $renovacion->solicitud = $request->file('solicitud')->store('renovaciones', 'public');
        $renovacion->cedula = $request->file('cedula')->store('renovaciones', 'public');
        $renovacion->pago_patente = $request->file('pago_patente')->store('renovaciones', 'public');
        $renovacion->no_adeudar = $request->file('no_adeudar')->store('renovaciones', 'public');
        $renovacion->carta = $request->file('carta')->store('renovaciones', 'public');
        $renovacion->especie = $request->file('especie')->store('renovaciones', 'public');
        $renovacion->ruc = $request->file('ruc')->store('renovaciones', 'public');
        $renovacion->certificado_salud = $request->file('certificado_salud')->store('renovaciones', 'public');
        $renovacion->renovacion = $request->file('renovacion')->store('renovaciones', 'public');
        $renovacion->save();

        return redirect()->route('admin.renovaciones.index')->with('mensaje', 'documentos creado con exito')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $renovacion = Renovacion::findOrFail($id);
        return view('admin.renovaciones.show', compact('renovacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $renovacion = Renovacion::findOrFail($id);
        return view('admin.renovaciones.edit', compact('renovacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'solicitud' => 'nullable|file',
            'cedula' => 'nullable|file',
            'pago_patente' => 'nullable|file',
            'no_adeudar' => 'nullable|file',
            'carta' => 'nullable|file',
            'especie' => 'nullable|file',
            'ruc' => 'nullable|file',
            'certificado_salud' => 'nullable|file',
            'renovacion' => 'nullable|file',
        ]);
    
        $renovacion = Renovacion::findOrFail($id);
        $renovacion->nombre = $request->input('nombre');
    
        // Verifica si se suben nuevos archivos y actualiza las rutas
        if ($request->hasFile('solicitud')) {
            $renovacion->solicitud = $request->file('solicitud')->store('renovaciones', 'public');
        }
        if ($request->hasFile('cedula')) {
            $renovacion->cedula = $request->file('cedula')->store('renovaciones', 'public');
        }
        if ($request->hasFile('pago_patente')) {
            $renovacion->pago_patente = $request->file('pago_patente')->store('renovaciones', 'public');
        }
        if ($request->hasFile('no_adeudar')) {
            $renovacion->no_adeudar = $request->file('no_adeudar')->store('renovaciones', 'public');
        }
        if ($request->hasFile('carta')) {
            $renovacion->carta = $request->file('carta')->store('renovaciones', 'public');
        }
        if ($request->hasFile('especie')) {
            $renovacion->especie = $request->file('especie')->store('renovaciones', 'public');
        }
        if ($request->hasFile('ruc')) {
            $renovacion->ruc = $request->file('ruc')->store('renovaciones', 'public');
        }
        if ($request->hasFile('certificado_salud')) {
            $renovacion->certificado_salud = $request->file('certificado_salud')->store('renovaciones', 'public');
        }
        if ($request->hasFile('renovacion')) {
            $renovacion->renovacion = $request->file('renovacion')->store('renovaciones', 'public');
        }
       
    
        $renovacion->save();
        return redirect()->route('admin.renovaciones.index')->with('mensaje', 'documentos editado con exito')
            ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Renovacion::destroy($id);
        
        
        return redirect()->route('admin.renovaciones.index')->with('mensaje', 'documentos eliminado con exito')
        ->with('icono', 'success');
    }
}
