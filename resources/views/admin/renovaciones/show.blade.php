@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Detalles del Documento</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Información del Documento</h3>
                </div>
                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $renovacion->nombre }}</p>
                    <p><strong>Solicitud Dirigida al Director de Servicios Públicos Municipales</strong>
                        <a href="{{ asset('storage/' . $renovacion->solicitud) }}" target="_blank">Ver PDF</a>
                    </p>
                    <p><strong>Cédula de identidad, papeleta de votación</strong>
                        <a href="{{ asset('storage/' . $renovacion->cedula) }}" target="_blank">Ver PDF</a>
                    </p>
                    <p><strong>Pago de la Patente Municipal</strong>
                        <a href="{{ asset('storage/' . $renovacion->pago_patente) }}" target="_blank">Ver PDF</a>
                    </p>
                    <p><strong>Certificado de no Adeudar al GAD Municipal Latacunga</strong>
                        <a href="{{ asset('storage/' . $renovacion->no_adeudar) }}" target="_blank">Ver PDF</a>
                    </p>
                    <p><strong>Carta de pago del mes en curso</strong>
                        <a href="{{ asset('storage/' . $renovacion->carta) }}" target="_blank">Ver PDF</a>
                    </p>
                    <p><strong>Especie Valorada de Ocupación de la Vía Publica</strong>
                        <a href="{{ asset('storage/' . $renovacion->especie) }}" target="_blank">Ver PDF</a>
                    </p>
                    <p><strong>RIMPE o RUC otorgados por el SRI</strong>
                        <a href="{{ asset('storage/' . $renovacion->ruc) }}" target="_blank">Ver PDF</a>
                    </p>
                    <p><strong>Certificado de Salud</strong>
                        <a href="{{ asset('storage/' . $renovacion->certificado_salud) }}" target="_blank">Ver PDF</a>
                    </p>
                    <p><strong>Informe o Certificación de factibilidad para Renovación</strong>
                        <a href="{{ asset('storage/' . $renovacion->renovacion) }}" target="_blank">Ver PDF</a>
                    </p>
                    
                    <a href="{{ url('admin/renovaciones') }}" class="btn btn-primary">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
