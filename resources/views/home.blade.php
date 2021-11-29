@extends('layouts.plantilla')
@section('title', 'Madajero | Inicio')

@section('contenido')

   
<style>
  .banner-image {
    background-image: url('storage/{{$datosinicio->img1_inicio}}');
    background-size: cover;
    background-position: center;

  }
</style>

  <!-- Banner Image heroes  -->
  <section id="banner-image" class="banner-image">
    <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-center ">
        <h1>{{$datosinicio->slogan}} </h1>
      </div>
    </div>
  </section>

    <!-- Banner text  -->

    <section id="banner-text" class="banner-text ">
      <div class="p-5 mb-4 ">
        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h2 class="col-md-10">Ingeniería es lo que hacemos</h2>
            <h3 class="display-6 fw-bold ">Grupo Constructor Madajero Proyectos de calidad </h3>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="aliboton">
              <a class="btn btn-main" href="{{url('proyectos')}}">Saber más</a>
              </div>
          </div>
        </div>
  
        </div>
      </section>


<!-- Banner text  -->

<!-- Seccion de servicios  -->

<section id="servicios-home" class="d-flex titulo parrafo fondoGriss">
  <div class="container centrarob">
    <div class="container">
      <div class="">
        <h1>Servicios</h1>
      </div>
    </div>
    

    <div class="row icon-boxes">

      <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
        <div>
          <div class="icon-box">
          <img src="img/iconos/proyecto-128px.png" class="img-fluid client-services" alt="">
          </div>
          <h4 class="py-3">
            {{$datoservicio1->categoria}}
          </h4>
      </div>
    </div>

      <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
        <div>
          <div class="icon-box">
          <img src="img/iconos/planeacion-128px.png" class="img-fluid client-services" alt="">
          </div>
          <h4 class="py-3">
            {{$datoservicio2->categoria}}
          </h4>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
      <div>
        <div class="icon-box">
        <img src="img/iconos/supervicion-128px.png" class="img-fluid client-services" alt="">
        </div>
        <h4 class="py-3">
          {{$datoservicio3->categoria}}
        </h4>
    </div>
  </div>
  <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
    <div>
      <div class="icon-box">
      <img src="img/iconos/obras-128px.png" class="img-fluid client-services" alt="">
      </div>
      <h4 class="py-3">
        {{$datoservicio4->categoria}}
      </h4>
  </div>
</div>

    </div>
        
  <div class="alibotonser">
    <a class="btn btn-main" href="{{url('servicios')}}">Saber más</a>
  </div>
</div>
</section>


<!-- Seccion de servicios  -->

<!-- Nosotros  -->
<section id="nosotros-home" class="titulo  textoNosotros">
  <div class="container p-5 mb-4">
    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2 " data-aos="fade-left" data-aos-delay="100">
        <img src="storage/{{$datosinicio->img2_inicio}}" class="img-fluid redondo" alt="imagen clientes">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h1>Nosotros</h1>
        <h3>
          {{$datonosotros->txt_nosotros}}
        </h3>
        <div class="aliboton">
        <a class="btn btn-main" href="{{route('nosotros')}}">Saber más</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Nosotros  -->
<section id="contador" class="contador-home">
  <div class="container centrarCounter">
    <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">

      <!-- primer contador-->
      <div >
        <div class="counters-item">
          <i class="tf-ion-ios-alarm-outline"></i>
          <div>
            <span class="counter" data-count="{{$datosinicio->dato_fecha}}">100</span>
          </div>
          <h3>Año de<br>establecimiento</h3>
        </div>
      </div>

      <!-- segundo item -->
      <div>
        <div class="counters-item">
          <i class="tf-ion-ios-analytics-outline"></i>
          <div>
            <span class="counter" data-count="{{$datosinicio->dato_proyectos}}">100</span>
          </div>
          <h3>Proyectos<br>completados</h3>
        </div>
      </div>

      <!-- tercer item -->
      <div>
        <div class="counters-item">
          <i class="tf-ion-ios-compose-outline"></i>
          <div>
            <span class="counter" data-count="{{$datosinicio->dato_construccion}}">100</span>
          </div>
          <h3>Costrucciones<br>concretadas</h3>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Proyectos  -->
<section id="proyectos-home" class="titulo subtitulo fondoGriss">
  <div class="text-proyectos p-3 text-center">
    <br>
    <h1>Nuestros proyectos</h1>
  </div>
  <div class="gallery min-vh-100 container-lg py-3">
    <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
      <div class="">
        <img src="storage/{{$datoproyecto1->url_img}}" class="gallery-item" alt="gallery">
      </div>
      <div class="">
        <img src="storage/{{$datoproyecto2->url_img2}}" class="gallery-item" alt="gallery">
      </div>
      <div class="">
        <img src="storage/{{$datoproyecto2->url_img3}}" class="gallery-item" alt="gallery">
      </div>
      <div class="">
        <img src="storage/{{$datoproyecto2->url_img4}}" class="gallery-item" alt="gallery">
      </div>
      <div class="">
        <img src="storage/{{$datoproyecto2->url_img5}}" class="gallery-item" alt="gallery">
      </div>
      <div class="">
        <img src="storage/{{$datoproyecto2->url_img6}}" class="gallery-item" alt="gallery">
      </div>
    
    </div>
    <br>
    <br>
    <div class="aliboton">
      <a class="btn btn-main" href="{{url('proyectos')}}">Saber más</a>
    </div>
  </div>
  
</section>
<!-- Proyectos  -->


<!-- Clientes  -->

<section id="clientes-home" class="titulo subtitulo">
  <div class="container">
    <div class="text-clientes p-3 text-center">
      <h1>Nuestros clientes</h1>
    </div>
  </div>
  @foreach ($clientes as $item)
    <div class="clientes-h container">
      
      <div class="col-lg-2 col-md-4 col-xs-8 mb-4  active  ">
        <div>
          <img src="storage/{{$item->logo}}" alt="logo clientes" >
        </div>
      </div>

      @endforeach
    </div>

  
</section>


<!-- Clientes  -->

 

@endsection
