@extends('layouts.admin')
@section('content')
<div class="row">
    <h1>Registro de documentos</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Registro de documentos</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/admin/renovaciones/create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
                            @error('nombre')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Solicitud Dirigida al Director de Servicios Públicos Municipales</label><b>*</b>
                                <br>
                                <input type="file" name="solicitud" value="{{ old('solicitud') }}" class="form-control" required>
                                @error('solicitud')
                                <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Cédula de identidad, papeleta de votación</label><b>*</b>
                                <br>
                                <input type="file" name="cedula" value="{{ old('cedula') }}" class="form-control" required>
                                @error('cedula')
                                <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Pago de la Patente Municipal</label><b>*</b>
                                <br>
                                <input type="file" name="pago_patente" value="{{ old('pago_patente') }}" class="form-control" required>
                                @error('pago_patente')
                                <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Certificado de no Adeudar al GAD Municipal Latacunga</label><b>*</b>
                                <br>
                                <input type="file" name="no_adeudar" value="{{ old('no_adeudar') }}" class="form-control" required>
                                @error('no_adeudar')
                                <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Carta de pago del mes en curso</label><b>*</b>
                                <br>
                                <input type="file" name="carta" value="{{ old('carta') }}" class="form-control" required>
                                @error('carta')
                                <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Especie Valorada de Ocupación de la Vía Publica</label><b>*</b>
                                <br>
                                <input type="file" name="especie" value="{{ old('especie') }}" class="form-control" required>
                                @error('especie')
                                <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">RIMPE o RUC otorgados por el SRI</label><b>*</b>
                                <br>
                                <input type="file" name="ruc" value="{{ old('ruc') }}" class="form-control" required>
                                @error('ruc')
                                <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Certificados de Cursos otorgados por el GAD Latacunga</label><b>*</b>
                                <br>
                                <input type="file" name="cursos" value="{{ old('cursos') }}" class="form-control" required>
                                @error('cursos')
                                <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Certificado de Salud</label><b>*</b>
                                <br>
                                <input type="file" name="certificado_salud" value="{{ old('certificado_salud') }}" class="form-control" required>
                                @error('certificado_salud')
                                <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Informe o Certificación de factibilidad para Renovación</label><b>*</b>
                                <br>
                                <input type="file" name="renovacion" value="{{ old('renovacion') }}" class="form-control" required>
                                @error('renovacion')
                                <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <br>
                                    <a href="{{ url('admin/renovaciones') }}" class="btn btn-danger">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
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


