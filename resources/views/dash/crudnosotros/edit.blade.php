@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Vista Nosotros</h1>
@stop

@section('content')
<form action="{{url('datosnosotros/'. $datonosotros->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    
    <div class="mb-4 mt-6">

        <label for="img1_nosotros" class="form-label fw-bold text-primary">Imagen de fondo de Nosotros:</label>
    <div class="container ml-1">
        <img src="{{ asset('storage'). '/' . $datonosotros->img1_nosotros}}"  width="500" height="500" class="imgcrud img-thumbnail"
            alt="Imagen del Banner Nosotros">
        <div class="card-body" >
            <input type="file" value="" class="form-control-file" name="img1_nosotros" id="img1_nosotros">
        </div>
    </div>

    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="txt_nosotros" class="form-label text-primary ">Texto Nosotros:</label>
            <textarea class="form-control text-justify" name="txt_nosotros" id="txt_nosotros" rows="3">{{$datonosotros->txt_nosotros}}</textarea>
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="txt_mision" class="form-label text-primary ">Misión:</label>
            <textarea class="form-control text-justify" name="txt_mision" id="txt_mision" rows="3">{{$datonosotros->txt_mision}}</textarea>
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="txt_mision" class="form-label text-primary ">Visión:</label>
            <textarea class="form-control text-justify" name="txt_vision" id="txt_vision" rows="3">{{$datonosotros->txt_vision}}</textarea>
        </div>
    </div>
    <br>
    <div class="mb-3 mt-4">
        <label for="curriculum" class="form-label fw-bold text-primary">Curriculum:</label>
     <br>
        <img src="{{ url('img/iconos/archivo-pdf.png')}}" class="img-fluid img-thumbnail"
            alt="curriculum">
     <br>
     <br>
        <input type="file" value="{{$datonosotros->curriculum}}" name="curriculum" id="curriculum">
        
    </div>
    <br>
   
    <div class="mb-4 mt-6">

        <label for="img2_nosotros" class="form-label fw-bold text-primary">Imagen 2 Nosotros:</label>
    <div class="container ml-1">
        <img src="{{ asset('storage'). '/' . $datonosotros->img2_nosotros}}"  width="500" height="500" class="imgcrud img-thumbnail"
            alt="Imagen Descripcion">
        <div class="card-body" >
            <input type="file" value="" class="form-control-file" name="img2_nosotros" id="img2_nosotros">
        </div>
    </div>


    
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