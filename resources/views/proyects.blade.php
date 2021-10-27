@extends('layouts.plantilla')
@section('title', 'Madajero | Inicio')

@section('contenido')


<style>
   .banner-image {
     background-image: url('img/fondos/fondo-servicios.jpg');
     background-size: cover;
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
         <p class="col-md-10 fs-4">Construimos proyectos de calidad</p>
        </div>
     </div>
   </section>



      {{--    <!-- seccion galeria -->
<section class="gallery min-vh-100">
<div class="container-lg">
  <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
     <div class="col">
        <img src="img/Proyectos/2.jpg" class="gallery-item" alt="gallery">
     </div>
     <div class="col">
        <img src="img/proyectos/3.jpg" class="gallery-item" alt="gallery">
     </div>
     <div class="col">
        <img src="img/proyectos/4.jpg" class="gallery-item" alt="gallery">
     </div>
     <div class="col">
        <img src="img/proyectos/5.jpg" class="gallery-item" alt="gallery">
     </div>
     <div class="col">
        <img src="img/proyectos/6.jpg" class="gallery-item" alt="gallery">
     </div>
     <div class="col">
        <img src="img/proyectos/7.jpg" class="gallery-item" alt="gallery">
     </div>
     <div class="col">
       <img src="img/proyectos/8.jpg" class="gallery-item" alt="gallery">
    </div>
    <div class="col">
       <img src="img/proyectos/9.jpg" class="gallery-item" alt="gallery">
    </div>
    <div class="col">
       <img src="img/proyectos/10.jpg" class="gallery-item" alt="gallery">
    </div>
    <div class="col">
       <img src="img/proyectos/11.jpg" class="gallery-item" alt="gallery">
    </div>
    <div class="col">
       <img src="img/proyectos/12.jpg" class="gallery-item" alt="gallery">
    </div>
    <div class="col">
       <img src="img/proyectos/13.jpg" class="gallery-item" alt="gallery">
    </div>
  </div>
</div>

</section> --}}


<div class="container">
   <div class="row">
       <div class="col-12">
           <h1 class="page-title">Projects</h1>
       <h3 class="gallery-title">Gallery 1</h3>
       <div class="row">
           <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-3 col-md-4 col-6 my-3">
               <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid card">
           </a>
           <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-3 col-md-4 col-6 my-3">
               <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid card">
           </a>
           <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-3 col-md-4 col-6 my-3">
               <img src="https://unsplash.it/600.jpg?image=253" class="img-fluid card">
           </a>
           <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-3 col-md-4 col-6 my-3">
               <img src="https://unsplash.it/600.jpg?image=254" class="img-fluid card">
           </a>
           <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-3 col-md-4 col-6 my-3">
               <img src="https://unsplash.it/600.jpg?image=255" class="img-fluid card">
           </a>
           <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-3 col-md-4 col-6 my-3">
               <img src="https://unsplash.it/600.jpg?image=256" class="img-fluid card">
           </a>
       </div>
   </div>
</div>
</div>






@endsection