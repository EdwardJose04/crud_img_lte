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
    <!-- Incluyendo Sweet Alert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <title>Editar Usuario</title>
    <!-- Estilo personalizado para el borde negro -->
    <style>
        .form-control {
            border: 1px solid #000;
            border-radius: 12px;
        }
        .card-body {
            border: none; /* Elimina el borde */
        }
        .card-header {
            background-color: #17a2b8;
            color: #fff;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }
    </style>
</head>
<body> 
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-3 h-100">
                    <div class="card-header">
                        <h5 class="text-white">Foto de Perfil</h5>  
                    </div>
                    <div class="card-body text-center">
                    <form id="editForm" action="{{ route('update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <img src="{{ asset('storage/images/' . $user->file_url) }}" alt="image" class="img-thumbnail rounded-circle" style="width: 200px; height: 200px; object-fit: cover;">
                        <div class="form-group">
                                <label for="file">Actualizar Foto de Perfil</label>
                                <input type="file" class="form-control-file" name="file" id="file">
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="text-white">Editar Usuario</h5> 
                    </div>
                    <div class="card-body">
                        
                            <div class="form-group">
                                <label for="username">Nombre de Usuario</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="confirmEmail">Confirmar Email</label>
                                <input type="email" class="form-control" name="confirmEmail" id="confirmEmail">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <a href="{{ route('index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </div>

    <!-- Incluyendo Sweet Alert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Intercepta el envío del formulario para validar los correos electrónicos
        document.getElementById('editForm').addEventListener('submit', function(event) {
            var email = document.getElementById('email').value;
            var confirmEmail = document.getElementById('confirmEmail').value;

            // Verifica si los correos electrónicos coinciden
            if (email !== confirmEmail) {
                // Muestra una alerta utilizando Sweet Alert
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Los correos electrónicos no coinciden',
                    confirmButtonText: 'Aceptar'
                });
                // Detiene el envío del formulario
                event.preventDefault();
            }
        });
    </script>
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

