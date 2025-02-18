@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Listado de documentos</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Documentos Registrados</h3>
                    <div class="card-tools">
                        <a href="{{ url('admin/pdfs/create') }}" class="btn btn-primary">
                            Registrar documentos
                        </a>
                        <a href="{{ url('/') }}" class="btn btn-danger">Volver</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover table-sm ">
                        <thead class="table-dark">
                            <tr>
                                <td style="text-align: center">Id</td>
                                <td style="text-align: center">Nombre</td>
                                <td style="text-align: center">Solicitud Dirigida al Director de Servicios Públicos
                                    Municipales</td>
                                <td style="text-align: center">Cédula de identidad, papeleta de votación</td>
                                <td style="text-align: center">Pago de la Patente Municipal</td>
                                <td style="text-align: center">Certificado de no Adeudar al GAD Municipal Latacunga</td>
                                <td style="text-align: center">Especie Valorada de Ocupación de la Vía Publica</td>
                                <td style="text-align: center">RIMPE o RUC otorgados por el SRI</td>
                                <td style="text-align: center">Certificados de Cursos otorgados por el GAD Latacunga</td>
                                <td style="text-align: center">Certificado de Salud</td>
                                <td style="text-align: center">Certificados de Honorabilidad 1</td>
                                <td style="text-align: center">Certificados de Honorabilidad 2</td>
                                <td style="text-align: center">Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 1; ?>
                            @foreach ($pdfs as $pdf)
                                <tr>
                                    <td style="text-align: center">{{ $contador++ }}</td>
                                    <td style="text-align: center">{{ $pdf->nombre }}</td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $pdf->solicitud) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $pdf->cedula) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $pdf->pago_patente) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $pdf->no_adeudar) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $pdf->especie) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $pdf->ruc) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $pdf->cursos) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $pdf->certificado_salud) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $pdf->certificado_honorabilidad1) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $pdf->certificado_honorabilidad2) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align:center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ url('admin/pdfs/'.$pdf->id) }}" class="btn btn-outline-success btn-sm" title="Ver">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                            <a href="{{ url('admin/pdfs/'.$pdf->id.'/edit') }}" class="btn btn-outline-primary btn-sm" title="Editar">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <form action="{{ route('admin.pdfs.destroy', $pdf->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este documento?')">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
