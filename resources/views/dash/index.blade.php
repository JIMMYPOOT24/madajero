@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de administrador</h1>
@stop

@section('content')
    <p>Bienvendio a su panel de Administrador</p>

<div class="container">
    <div class="card">
        <a href="https://www.google.com">
          <div class="cardheader iconcolor1">
            <img src="img/iconos/home.png" alt="icon_camera">
          </div>
          <div class="cardlinks">
            <h1>Vista Inicio</h1>
            <ul class="cardlist">
            <a href={{route('datosinicio.edit', 1 )}}> <li class="text-primary"><b>Editar la vista principal</b></li> </a>
            <li>Cambiar Slogan</li>
            <li>Otros</li>

            <a href={{route('datoscertificaciones.index')}}><li class="text-primary"><b>Editar Carrusel de Imagenes</b></li></a>
      
             
            </ul>
          </div>
        </a>
      </div>
      
      <div class="card">
        <a href="https://www.google.com">
          <div class="cardheader iconcolor2">
            <img src="img/iconos/about.png" alt="icon_camera">
          </div>
          <div class="cardlinks">
            <h1>Vista Nosotros</h1>
            <ul class="cardlist">
              <a href={{route('datosnosotros.edit', 1 )}}> <li class="text-primary"><b>Editar la vista principal</b></li> </a>
              <li>Editar Imagenes</li>
              <li>Editar Visión</li>
              <li>Editar Misión</li>
            </ul>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="https://www.google.com">
          <div class="cardheader iconcolor3">
            <img src="img/iconos/service.png" alt="icon_camera">
          </div>
          <div class="cardlinks">
            <h1>Vista Servicios</h1>
            <ul class="cardlist">
              <li>Editar la vista principal</li>
              <li>Editar Servicios</li>
              <li>Editar Iconos</li>
              <li>Editar Imagen</li>
            </ul>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="https://www.google.com">
          <div class="cardheader iconcolor4">
            <img src="img/iconos/project.png" alt="icon_camera">
          </div>
          <div class="cardlinks">
            <h1>Vista Proyectos</h1>
            <ul class="cardlist">
              <li>Editar la vista principal</li>
              <li>Editar Proyectos</li>
              <li>Editar Iconos</li>
              <li>Editar Imagen</li>
            </ul>
          </div>
        </a>
      </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="css/style.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop