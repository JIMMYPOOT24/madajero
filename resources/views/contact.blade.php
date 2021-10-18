@extends('layouts.plantilla')
@section('title', 'Madajero | Inicio')

@section('contenido')

<style>
  .banner-image {
    background-image: url('img/fondos/fondo-contactanos.jpg');
    background-size: cover;
  }
</style>

<!-- Banner Image heroes  -->
<section class="banner-image">
  <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
      <h1 class="text-white text-center">Contactenos</h1>
      <h1 class="text-white text-center">Para todas sus dudas y aclaraciones</h1>
    </div>
  </div>
</section>

@endsection