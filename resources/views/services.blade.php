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
                <h1 class="text-white text-xl-center">Servicios</h1>
              </div>
            </div>
          </section>
        
            <!-- Banner text  -->
            <section id="banner-text" class="banner-text fondoGriss ">
              <div class=" p-5 mb-4 ">
                  <div class="container-fluid py-3">
                  <h3 class="display-6 fw-bold ">Nuestros servicios </h3>
                  <p class="col-md-10 fs-4">Ofrecemos una gama de servicios para satisfacer sus necesidades</p>
                 </div>
              </div>
            </section>
        
             <!-- Feature servicios seccion  -->
             <section class="servicios align-items-sm-center">
              <div class="container-fluid row g-4 py-5 row-cols-1 row-cols-lg-2 ">
                <div class="col d-flex align-items-start">
                  <img src="img/iconos/proyecto-128px.png" alt="icono-proyectos" width="100">
                  <div>
                    <h2>Elaboracion de proyectos ejecutivos</h2>
                    <p>Proyectos ejecutivos autorizados.</p>
                    <p>Ingeniería de infraestructura residencial.</p>
                    <p>Ingeniería de infraestructura comercial.</p>
                    <p>Ingeniería de infraestructura industrial.</p>
                    <p>Ingeniería de infraestructura turistica.</p>
                    <p>Memoria técnica.</p>
                    <p>Especificaciones de construcción.</p>
                    <p>Catálogo de obras.</p>
                    <p>Precios unitarios.</p>
                    <p>Programa de obras.</p>
                  </div>
                </div>
                <div class="col d-flex align-items-start">
                  <img src="/img/iconos/planeacion-128px.png" alt="icono-planeacion" width="100">
                  <div>
                    <h2>Integracion y planeacion de proyectos</h2>
                    <p>Participación de diciplinas varias.</p>
                    <p>Programación de proyectos.</p>
                    <p>Solución a integracion de proyectos.</p>
                    <p>Recepción de información y tramites generales.</p>
                    <p>Integración de proyectos y presupuestos.</p>
                    <p>Elaboración de programas de insumos.</p>
                  </div>
                </div>
                <div class="col d-flex align-items-start">
                  <img src="/img/iconos/supervicion-128px.png" alt="icono-servicios" width="100">
                  <div>
                    <h2>Coordinacion y supervición de obras.</h2>
                    <p>Puesta en marcha de estrategias de obras.</p>
                    <p>Vigilancias de control de calidad.</p>
                    <p>Vigilancia de cumplimiento en términos de contrato.</p>
                    <p>Elaboracion de estimacion de avance a contratistas.</p>
                    <p>Elaboración de reportes de avance general.</p>
                    <p>Solución a problemas de obras.</p>
                    <p>Coordinación con autoridades y organismos oficiales.</p>
                    <p>Entrega de obras.</p>
                  </div>
                </div>
                <div class="col d-flex align-items-start">
                  <img src="/img/iconos/obras-128px.png" alt="icono-ejecucion-obras" width="100">
                  <div>
                    <h2>Ejecucion de obras</h2>
                    <p>Construccion de todo tipos de obras indicadas.</p>
                  </div>
                </div>
              </div>
            </section>
        
</body>
</html>
@endsection