@extends('layouts.plantilla')

@section('title')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CDN bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS main  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
       .banner-image {
         background-image: url('img/fondos/fondo-servicios.jpg');
         background-size: cover;
       }
     </style>
</head>
<body>
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

                  <!-- seccion galeria -->
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
     </section>
   
</body>
</html>
@endsection