@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Incluyendo Bootstrap CSS desde CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Detalles</title>
    <!-- Estilo personalizado para el borde negro -->
    <style>
        .form-control-plaintext {
            border: 1px solid #000;
            border-radius: 12px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mb-3 h-100">
                <div class="card-header bg-info">
                    <h5 class="text-white">Foto del Perfil</h5>  
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('storage/images/' . $info->file_url) }}" alt="image" class="img-thumbnail rounded-circle" style="width: 200px; height: 200px; object-fit: cover;">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header bg-info">
                    <h5 class="text-white">Datos del Perfil</h5> 
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Nombre:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext p-2" id="name" value="{{ $info->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" readonly class="form-control-plaintext p-2" id="email" value="{{ $info->email }}">
                        </div>
                    </div>
                    <!-- Agrega aquí más campos de datos del perfil si es necesario -->
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="d-flex justify-content-between">
                <a href="{{ route('index') }}" class="btn btn-primary mr-2">Volver</a>
                <a href="{{ route('edit', $info->id) }}" class="btn btn-success">Editar Perfil</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop

