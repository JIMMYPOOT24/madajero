@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de administrador</h1>
@stop

@section('content')
    <p>Bienvendio a su panel de Administrador</p>

<div class="container">
    <div class="card">
        <a href="{{route('datosinicio.edit', 1 )}}">
          <div class="cardheader iconcolor1">
            <img src="img/iconos/home.png" alt="icon_camera">
          </div>
          <div class="cardlinks">
            <h1>Vista Inicio</h1>
            <ul class="cardlist">
            <a href={{route('datosinicio.edit', 1 )}}> <li class="text-primary"><b>Editar la vista principal</b></li> </a>
            <li>Cambiar Slogan</li>
            <a href={{route('datostbclientes.index', 1 )}}> <li class="text-primary"><b>Editar Clientes</b></li> </a>
            <a href={{route('datoscertificaciones.index')}}><li class="text-primary"><b>Editar Carrusel de Imagenes</b></li></a>
      
             
            </ul>
          </div>
        </a>
      </div>
      
      <div class="card">
        <a href="{{route('datosnosotros.edit', 1 )}}">
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
        <a href="{{route('datosservicios.edit',1 )}}">
          <div class="cardheader iconcolor3">
            <img src="img/iconos/service.png" alt="icon_camera">
          </div>
          <div class="cardlinks">
            <h1>Vista Servicios</h1>
            <ul class="cardlist">
              <a href={{route('datosservicios.edit',1 )}}> <li class="text-primary"><b>Editar la vista principal</b></li> </a>
              <li>Editar Servicios</li>
              <li>Editar Iconos</li>
              <a href={{route('datostbservicios.index',1)}}> <li class="text-primary"><b>Agregar un Nuevo Servicio</b></li> </a>
            </ul>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="{{route('datosproyectos.edit', 1 )}}">
          <div class="cardheader iconcolor4">
            <img src="img/iconos/project.png" alt="icon_camera">
          </div>
          <div class="cardlinks">
            <h1>Vista Proyectos</h1>
            <ul class="cardlist">
              <a href={{route('datosproyectos.edit', 1 )}}> <li class="text-primary"><b>Editar la vista principal</b></li> </a>
              <li>Editar Proyectos</li>
              <li>Editar Titulos</li>
              <a href={{route('datostbproyectos.index',1)}}> <li class="text-primary"><b>Agregar un Nuevo Servicio</b></li> </a>
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