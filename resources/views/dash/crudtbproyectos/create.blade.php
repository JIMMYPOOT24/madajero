@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar un Nuevo Proyecto</h1>
@stop

@section('content')
<form action="{{ url('datostbproyectos/')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    

    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="titulo" class="form-label fw-bold text-primary ">Nombre del proyecto:</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="">
        </div>
    </div>

    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="url_img" class="form-label fw-bold text-primary ">Imagen:</label>
            <input type="file" name="url_img" id="url_img" class="form-control" value="">
        </div>
    </div>

    <br>
    <a href="/datostbproyectos" class="btn btn-secondary">Cancelar</a>
    <input type="submit" class="btn btn-primary" value="Agregar">
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop