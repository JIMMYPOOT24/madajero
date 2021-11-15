@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar certificaciones</h1>
@stop

@section('content')
<form action="{{ url('datostbservicios/'.  $datostbservicio->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT')}}
    <div class="mb-3 mt-4 p-0">
        <div class="mb-3">
            <label for="categoria" class="form-label fw-bold text-primary ">Categoria:</label>
            <input type="text" name="categoria" id="categoria" class="form-control"
                value="{{ $datostbservicio->categoria}}">
        </div>
    </div>

    <div class="mb-4 mt-6">

        <label for="url_img" class="form-label fw-bold text-primary">Icono:</label>
    <div class="container ml-1">
        <img src="{{ asset('storage'). '/' .  $datostbservicio->url_img}}"  width="100" height="100" class="imgcrud img-thumbnail"
            alt="Imagen">
        <div class="card-body" >
            <input type="file" value="" class="form-control-file" name="url_img" id="url_img">
        </div>
    </div>
    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="servicio1" class="form-label fw-bold text-primary ">Descripción 1:</label>
            <input type="text" name="servicio1" id="servicio1" class="form-control"
                value="{{ $datostbservicio->servicio1}}">
        </div>
    </div>
    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="servicio2" class="form-label fw-bold text-primary ">Descripción 2:</label>
            <input type="text" name="servicio2" id="servicio2" class="form-control"
                value="{{ $datostbservicio->servicio2}}">
        </div>
    </div>
    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="servicio3" class="form-label fw-bold text-primary ">Descripción 3:</label>
            <input type="text" name="servicio3" id="servicio3" class="form-control"
                value="{{ $datostbservicio->servicio3}}">
        </div>
    </div>
    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="servicio4" class="form-label fw-bold text-primary ">Descripción 4:</label>
            <input type="text" name="servicio4" id="servicio4" class="form-control"
                value="{{ $datostbservicio->servicio4}}">
        </div>
    </div>
    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="servicio5" class="form-label fw-bold text-primary ">Descripción 5:</label>
            <input type="text" name="servicio5" id="servicio5" class="form-control"
                value="{{ $datostbservicio->servicio5}}">
        </div>
    </div>

    <a href={{route('datostbservicios.index', 1 )}} class="btn btn-secondary">Volver</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop