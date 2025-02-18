@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Registro de locales</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Completar Datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/ropas/create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form group">
                                    <label for="">Giro Comercial</label><b>*</b>
                                    <br>
                                    <input type="text" name="giro_comercial" value="{{ old('giro_comercial') }}" class="form-control" required>
                                    @error('giro_comercial')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <div class="form group">
                                    <label for="">Número de local</label><b>*</b>
                                    <br>
                                    <input type="text" name="numero_local" value="{{ old('numero_local') }}" class="form-control" required>
                                    @error('numero_local')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <div class="form group">
                                    <label for="">Metraje ocupado</label><b>*</b>
                                    <br>
                                    <input type="text" name="metraje" value="{{ old('metraje') }}" class="form-control" required>
                                    @error('metraje')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="form group">
                                    <label for="">Valor de arriendo</label><b>*</b>
                                    <input type="text" name="arriendo" value="{{ old('arriendo') }}" class="form-control" required>
                                    @error('arriendo')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="form group">
                                    <label for="">Tiene medidor a favor del GADMCL</label><b>*</b>
                                    <input type="text" name="medidor"  class="form-control" required>
                                    @error('medidor')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <br>
                                        <a href="{{ url('admin/ropas') }}" class="btn btn-danger">Cancelar</a>
                                        <button type="submit" class="btn btn-primary">Registrar</button>
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
