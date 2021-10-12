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
          background-image: url('img/fondos/fondo-contactanos.jpg');
          background-size: cover;
        }
      </style>

    </head>
<body>
 <!-- Banner Image heroes  -->
 <section class="banner-image">
    <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-center">
        <h1 class="text-white text-center">Contactenos</h1>
        <h1 class="text-white text-center">Para todas sus dudas y aclaraciones</h1>
      </div>
    </div>
  </section>

   
</body>
</html>
@endsection