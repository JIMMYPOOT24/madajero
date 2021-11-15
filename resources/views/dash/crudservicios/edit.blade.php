@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Vista Servicios</h1>
@stop

@section('content')
<form action="{{url('datosservicios/'. $datoservicio->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    
    <div class="mb-4 mt-6">

        <label for="img1_servicios" class="form-label fw-bold text-primary">Imagen de fondo de Servicios:</label>
    <div class="container ml-1">
        <img src="{{ asset('storage'). '/' . $datoservicio->img1_servicios}}"  width="500" height="500" class="imgcrud img-thumbnail"
            alt="Imagen del Banner Nosotros">
        <div class="card-body" >
            <input type="file" value="" class="form-control-file" name="img1_servicios" id="img1_servicios">
        </div>
    </div>

    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="txt_servicios" class="form-label text-primary ">Texto Servicios:</label>
            <textarea class="form-control text-justify" name="txt_servicios" id="txt_servicios" rows="3">{{$datoservicio->txt_servicios}}</textarea>
        </div>
    </div>
    <br>
    <br>
    

   
        <br>
        <a href="/dashboard" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/style.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop