@extends('layouts.plantilla')
@section('title', 'Madajero | Proyectos')

@section('contenido')

<style>

.banner-image {
    background-image: url('storage/{{$datosproyecto->img1_proyectos}}');
    background-size: cover;
    background-position: center;
  }
  .carousel-inner img{
        width: 100%;
        height: 400px;
        object-position: center;
        object-fit: cover;
      }
        .carousel-inner{
            width: 100%;
            height: 400px;
            align-items: center;
            margin-top: 25px;
        }
        .titulo h1{
          font: 40px;
          color: #996633;
          text-align-last: center;
          font-family: 'Raleway', sans-serif;
          font-weight: bold;
          
        }

        .fondocarousel{
          width: 800px;
          height: 90%;
        }

        .carouselproyect{
           border-radius: 25px;
      
        }
        h1 {
          text-transform: uppercase;
        }

        .divider{
          width: 100px;
          height: 3px;
          background-color: #996633;
          display: inline-block;


        }
  }
</style>
 <!-- Banner Image heroes  -->
 <section class="banner-image">
   <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
     <div class="content text-center">
       <h1 class="text-white text-2xl-center fw-bolder text-end">Proyectos</h1>
     </div>
   </div>
 </section>
   <!-- Banner text  -->
   <section id="banner-text" class="banner-text fondoGriss ">
     <div class=" p-5 mb-4 ">
         <div class="container-fluid py-3">
         <h3 class="display-6 fw-bold ">Nuestros proyectos </h3>
         <h2 class="col-md-10 fs-5">{{$datosproyecto->txt_proyectos}}</h2>
        </div>
        
     </div>
    
   </section>
  
   <!-- Carousel proyectos -->
   @foreach ($datostbproyecto as $item)
<div class="container fondocarousel text-center">
 
  <section id="carouselProyectos">
    
    <div id="demo" class="carousel slide container" data-bs-ride="carousel">

      <div class="titulo">
        <span class="divider"></span>
        <h1 class="lines-effect fs-1">{{$item->titulo}}</h1>
       
      </div>
    <!-- Indicators/dots -->
   
     
      
      <!-- The slideshow/carousel -->
      <div class="carousel-inner carousel">
        <div class="carousel-item active ">
          <img src="storage/{{$item->url_img}}" alt="" class="d-block carouselproyect img-fluid" >
          <div class="carousel-caption">
          </div>
        </div>
        <div class="carousel-item">
          <img src="storage/{{$item->url_img2}}" alt="" class="d-block carouselproyect img-fluid" >
          <div class="carousel-caption">
          </div> 
        </div>
        <div class="carousel-item">
          <img src="storage/{{$item->url_img3}}" alt="" class="d-block carouselproyect img-fluid">
          <div class="carousel-caption">
          </div>  
        </div>
        <div class="carousel-item">
          <img src="storage/{{$item->url_img4}}" alt="" class="d-block carouselproyect img-fluid">
          <div class="carousel-caption">
          </div>  
        </div>
        <div class="carousel-item">
          <img src="storage/{{$item->url_img5}}" alt="" class="d-block carouselproyect img-fluid">
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

    
</div>@endforeach
@endsection
