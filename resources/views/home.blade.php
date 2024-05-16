@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<div class="row justify-content-center">
    <!-- Welcome Window -->
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Bienvenido al Sistema de Gestión de Perfiles</h3>
            </div>
            <div class="card-body">
                <p>¡Bienvenido! Este es un sistema de gestión de perfiles diseñado para facilitar la administración de usuarios y roles.</p>
                <p>Por favor, seleccione una opción en el panel de administración a su izquierda para comenzar.</p>
            </div>
        </div>
    </div>
</div>


@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop

