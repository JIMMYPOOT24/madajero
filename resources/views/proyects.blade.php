@extends('layouts.plantilla')
@section('title', 'Madajero | Proyectos')

@section('contenido')

<style>
   .banner-image {
     background-image: url('storage/{{$datosproyecto->img1_proyectos}}');
     background-size: cover;
     background-position: center;
   }
 </style>

 <!-- Banner Image heroes  -->
 <section class="banner-image">
   <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
     <div class="content text-center">
       <h1 class="text-white text-xl-center">Proyectos</h1>
     </div>
   </div>
 </section>
   <!-- Banner text  -->
   <section id="banner-text" class="banner-text fondoGriss ">
     <div class=" p-5 mb-4 ">
         <div class="container-fluid py-3">
         <h3 class="display-6 fw-bold ">Nuestros proyectos </h3>
         <h2 class="col-md-10 fs-4">{{$datosproyecto->txt_proyectos}}</h2>
        </div>
     </div>
   </section>

   <!-- Carousel proyectos -->

<section id="carouselProyectos">
  <div id="demo" class="carousel slide container-fluid" data-bs-ride="carousel">
  
    <div class="titulo">
      <h1>Tao residencial</h1>
    </div>
  
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class="carousel-inner carousel">
      <div class="carousel-item active">
        <img src="img/fondo1.jpg" alt="" class="d-block" >
        <div class="carousel-caption">
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/imagenlarga.jpg" alt="" class="d-block" >
        <div class="carousel-caption">
        </div> 
      </div>
      <div class="carousel-item">
        <img src="img/fondo3.jpg" alt="" class="d-block">
        <div class="carousel-caption">
        </div>  
      </div>
    </div>
    
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  </section>

@endsection