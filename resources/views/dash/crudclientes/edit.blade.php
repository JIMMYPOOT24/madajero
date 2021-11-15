@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar Clientes</h1>
@stop

@section('content')
<form action="{{ url('datostbclientes/'. $datoscliente->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT')}}
    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="nombre_cliente" class="form-label fw-bold text-primary ">Nombre del cliente:</label>
            <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control"
                value="{{$datoscliente->nombre_cliente}}">
        </div>
    </div>
    <br>

    <div class="mb-4 mt-6">

        <label for="logo" class="form-label fw-bold text-primary">Imagen:</label>
    <div class="container ml-1">
        <img src="{{ asset('storage'). '/' . $datoscliente->logo}}"  width="200" height="200" class="imgcrud img-thumbnail"
            alt="Imagen del Banner Nosotros">
        <div class="card-body" >
            <input type="file" value="" class="form-control-file" name="logo" id="logo">
        </div>
    </div>

    <br>
    <a href={{route('datostbclientes.index', 1 )}} class="btn btn-secondary">Volver</a>
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