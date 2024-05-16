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
    <title>Form</title>
    <!-- Incluyendo Bootstrap CSS desde CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> 
    <div class="container mt-5">  
        <div class="row justify-content-center">

            <div class="col-md-6">
                
                <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre de Usuario</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su email">
                    </div>
                    <div class="form-group">
                        <label for="file">Foto de Perfil</label>
                        <input type="file" class="form-control-file" name="file" id="file">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button><br><br>
                    
                </form>
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

