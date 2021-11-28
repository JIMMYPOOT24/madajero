@extends('layouts.plantilla')
@section('title', 'Madajero | Nosotros')

@section('contenido')

<style>
    .banner-image {
      background-image: url('storage/{{$datonosotros->img1_nosotros}}');
      background-size: cover;
      background-position: center;

    }
  </style>

    <!-- Banner Image heroes  -->
<section id="banner-image" class="banner-image">
  <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
      <h1 class="fw-bolder">Nosotros</h1>
    </div>
  </div>
</section>

<section class="section-sm titulo textoNosotros subtitulo">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid bordi" src="storage/{{$datonosotros->img2_nosotros}}" alt="">
      </div>
      <div class="col-md-6 mt-20">
        <h1>Grupo Constructor<br>Madajero S.A. de C.V.</h1>
        <h3>{{$datonosotros->txt_nosotros}}</h3>
           <div class="col-md-6 centrarPDF">
            <img src="img/iconos/archivo-pdf.png" alt="" class="img-fluid icon-pdf">
            <a href="storage/{{$datonosotros->curriculum}}" class="btn btn-main" target="_blank">Descargar<br>Curriculum</a>
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
            <p class="textMV2">{{$datonosotros->txt_vision}}</p>
          
        </div>
      </div>

      <div class="col-md-6 mt-20">
        <div class="caja">
          <div>
            <h1 class="textMV1">Misión</h1>
            <p class="textMV2">{{$datonosotros->txt_mision}}</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


  <!-- slider de certificacion  -->
 <section id="carouselExampleCaptions" class="carousel slide ">

  <div class= "titulo mb-2"> 
    <h1>Certificaciones</h1>
    <br>
  </div>

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

      @forelse ($banner as $item)
          
      <div class="carousel-item  @if ($loop->index==0) active @endif ">
        <img src="storage/{{ $item->url_img}}" class="d-block" alt="..."  >
        <div class="carousel-caption">
          <h3>{{ $item->titulo}}</h3>
        </div>
       
      </div>

      @empty
          
      @endforelse
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