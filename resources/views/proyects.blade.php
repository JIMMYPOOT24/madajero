@extends('layouts.plantilla')
@section('title', 'Madajero | Proyectos')

@section('contenido')

<style>
   .banner-image {
     background-image: url('storage/{{$datosproyecto->img1_proyectos}}');
     background-size: cover;
     background-position: center;
     opacity: 95%;
   }

   
 </style>
 <!-- Banner Image heroes  -->
 <section class="banner-image">
   <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
     <div class="content text-center">
       <h1 class="text-white text-xl-center fw-bolder text-end">Proyectos</h1>
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
<section class="gallery min-vh-100">
<div class="container-lg">
  <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">

   @foreach ($datostbproyecto  as $proyectos)
     <div class="col">
        <img src="storage/{{$proyectos->url_img}}" class="gallery-item" alt="gallery"> 
     </div>
     @endforeach
  </div>
 
</div>

</section> 

@endsection