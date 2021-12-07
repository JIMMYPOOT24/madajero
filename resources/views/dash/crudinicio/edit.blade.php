@extends('adminlte::page')

@section('title', 'Editar Home')

@section('content_header')
<h1>Editar Inicio</h1>
@stop

@section('content')

   <form action="{{url('datosinicio/'. $datoinicio->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="mb-3 mt-4">

        <label for="img1_inicio" class="form-label fw-bold text-primary">Imagen de fondo de Inicio:</label>
        <div class="card" style="width: 30%">
        <img src="{{ asset('storage'). '/' . $datoinicio->img1_inicio}}" class="card-img-top"
            alt="Imagen del Banner Inicio">
        <div class="card-body" >
            <input type="file" value="" name="img1_inicio" id="img1_inicio">
        </div>
    </div>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="slogan" class="form-label fw-bold text-primary">Slogan:</label>
            <input type="text" name="slogan" id="slogan" class="form-control" value="{{$datoinicio->slogan}}">
        </div>
    </div>
    
    <div class="mb-3 mt-4">

        <label for="img2_inicio" class="form-label fw-bold text-primary">Imagen 2 de Inicio:</label>
     <div class="card" style="width: 30%">
        <img src="{{ asset('storage'). '/' . $datoinicio->img2_inicio}}" class="card-img-top"
            alt="Imagen del Banner Inicio">
        <div class="card-body" >
            <input type="file" value="" name="img2_inicio" id="img2_inicio">
        </div>
    </div>
    
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="dato_fecha" class="form-label fw-bold text-primary">Fecha de establecimiento:</label>
            <input type="text" name="dato_fecha" id="dato_fecha" class="form-control" value="{{$datoinicio->dato_fecha}}">
        </div>
    </div>
   
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="dato_proyectos" class="form-label fw-bold text-primary">Proyectos Completados:</label>
            <input type="text" name="dato_proyectos" id="dato_proyectos" class="form-control" value="{{$datoinicio->dato_proyectos}}">
        </div>
    </div>
   
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="dato_construccion" class="form-label fw-bold text-primary">Construcciones concretadas:</label>
            <input type="text" name="dato_construccion" id="dato_construccion" class="form-control" value="{{$datoinicio->dato_construccion}}">
        </div>
    </div>

    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="telefono" class="form-label fw-bold text-primary">Número de Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{$datoinicio->telefono}}">
        </div>
    </div>

    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="correo" class="form-label fw-bold text-primary">Correo electrónico de contacto:</label>
            <input type="text" name="correo" id="correo" class="form-control" value="{{$datoinicio->correo}}">
        </div>
    </div>
   
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

