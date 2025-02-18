@extends('layouts.admin')
@section('content')

<div class="container">
    <h2 class="text-center text-danger mb-4">Locales Disponibles</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <!-- Fila 1 -->
          <td class="text-center">
            <img src="assets/img/mora.jpg" alt="Imagen Local 1" class="img-fluid mb-2" style="max-width: 150px; height: auto;">
            <br>
            <a href="{{ url('/admin/locales') }}" class="btn btn-success">Puestos moras</a>
          </td>
          <td class="text-center">
            <img src="assets/img/fresas.jpg" alt="Imagen Local 1" class="img-fluid mb-2" style="max-width: 150px; height: auto;">
            <br>
            <a  href="{{ url('/admin/frutillas') }}" class="btn btn-success">Puestos frutillas</a>
          </td>
          <td class="text-center">
            <img src="assets/img/ado.jpg" alt="Imagen Local 1" class="img-fluid mb-2" style="max-width: 150px; height: auto;">
            <br>
            <a href="{{ url('/admin/adoquines') }}" class="btn btn-success">Puestos adoquinado</a>
          </td>
          <td class="text-center">
            <img src="assets/img/ajo.jpg" alt="Imagen Local 1" class="img-fluid mb-2" style="max-width: 150px; height: auto;">
            <br>
            <a href="{{ url('/admin/ajos') }}" class="btn btn-success">Puestos ajos</a>
          </td>
          <td class="text-center">
            <img src="assets/img/cang.jpg" alt="Imagen Local 1" class="img-fluid mb-2" style="max-width: 150px; height: auto;">
            <br>
            <a href="{{ url('/admin/cangrejos') }}" class="btn btn-success">Puestos cangrejos</a>
          </td>
          <td class="text-center">
            <img src="assets/img/ro.jpg" alt="Imagen Local 1" class="img-fluid mb-2" style="max-width: 150px; height: auto;">
            <br>
            <a href="{{ url('/admin/flores') }}" class="btn btn-success">Puestos flores</a>
          </td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <!-- Fila 2 -->
          <td class="text-center">
            <img src="assets/img/ropa.jpg" alt="Imagen Local 1" class="img-fluid mb-2" style="max-width: 150px; height: auto;">
            <br>
            <a href="{{ url('/admin/ropas') }}" class="btn btn-success">Puestos ropa</a>
          </td>
          <td class="text-center">
            <img src="assets/img/trad.jpg" alt="Imagen Local 1" class="img-fluid mb-2" style="max-width: 150px; height: auto;">
            <br>
            <a href="{{ url('/admin/tradicionales') }}" class="btn btn-success">Puestos tradicional</a>
          </td>
          <td class="text-center">
            <img src="assets/img/fru.jpg" alt="Imagen Local 1" class="img-fluid mb-2" style="max-width: 170px; height: auto;">
            <br>
            <a href="{{ url('/admin/frutas') }}" class="btn btn-success">Puestos frutas</a>
          </td>
          <td class="text-center">
            <img src="assets/img/abasto.jpg" alt="Imagen Local 1" class="img-fluid mb-2" style="max-width: 150px; height: auto;">
            <br>
            <a  href="{{ url('/admin/abastos') }}" class="btn btn-success">Puestos C1</a>
          </td>
          <td class="text-center">
            <img src="assets/img/prep.jpg" alt="Imagen Local 1" class="img-fluid mb-2" style="max-width: 150px; height: auto;">
            <br>
            <a href="{{ url('/admin/alimentos') }}" class="btn btn-success">Puestos C2</a>
          </td>
          <td class="text-center">
            <img src="assets/img/c3.jpg" alt="Imagen Local 1" class="img-fluid mb-2" style="max-width: 150px; height: auto;">
            <br>
            <button href="{{ url('/admin/flores') }}" class="btn btn-success">Puestos C3</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <style>
    .container {
      margin-top: 30px;
    }
  
    .table {
      width: 100%;
      margin-top: 20px;
    }
  
    .table td {
      text-align: center;
      vertical-align: middle;
    }
  
    .btn {
      border-radius: 25px;
      font-weight: bold;
      width: 100%;
    }
  
    .img-fluid {
      max-width: 100%;
      height: auto;
    }
  
    .btn:hover {
      background-color: #f44336;
      color: white;
    }
  </style>
  @endsection