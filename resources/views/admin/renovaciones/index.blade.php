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
                    <h3 class="card-title">Renovaciones Registradas</h3>
                    <div class="card-tools">
                        <a href="{{ url('admin/renovaciones/create') }}" class="btn btn-primary">
                            Registrar documentos
                        </a>
                        <a href="{{ url('custom-page') }}" class="btn btn-danger">Volver</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover table-sm ">
                        <thead class="table-dark">
                            <tr>
                                <td style="text-align: center">Id</td>
                                <td style="text-align: center">Nombre</td>
                                <td style="text-align: center">Solicitud en especie valorada dirigida al señor Director de Servicios Públicos Municipales</td>
                                <td style="text-align: center">Cédula de identidad, papeleta de votación y carnet de identificación.</td>
                                <td style="text-align: center">Pago de la Patente Municipal al año en curso</td>
                                <td style="text-align: center">Certificado de no Adeudar al GAD Municipal Latacunga</td>
                                <td style="text-align: center">Carta de pago del mes en curso</td>
                                <td style="text-align: center">Especie Valorada de Ocupación de la Vía Publica</td>
                                <td style="text-align: center">RIMPE o RUC otorgados por el SRI</td>
                                <td style="text-align: center">Certificado de Salud</td>
                                <td style="text-align: center">Informe o Certificación de factibilidad para Renovación</td>
                                <td style="text-align: center">Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 1; ?>
                            @foreach ($renovaciones as $renovacion)
                                <tr>
                                    <td style="text-align: center">{{ $contador++ }}</td>
                                    <td style="text-align: center">{{ $renovacion->nombre }}</td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $renovacion->solicitud) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $renovacion->cedula) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $renovacion->pago_patente) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $renovacion->no_adeudar) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>

                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $renovacion->carta) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $renovacion->especie) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $renovacion->ruc) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $renovacion->certificado_salud) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ asset('storage/' . $renovacion->renovacion) }}" target="_blank">
                                            <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" style="width: 30px; height: auto;">
                                        </a>
                                    </td>
                                    <td style="text-align:center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ url('admin/renovaciones/'.$renovacion->id) }}" class="btn btn-outline-success btn-sm" title="Ver">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                            <a href="{{ url('admin/renovaciones/'.$renovacion->id.'/edit') }}" class="btn btn-outline-primary btn-sm" title="Editar">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <form action="{{ route('admin.renovaciones.destroy', $renovacion->id) }}" method="POST" style="display: inline-block;">
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
