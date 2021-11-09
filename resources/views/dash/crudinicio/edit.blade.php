@extends('adminlte::page')

@section('title', 'Editar Home')

@section('content_header')
<h1>Editar home</h1>
@stop

@section('content')

<form action="{{url('datosinicio/'. $dato->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="img1_inicio" class="form-label fw-bold text-primary ">Imagen de Inicio:</label>
            <input type="text" name="img1_inicio" id="img1_inicio" class="form-control"
                value="{{$dato->img1_inicio}}">
        </div>
    
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="slogan" class="form-label fw-bold text-primary">Slogan:</label>
            <input type="text" name="slogan" id="slogan" class="form-control" value="{{$dato->slogan}}">
        </div>
    </div>
    <br>
    <div class="mb-3">
        <label for="img2_inicio" class="form-label fw-bold text-primary ">Imagen 2 de Inicio:</label>
        <input type="text" name="img2_inicio" id="img2_inicio" class="form-control"
            value="{{$dato->img2_inicio}}">
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="dato_fecha" class="form-label fw-bold text-primary">Fecha de establecimiento:</label>
            <input type="text" name="dato_fecha" id="dato_fecha" class="form-control" value="{{$dato->dato_fecha}}">
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="dato_proyectos" class="form-label fw-bold text-primary">Proyectos Completados:</label>
            <input type="text" name="dato_proyectos" id="dato_proyectos" class="form-control" value="{{$dato->dato_proyectos}}">
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="dato_construccion" class="form-label fw-bold text-primary">Construcciones concretadas:</label>
            <input type="text" name="dato_construccion" id="dato_construccion" class="form-control" value="{{$dato->dato_construccion}}">
        </div>
    </div>
    <br>
    

   
        <br>
        <a href="/dashboard" class="btn btn-secondary">Volver</a>
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