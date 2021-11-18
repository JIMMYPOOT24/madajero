@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar Proyectos</h1>
@stop

@section('content')
<form action="{{ url('datostbproyectos/'.   $datostbproyectos->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT')}}
    <div class="mb-3 mt-4 p-0">
        <div class="mb-3">
            <label for="titulo" class="form-label fw-bold text-primary ">Nombre del proyecto:</label>
            <input type="text" name="titulo" id="titulo" class="form-control"
                value="{{  $datostbproyectos->titulo}}">
        </div>
    </div>

    <div class="mb-4 mt-6">

        <label for="url_img" class="form-label fw-bold text-primary">Imagen:</label>
     <div class="container ml-1">
        <img src="{{ asset('storage'). '/' .  $datostbproyectos->url_img}}"  width="400" height="400" class="imgcrud img-thumbnail"
            alt="Imagen">
        <div class="card-body" >
            <input type="file" value="" class="form-control-file" name="url_img" id="url_img">
        </div>
    </div>
    

    <a href={{route('datostbproyectos.index', 1 )}} class="btn btn-secondary">Volver</a>
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