
@extends('layouts.admin')

@section('title', 'Página Personalizada')

@section('content')<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        .content {
            margin: auto;
            width: 80%;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        ul {
            list-style-type: square;
            margin: 20px 0;
        }
        ul li {
            margin-bottom: 10px;
        }
        .button-container {
            margin: 20px 0;
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Requisitos</h1>
        <h2>Para adjudicar puestos</h2>
        <ul>
            <li>•	Solicitud Dirigida al Director de Servicios Públicos Municipales solicitándole la adjudicación con el número de puesto, local, Isla y/o barraca disponible</li>
            <li>•	3 copias a color de la cédula de identidad, papeleta de votación</li>
            <li>•	Copia del pago de la Patente Municipal (obtener en la Tesorería Municipal y hacer llenar en Jefatura de Rentas)</li>
            <li>•	Original del Certificado de no Adeudar al GAD Municipal Latacunga (obtener en la Tesorería Municipal y hacer llenar)</li>
            <li>•	Especie Valorada de Ocupación de la Vía Publica (obtener en la Tesorería Municipal)</li>
            <li>•	Copia a color del RIMPE o RUC otorgados por el  SRI (Actualizado)</li>
            <li>•	Copia de Certificados de Cursos otorgados por el GAD Latacunga (en caso de haber realizado alguno)</li>
            <li>•	Si vende alimentos preparados, cárnicos, lácteos, deberá presentar una copia del Certificado de Salud otorgado por el Ministerio de Salud.</li>
            <li>•	Una carpeta folder colgante color (A especificar)</li>
            <li>•	Una fotografía tamaño carnet a color</li>
            <li>•	Presentar dos Certificados de Honorabilidad de dos personas diferentes.</li>
        </ul>
        <div class="button-container">
            <a href="{{ url('/admin/pdfs/create') }}" class="btn">Solicitar aquí</a>
        </div>
        
        <h2>Para renovaciones</h2>
        <ul>
            <li>•	Solicitud en especie valorada dirigida al señor Director de Servicios Públicos Municipales en el cual manifieste su requerimiento de renovación de Resolución Administrativa de Adjudicación.</li>
            <li>•	1 copia a color de la cédula de identidad, papeleta de votación y carnet de identificación.</li>
            <li>•	Copia del pago de la Patente Municipal al año en curso</li>
            <li>•	Original del Certificado de no Adeudar al GAD Municipal Latacunga </li>
            <li>•	Carta de pago del mes en curso</li>
            <li>•	Especie Valorada de ocupación de vía pública  (obtener en la Tesorería Municipal)</li>
            <li>•	Copia a color del RIMPE o RUC otorgados por el  SRI (Actualizado).</li>
            <li>•	 Si vende alimentos preparados, cárnicos, lácteos, deberá presentar una copia del Certificado de Salud otorgado por el Ministerio de Salud.</li>
            <li>•	Una fotografía tamaño carnet a color</li>
            <li>•	Informe o Certificación de factibilidad para Renovación (Otorgado por la Administración). </li>
            <li></li>
        </ul>
        <div class="button-container">
            <a href="{{ url('/admin/renovaciones/create') }}" class="btn">Solicitar aquí</a>
        </div>
    </div>
</body>
</html>
@endsection