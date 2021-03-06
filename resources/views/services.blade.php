@extends('layouts.plantilla')
@section('title', 'Madajero | Servicios')

@section('contenido')

<style>
  .banner-image {
    background-image: url('storage/{{$datoservicio->img1_servicios}}');
    background-size: cover;
    background-position: center;
  }
</style>

<!-- Banner Image heroes  -->
<section class="banner-image">
  <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
      <h1 class="text-white text-xl-center">Servicios</h1>
    </div>
  </div>
</section>

  <!-- Banner text  -->
  <section id="banner-text" class="banner-text fondoGriss ">
    <div class=" p-5 mb-4 ">
        <div class="container-fluid py-3">
        <h3 class="display-6 fw-bold ">Nuestros servicios </h3>
        <p class="col-md-10 fs-4">{{$datoservicio->txt_nosotros}}</p>
       </div>
    </div>
  </section>
  
  <!-- Lista de servicios  -->
 
  <section id="services" class="services section-bg ">

  <div class="container" data-aos="fade-up">

   
  <div class="row">
    @foreach ( $datotbservicio as $servicios)
    <div class="col-md-6">
      <div class="icon-box" data-aos="fade-up">
        <i class="bi bi-bar-chart"></i>
        
        <img src="storage/{{$servicios->url_img}}" alt="icono-proyectos-ejecutivos ">
        <h4 class="categoria">{{$servicios->categoria}}</h4>
        <ul style= "list-style-type: square">
          <br>
          <br>
          <p class="fs-5">{{$servicios->servicio1}}</p>
          <p class="fs-5">{{$servicios->servicio2}}</p>
          <p class="fs-5">{{$servicios->servicio3}}</p>
          <p class="fs-5">{{$servicios->servicio4}}</p>
          <p class="fs-5">{{$servicios->servicio5}}</p>
        </ul>
        </div>
       
    </div>
    @endforeach
  </div>
 
</div>


</section>


@endsection