@extends('layouts.plantilla')
@section('title', 'Madajero | Servicios')

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
  
  <!-- Lista de servicios  -->
  <section id="services" class="services section-bg ">
  <div class="container" data-aos="fade-up">
  <div class="row">
    <div class="col-md-6">
      <div class="icon-box" data-aos="fade-up">
        <i class="bi bi-bar-chart"></i>
        <img src="img/iconos/proyecto-128px.png" alt="icono-proyectos-ejecutivos">
        <h4>Elaboracion de proyectos ejecutivos</h4>
        <li style="list-style-type: upper-roman">
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
        </li>
        </div>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
      <div class="icon-box" data-aos="fade-up" >
        <i class="bi bi-bar-chart"></i>
        <img src="img/iconos/planeacion-128px.png" alt="icono-proyectos">
        <h4>Elaboracion de proyectos ejecutivos</h4>
          <p>Participación de diciplinas varias.</p>
          <p>Programación de proyectos.</p>
          <p>Solución a integracion de proyectos.</p>
          <p>Recepción de información y tramites generales.</p>
          <p>Integración de proyectos y presupuestos.</p>
          <p>Elaboración de programas de insumos.</p>
        </div>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
      <div class="icon-box" data-aos="fade-up" >
        <i class="bi bi-bar-chart"></i>
        <img src="img/iconos/supervicion-128px.png" alt="icono-obras">
        <h4>Coordinacion y supervición de obras.</h4>
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
    <div class="col-md-6 mt-4 mt-md-0">
      <div class="icon-box" data-aos="fade-up" >
        <i class="bi bi-binoculars"></i>
        <img src="img/iconos/obras-128px.png" alt="icono-servicios">
        <h4>Ejecucion de obras</h4>
        <p>Construccion de todo tipos de obras indicadas.</p> </div>
    </div>
  </div>

</div>
</section>


@endsection