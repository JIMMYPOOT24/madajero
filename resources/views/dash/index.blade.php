@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

<div class="container">
    <div class="card">
        <a href="https://www.google.com">
          <div class="cardheader iconcolor1">
            <img src="img/iconos/home.png" alt="icon_camera">
          </div>
          <div class="cardlinks">
            <h1>Vista Inicio</h1>
            <ul class="cardlist">
              <li>Editar la vista principal</li>
              <li>Cambiar fondo</li>
              <li>Cambiar Slogan</li>
              <li>Otros</li>
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
              <li>Editar la vista principal</li>
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