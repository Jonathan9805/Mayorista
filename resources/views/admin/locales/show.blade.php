@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Nombre: {{ $local->giro_comercial }}</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos Registrados</h3>
                </div>
                <div class="card-body">
                   
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form group">
                                    <label for="">Giro Comercial</label><b>*</b>
                                    <p>{{ $local->giro_comercial }}</p>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <div class="form group">
                                    <label for="">Número de local</label><b>*</b>
                                    <p>{{ $local->numero_local }}</p>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <div class="form group">
                                    <label for="">Metraje ocupado</label><b>*</b>
                                    <p>{{ $local->metraje }}</p>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-8">
                                <div class="form group">
                                    <label for="">Valor de arriendo</label><b>*</b>
                                    <p>{{ $local->arriendo }}</p>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <div class="form group">
                                    <label for="">Tiene medidor a favor del GADMCL</label><b>*</b>
                                    <p>{{ $local->medidor }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <br>
                                        <a href="{{ url('admin/locales') }}" class="btn btn-danger">Cancelar</a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>


                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
