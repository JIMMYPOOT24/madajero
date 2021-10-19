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


<section class="section-sm titulo subtitulo">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid bordi" src="img/proyectos/17.jpg" alt="">
      </div>
      <div class="col-md-6 mt-20">
        <h1>Grupo Constructor<br>Madajero S.A. de C.V.</h1>
        <p>Una empresa integral para la planeación, desarrollo y ejecución de servicios de ingeniería;
          construcción, supervisión y mantenimiento de obra residencial, comercial e industrial bajo
           especificaciones o requerimientos propios que demanda el proyecto o lugar de aplicación.</p>
           <div class="col-md-6 centrarPDF">
            <img src="img/iconos/archivo-pdf.png" alt="" class="img-fluid icon-pdf">
            <a href="" class="btn btn-main">Descargar<br>Curriculum</a>
          </div>
      </div>
      
    </div>
  </div>
</section>



<section class="section-sm bg-gray nosotros-home subtitulo bannerz-text">
  <div class="container textMisionVision">
    <div class="row">
      
      <div class="col-md-6">
        <div class="card">
          <div class="card-side front">
            <div>
                  <h1 class="">Visión</h1>
            </div>
          </div>
          <div class="card-side back">
            <div>
              <p>Grupo constructor Madajero, S. A. De C. V., es una empresa en donde los colaboradores
                trabajan en conjunto, para ofrecer una atención personalizada que aumenta la confianza
                 y satisfacción de nuestros clientes; transformando sus necesidades en propuestas eficientes
                  y de gran plusvalía en donde la relación costo-beneficio sea la mas óptima para ambas
                   partes, brindando así, un servicio integral de calidad con tecnología de vanguardia, 
                   optimizando los recursos humanos, técnicos y económicos; promoviendo la protección al 
                   medio ambiente, el desarrollo social y el respeto mutuo que nos permita posicionarnos 
                   como empresa líder en el mercado nacional.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-side front">
            <div class="row">
              <div class="col-md-6">
                  <h1 class="">Misión</h1>
                  </div>
            </div>
          </div>
          <div class="card-side back">
            <div>
              <p>El compromiso de grupo constructor Madajero, S. A. De C. V., con base en un crecimiento 
                constante y con sentido alto de la ética profesional como uno de sus valores distintivos, 
                es y será la mejora continua en cada uno de los integrantes que la componen, con una solida 
                estructura organizacional que proporcione bienestar a sus empleados, clientes y proveedores 
                con la garantía de un servicio de máxima calidad, honestidad y respeto mutuo.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- slider certificaciones -->
<section class="call-to-action section titulo subtitulo subtitulo2">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3 class="bannerz-text">Certificaciones </h3>
          <p>Slider como el de jorrifadi
          </p>
      </div>
    </div>
  </div>   	
</section>


 

@endsection