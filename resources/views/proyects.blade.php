@extends('layouts.plantilla')
@section('title', 'Madajero | Proyectos')

@section('contenido')

<style>

.banner-image {
    background-image: url('storage/{{$datosproyecto->img1_proyectos}}');
    background-size: cover;
    background-position: center;
  }

  .titulo h1{
          font: 40px;
          color: #996633;
          text-align-last: center;
          font-family: 'Raleway', sans-serif;
          font-weight: bold;
          
        }
  
        h1 {
          text-transform: uppercase;
        }

        .divider{
          width: 100px;
          height: 3px;
          background-color: #F2962F;;
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
   
   <section class="gallery text-center p-0">
    @foreach ($datostbproyecto  as $proyectos)
    <div class="titulo">
      <br>
      <span class="divider"></span>
      <h1 class="lines-effect fs-1">{{$proyectos->titulo}}</h1> </div>
    <div class="container p-0">
      <div class="row p-1 gx-2">
        <div class="col-sm">
          <img src="storage/{{$proyectos->url_img}}" class="gallery-item"  alt="gallery" style="display: none" onload="this.style.display=''" > 
        </div>
        <div class="col-sm">
          <img src="storage/{{$proyectos->url_img2}}" style="display: none" onload="this.style.display=''"  class="gallery-item" alt="gallery"> 

          
        </div>
        <div class="col-sm">
          <img src="storage/{{$proyectos->url_img3}}" class="gallery-item" alt="gallery" style="display: none" onload="this.style.display=''" > 
        </div>
      </div>

      <div class="row p1 gx-2">
        <div class="col-sm">
          <img src="storage/{{$proyectos->url_img4}}" class="gallery-item"  alt="gallery" style="display: none" onload="this.style.display=''" > 
        </div>
        <div class="col-sm">
          <img src="storage/{{$proyectos->url_img5}}" class="gallery-item" alt="gallery" style="display: none" onload="this.style.display=''" > 
        </div>
        <div class="col-sm">
          <img src="storage/{{$proyectos->url_img6}}" class="gallery-item" alt="gallery" style="display: none" onload="this.style.display=''" > 
        </div>
      </div>
     
    </div>
    @endforeach
       
    <br>
    <br>
    
    </section> 
@endsection
