@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- Incluyendo Bootstrap CSS desde CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <style>
        /* Estilo para la flecha hacia abajo */
        .arrow-down {
            display: block;
            width: 0;
            height: 0;
            margin: auto;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-top: 15px solid #000;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center mt-3">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h5 class="text-center">Perfiles Registrados</h5>
            <span class="arrow-down"></span>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered table-hover text-center">
                <thead class="thead-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($infos as $info)
                        <tr>
                            <td>{{ $info->name }}</td>
                            <td>{{ $info->email }}</td>
                            <td>
                                <img src="{{ asset('storage/images/' . $info->file_url) }}" alt="image" class="img-thumbnail" style="width: 100px; height: 100px; object-fit: cover;">
                            </td>
                            <td>
                                <a href="{{ route('show', $info->id) }}" class="btn btn-primary">Ver</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay datos</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
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

