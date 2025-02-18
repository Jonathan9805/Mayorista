@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Editar puestos: {{ $cangrejo->giro_comercial }}</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Completar Datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/cangrejos/'.$cangrejo->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Giro Comercial</label><b>*</b>
                                    <input type="text" name="giro_comercial" value="{{ $cangrejo->giro_comercial }}" class="form-control" required>
                                    @error('giro_comercial')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Número de local</label><b>*</b>
                                    <input type="text" name="numero_local" value="{{ $cangrejo->numero_local }}" class="form-control" required>
                                    @error('numero_local')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <br>
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Metraje ocupado</label><b>*</b>
                                    <input type="text" name="metraje" value="{{ $cangrejo->metraje }}" class="form-control" required>
                                    @error('metraje')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Valor de arriendo</label><b>*</b>
                                    <input type="text" name="arriendo" value="{{ $cangrejo->arriendo }}" class="form-control" required>
                                    @error('arriendo')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Tiene medidor a favor del GADMCL</label><b>*</b>
                                    <input type="text" name="medidor" value="{{ $cangrejo->medidor }}" class="form-control" required>
                                    @error('medidor')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <br>
                                        <a href="{{ url('admin/cangrejos') }}" class="btn btn-danger">Cancelar</a>
                                        <button type="submit" class="btn btn-success">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
