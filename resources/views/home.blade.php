@extends('layouts.plantilla')
@section('title', 'Madajero | Inicio')

@section('contenido')

   
<style>
  .banner-image {
    background-image: url('img/fondos/fondo-home.jpg');
    background-size: cover;

  }
</style>

  <!-- Banner Image heroes  -->
<section id="banner-image" class="banner-image">
<div class="w-100 vh-100 d-flex justify-content-center align-items-center">
  <div class="content text-center">
    <h1 class="text-uppercase">Planeacion, desarrollo y ejecucion de servicios de ingenieria</h1>
  </div>
</div>
</section>

<!-- Seccion de servicios  -->

<section id="servicios" class="servicios-seccion titulo fondoGriss" aling="center">
  <div class="container p-5 mb-4">
    <div class="container">
      <h1 class="text-center">Servicios</h1>
    </div>
    <div>

    </div>
  </div>
  <div class="container titulo subtitulo parrafo" >
    <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

      <div class="col-lg-3 col-md-4 col-xs-6 mb-4" aling="center">
        <div class="service-border">
          <img src="img/iconos/proyecto-128px.png" class="img-fluid client-logo" alt="">
        </div>
        <div>
          <p class="p-4">
            Elaboración de<br>proyectos ejecutivos
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 mb-4" aling="center">
        <div class="service-border">
          <img src="img/iconos/planeacion-128px.png" class="img-fluid client-logo" alt="">
        </div>
        <div>
          <p class="p-4">
            Integración y<br>planeación
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 mb-4" aling="center">
        <div class="service-border">
          <img src="img/iconos/supervicion-128px.png" class="img-fluid client-logo" alt="">
        </div>
        <div>
          <p class="p-4">
            Coordinación y<br>supervisión de obras
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 mb-4" aling="center">
        <div class="service-border">
          <img src="img/iconos/obras-128px.png" class="img-fluid client-logo" alt="">
        </div>
        <div>
          <p class="p-4">
            Ejecución de<br>obras
          </p>
        </div>
      </div>

    </div>
  </div>
  <div aling="center">
    <a class="btn btn-main" href="#">Saber más</a>
  </div>
</section>

<!-- Seccion de servicios  -->

  <!-- Nosotros  -->
  <section id="nosotros-home" class="titulo parrafo">
    <div class="container p-5 mb-4">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 " data-aos="fade-left" data-aos-delay="100">
          <img src="img/fondos/fondo-nosotros-home.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content ">
          <h1>Nosotros</h1>
          <p class="justify">
            Grupo madajero se constituye como una empresa integral para la planeación, desarrollo y ejecución de
            servicios de ingeniería;construcción, supervisión y mantenimiento de obras residenciales, comerciales e industrial bajo
            especificaciones o requerimientos propios que demandan el proyecto o lugar de aplicación.
          </p>
          <a class="btn btn-main text-center" href="#">Saber más</a>
        </div>
      </div>
    </div>
  </section>


  <!-- Nosotros  -->

  <section id="contador" class="contador-home" aling="center">
    <div class="container">
      <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">

        <!-- primer contador-->
        <div>
          <div class="counters-item">
            <i class="tf-ion-ios-alarm-outline"></i>
            <div class="text-center">
              <span class="counter " data-count="2003">2003</span>
            </div>
            <h3 class="text-center">Año de<br>establecimiento</h3>
          </div>
        </div>

        <!-- segundo item -->
        <div>
          <div class="counters-item">
            <i class="tf-ion-ios-analytics-outline"></i>
            <div class="text-center">
              <span class="counter" data-count="250">250</span>
            </div>
            <h3 class="text-center">proyectos<br>completados</h3>
          </div>
        </div>

        <!-- tercer item -->
        <div>
          <div class="counters-item">
            <i class="tf-ion-ios-compose-outline"></i>
            <div class="text-center">
              <span class="counter" data-count="850">850</span>
            </div>
            <h3 class="text-center">Costrucciones<br>concretadas</h3>

          </div>
        </div>

        
      </div>
    </div>
  </section>

  <!-- Proyectos  -->

  <section id="proyectos-home" class="titulo subtitulo fondoGriss">
    <div class="text-proyectos p-3 text-center">
      <h2>Que hacemos</h2>
      <h1>Nuestros proyectos</h1>
    </div>
    <div class="gallery min-vh-100 container-lg py-3">
      <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
        <div class="col">
          <img src="img/Proyectos/2.jpg" class="gallery-item" alt="gallery">
        </div>
        <div class="col">
          <img src="img/Proyectos/3.jpg" class="gallery-item" alt="gallery">
        </div>
        <div class="col">
          <img src="img/Proyectos/4.jpg" class="gallery-item" alt="gallery">
        </div>
        <div class="col">
          <img src="img/Proyectos/5.jpg" class="gallery-item" alt="gallery">
        </div>
        <div class="col">
          <img src="img/Proyectos/6.jpg" class="gallery-item" alt="gallery">
        </div>
        <div class="col">
          <img src="img/Proyectos/7.jpg" class="gallery-item" alt="gallery">
        </div>
      </div>
    </div>
    <div aling="center">
      <a class="btn btn-main" href="#">Saber más</a>
    </div>
  </section>
  <!-- Proyectos  -->

 

@endsection

