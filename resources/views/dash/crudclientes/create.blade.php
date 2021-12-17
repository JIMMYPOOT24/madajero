@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar un Nuevo Cliente</h1>
@stop

@section('content')

<form action="{{ url('datostbclientes/')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    

    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="nombre_cliente" class="form-label fw-bold text-primary ">Nombre del cliente:</label>
            <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control" value="" required>
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="logo" class="form-label fw-bold text-primary">Imagen:</label>
            <input type="file" name="logo" id="logo" class="form-control" value="">
        </div>
    </div>
    <div class="progress" id="progress_bar" style="display:none; ">

        <div class="progress-bar" id="progress_bar_process" role="progressbar" style="width:0%">0%</div>

    </div>

    <div id="uploaded_image" class="row mt-5"></div>

    <br>

    <br>
    <a href="/datostbclientes" class="btn btn-secondary">Cancelar</a>
    <input type="submit" class="btn btn-primary" value="Agregar">
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop