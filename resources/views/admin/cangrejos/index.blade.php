@extends('layouts.admin')
@section('content')
<div class="row">
    <h1>Listado de puestos sector Cangrejos </h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Puestos Disponibles</h3>
                <div class="card-tools">
                    <a href="{{ url('admin/cangrejos/create') }}" class="btn btn-primary">
                        Registrar Puesto
                    </a>
                    <a href="{{ url('/') }}" class="btn btn-warning">Volver</a>
                </div>

            </div>

            <div class="card-body">
               
                <table id="example1" class="table table-striped table-bordered table-hover table-sm ">
                    <thead class="table-dark">
                        <tr>
                            <td style="text-align: center">Id</td>
                            <td style="text-align: center">Giro Comercial</td>
                            <td style="text-align: center">Número de local</td>
                            <td style="text-align: center">Metraje ocupado</td>
                            <td style="text-align: center">Valor de arriendo</td>
                            <td style="text-align: center">Tiene medidor</td>
                            <td style="text-align: center">Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $contador = 1; ?>
                        @foreach ($cangrejos as $cangrejo)
                            <tr>
                                <td style="text-align: center">{{ $contador++ }}</td>
                                <td style="text-align: center">{{ $cangrejo->giro_comercial }}</td>
                                <td style="text-align: center">{{ $cangrejo->numero_local }}</td>
                                <td style="text-align: center">{{ $cangrejo->metraje }}</td>
                                <td style="text-align: center">{{ $cangrejo->arriendo }}</td>
                                <td style="text-align: center">{{ $cangrejo->medidor }}</td>
                                <td style="text-align:center"> 
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <a href="{{ url('admin/cangrejos/'.$cangrejo->id) }}" type="button" class="btn btn-success btn-sm"><i class="bi bi-eye-fill"></i></a>
                                        <a href="{{ url('admin/cangrejos/'.$cangrejo->id.'/edit') }}" type="button" class="btn btn-info btn-sm"><i class="bi bi-pencil"></i></a>
                                        <form action="{{ route('admin.cangrejos.destroy', $cangrejo->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este local?')">
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