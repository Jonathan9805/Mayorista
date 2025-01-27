<?php

namespace App\Http\Controllers;

use App\Models\PdfFile;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pdfs = PdfFile::all();
        return view('admin.pdfs.index', compact('pdfs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pdfs.create');
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
            'especie'=>'required|file',
            'ruc'=>'required|file',
            'cursos'=>'required|file',
            'certificado_salud'=>'required|file',
            'certificado_honorabilidad1'=>'required|file',
            'certificado_honorabilidad2'=>'required|file',
        ]);
        $pdf = new PdfFile();
        $pdf->nombre = $request->input('nombre');
        $pdf->solicitud = $request->file('solicitud')->store('pdfs', 'public');
        $pdf->cedula = $request->file('cedula')->store('pdfs', 'public');
        $pdf->pago_patente = $request->file('pago_patente')->store('pdfs', 'public');
        $pdf->no_adeudar = $request->file('no_adeudar')->store('pdfs', 'public');
        $pdf->especie = $request->file('especie')->store('pdfs', 'public');
        $pdf->ruc = $request->file('ruc')->store('pdfs', 'public');
        $pdf->cursos = $request->file('cursos')->store('pdfs', 'public');
        $pdf->certificado_salud = $request->file('certificado_salud')->store('pdfs', 'public');
        $pdf->certificado_honorabilidad1 = $request->file('certificado_honorabilidad1')->store('pdfs', 'public');
        $pdf->certificado_honorabilidad2 = $request->file('certificado_honorabilidad2')->store('pdfs', 'public');
        $pdf->save();

        return redirect()->route('admin.pdfs.index')->with('mensaje', 'documentos creado con exito')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pdf = PdfFile::findOrFail($id);
        return view('admin.pdfs.show', compact('pdf'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pdf = PdfFile::findOrFail($id);
        return view('admin.pdfs.edit', compact('pdf'));
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
            'especie' => 'nullable|file',
            'ruc' => 'nullable|file',
            'cursos' => 'nullable|file',
            'certificado_salud' => 'nullable|file',
            'certificado_honorabilidad1' => 'nullable|file',
            'certificado_honorabilidad2' => 'nullable|file',
        ]);
    
        $pdf = PdfFile::findOrFail($id);
        $pdf->nombre = $request->input('nombre');
    
        // Verifica si se suben nuevos archivos y actualiza las rutas
        if ($request->hasFile('solicitud')) {
            $pdf->solicitud = $request->file('solicitud')->store('pdfs', 'public');
        }
        if ($request->hasFile('cedula')) {
            $pdf->cedula = $request->file('cedula')->store('pdfs', 'public');
        }
        if ($request->hasFile('pago_patente')) {
            $pdf->pago_patente = $request->file('pago_patente')->store('pdfs', 'public');
        }
        if ($request->hasFile('no_adeudar')) {
            $pdf->no_adeudar = $request->file('no_adeudar')->store('pdfs', 'public');
        }
        if ($request->hasFile('especie')) {
            $pdf->especie = $request->file('especie')->store('pdfs', 'public');
        }
        if ($request->hasFile('ruc')) {
            $pdf->ruc = $request->file('ruc')->store('pdfs', 'public');
        }
        if ($request->hasFile('cursos')) {
            $pdf->cursos = $request->file('cursos')->store('pdfs', 'public');
        }
        if ($request->hasFile('certificado_salud')) {
            $pdf->certificado_salud = $request->file('certificado_salud')->store('pdfs', 'public');
        }
        if ($request->hasFile('certificado_honorabilidad1')) {
            $pdf->certificado_honorabilidad1 = $request->file('certificado_honorabilidad1')->store('pdfs', 'public');
        }
        if ($request->hasFile('certificado_honorabilidad2')) {
            $pdf->certificado_honorabilidad2 = $request->file('certificado_honorabilidad2')->store('pdfs', 'public');
        }
    
        $pdf->save();
        return redirect()->route('admin.pdfs.index')->with('mensaje', 'documentos editado con exito')
            ->with('icono', 'success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //$pdf = PdfFile::findOrFail($id);

    // Elimina solo el registro de la base de datos sin preocuparte por los archivos
    PdfFile::destroy($id);
        
        
        return redirect()->route('admin.pdfs.index')->with('mensaje', 'documentos eliminado con exito')
        ->with('icono', 'success');
    }
}
