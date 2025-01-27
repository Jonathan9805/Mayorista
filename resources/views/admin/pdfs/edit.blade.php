@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Editar Documento</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Actualizar Datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/pdfs/'. $pdf->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nombre">Nombre del Documento</label><b>*</b>
                                    <input type="text" name="nombre" class="form-control" value="{{ $pdf->nombre }}" required>
                                    @error('nombre')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            @php
                                $fields = [
                                    'solicitud' => 'Solicitud',
                                    'cedula' => 'Cédula de Identidad',
                                    'pago_patente' => 'Pago de Patente',
                                    'no_adeudar' => 'Certificado No Adeudar',
                                    'especie' => 'Especie Valorada',
                                    'ruc' => 'RUC',
                                    'cursos' => 'Certificados de Cursos',
                                    'certificado_salud' => 'Certificado de Salud',
                                    'certificado_honorabilidad1' => 'Certificado de Honorabilidad 1',
                                    'certificado_honorabilidad2' => 'Certificado de Honorabilidad 2'
                                ];
                            @endphp
                            @foreach ($fields as $field => $label)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="{{ $field }}">{{ $label }}</label><b>*</b>
                                        <input type="file" name="{{ $field }}" class="form-control">
                                        @if (!empty($pdf->$field))
                                            <small>
                                                Archivo Actual: 
                                                <a href="{{ asset('storage/' . $pdf->$field) }}" target="_blank">Ver</a>
                                            </small>
                                        @endif
                                        @error($field)
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="{{ url('admin/pdfs') }}" class="btn btn-danger">Cancelar</a>
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
