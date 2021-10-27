@extends('layouts.plantilla')
@section('title', 'Madajero | Nosotros')

@section('contenido')

<style>
    .banner-image {
      background-image: url('img/fondos/fondo-nosotros-home.jpg');
      background-size: cover;

    }
  </style>

    <!-- Banner Image heroes  -->
<section id="banner-image" class="banner-image">
  <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
      <h1 >Planeacion, desarrollo y ejecucion de servicios de ingenieria</h1>
    </div>
  </div>
</section>

<section class="section-sm titulo textoNosotros subtitulo">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid bordi" src="img/proyectos/17.jpg" alt="">
      </div>
      <div class="col-md-6 mt-20">
        <h1>Grupo Constructor<br>Madajero S.A. de C.V.</h1>
        <h3>Una empresa integral para la planeación, desarrollo y ejecución de servicios de ingeniería;
          construcción, supervisión y mantenimiento de obra residencial, comercial e industrial bajo
           especificaciones o requerimientos propios que demanda el proyecto o lugar de aplicación.</h3>
           <div class="col-md-6 centrarPDF">
            <img src="img/iconos/archivo-pdf.png" alt="" class="img-fluid icon-pdf">
            <a href="" class="btn btn-main">Descargar<br>Curriculum</a>
          </div>
      </div>
      
    </div>
  </div>
</section>

<!-- Cards  -->
<section class="section-sm bg-gray subtitulo bannerz-text">
  <div class="container textMisionVision">

    <div class="row">

      <div class="col-md-6 mt-20">
        <div class="caja">
          <h1 class="textMV1">Visión</h1>
            <p class="textMV2">Grupo constructor Madajero, S. A. De C. V., es una empresa en donde los colaboradores
              trabajan en conjunto, para ofrecer una atención personalizada que aumenta la confianza
               y satisfacción de nuestros clientes; transformando sus necesidades en propuestas eficientes
                y de gran plusvalía en donde la relación costo-beneficio sea la mas óptima para ambas
                 partes, brindando así, un servicio integral de calidad con tecnología de vanguardia, 
                 optimizando los recursos humanos, técnicos y económicos; promoviendo la protección al 
                 medio ambiente, el desarrollo social y el respeto mutuo que nos permita posicionarnos 
                 como empresa líder en el mercado nacional.  </p>
          
        </div>
      </div>

      <div class="col-md-6 mt-20">
        <div class="caja">
          <div>
            <h1 class="textMV1">Misión</h1>
            <p class="textMV2">El compromiso de grupo constructor Madajero, S. A. De C. V., con base en un crecimiento 
              constante y con sentido alto de la ética profesional como uno de sus valores distintivos, 
              es y será la mejora continua en cada uno de los integrantes que la componen, con una solida 
              estructura organizacional que proporcione bienestar a sus empleados, clientes y proveedores 
              con la garantía de un servicio de máxima calidad, honestidad y respeto mutuo.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


  <!-- slider de certificacion  -->
 <section id="carouselExampleCaptions" class="carousel slide">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="img/fondos/fondo1.jpg" class="d-block dimensonCarousel img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Certificacion 1</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/fondos/Certificaciones2.jpg" class="d-block dimensonCarousel img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Certificacion 2</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/fondos/Certificaciones3.jpg" class="d-block dimensonCarousel img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Certificacion 3</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </section>

 

@endsection