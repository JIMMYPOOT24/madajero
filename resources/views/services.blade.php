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
        <img src="img/iconos/proyecto-128px.png" alt="icono-proyectos-ejecutivos ">
        <h4>Elaboracion de proyectos ejecutivos</h4>
        <ul style= "list-style-type: square">
          <li><p>Proyectos ejecutivos autorizados.</p></li>
          <li><p>Ingeniería de infraestructura residencial.</p></li>
          <li><p>Ingeniería de infraestructura comercial.</p></li>
          <li><p>Ingeniería de infraestructura industrial.</p></li>
          <li><p>Ingeniería de infraestructura turistica.</p></li>
          <li><p>Memoria técnica.</p></li>
          <li><p>Especificaciones de construcción.</p></li>
          <li><p>Catálogo de obras.</p></li>
          <li><p>Precios unitarios.</p></li>
          <li><p>Programa de obras.</p></li>
        </ul>
        </div>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
      <div class="icon-box" data-aos="fade-up" >
        <i class="bi bi-bar-chart"></i>
        <img src="img/iconos/planeacion-128px.png" alt="icono-proyectos">
        <h4>Integracion y planeación de proyectos ejecutivos</h4>
        <ul style= "list-style-type: square">
          <li><p>Participación de diciplinas varias.</p></li>
          <li><p>Programación de proyectos.</p></li>
          <li><p>Solución a integracion de proyectos.</p></li>
          <li><p>Recepción de información y tramites generales.</p></li>
          <li><p>Integración de proyectos y presupuestos.</p></li>
          <li><p>Elaboración de programas de insumos.</p></li>
        </ul>
        </div>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
      <div class="icon-box" data-aos="fade-up" >
        <i class="bi bi-bar-chart"></i>
        <img src="img/iconos/supervicion-128px.png" alt="icono-obras">
        <h4>Coordinacion y supervición de obras.</h4>
        <ul style= "list-style-type: square">
          <li><p>Puesta en marcha de estrategias de obras.</p></li>
          <li><p>Vigilancias de control de calidad.</p></li>
          <li><p>Vigilancia de cumplimiento en términos de contrato.</p></li>
          <li><p>Elaboracion de estimacion de avance a contratistas.</p></li>
          <li><p>Elaboración de reportes de avance general.</p></li>
          <li><p>Solución a problemas de obras.</p></li>
          <li><p>Coordinación con autoridades y organismos oficiales.</p></li>
          <li><p>Entrega de obras.</p></li>
        </ul>
      </div>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
      <div class="icon-box" data-aos="fade-up" >
        <i class="bi bi-binoculars"></i>
        <img src="img/iconos/obras-128px.png" alt="icono-servicios">
        <h4>Ejecucion de obras</h4>
        <ul style= "list-style-type: square">
        <li><p>Construccion de todo tipos de obras indicadas.</p></li> 
      </ul>
      </div>
    </div>
  </div>

</div>
</section>


@endsection