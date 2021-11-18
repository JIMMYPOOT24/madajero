@extends('layouts.plantilla')
@section('title', 'Madajero | contactanos')

@section('contenido')

<style>
  .banner-image {
    background-image: url('img/fondos/fondo-contactanos.png');
    background-size: cover;
    background-position: center
  }
</style>

<!-- Banner Image heroes  -->
<section class="banner-image">
  <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
      <h1 class="text-white text-center">Contactenos</h1>
      <h1 class="text-white text-center">Para todas sus dudas y aclaraciones</h1>
    </div>
  </div>
</section>

<section class="contact-us" id="contact">
  <div class="container">
    
        
      <!-- Contact Form -->
      <div class="contact-form">


        <form action="{{route('contactanos.store')}}" id="contact-form" method="post" role="form">
          @csrf


          <div class="row g-4 texto-mensaje">

            <div class="col-12 col-md-6 ">

              <div class="form-group cajadist">
                <h1>Nombre y Apellido</h1>
                <input type="text" placeholder="Nombre Completo" class="form-control cotact-caja" name="name" id="name">
              </div>
              
              <div class="form-group cajadist">
                <h1>Correo Eléctronico</h1>
                <input type="email" placeholder="Correo Eléctronico" class="form-control" name="email" id="email">
              </div>
              
              <div class="form-group cajadist">
                <h1>Numero de contacto</h1>
                <input type="text" placeholder="Número de Teléfono" class="form-control" name="number" id="number">
              </div>

            </div>
  
            <div class="col-12 col-md-6 ">
              <div class="form-group">
                <h1 class="text-center" >Mensaje</h1>
                <textarea rows="6" placeholder="Escribe aquí tu mensaje" class="form-control" name="message" id="message"></textarea>	
              </div>
            </div>
  
          <div id="success" class="success">
            Gracias por ponerte en contacto. Tu mensaje esta en camino.
          </div>
          
          <div id="error" class="error">
            Lo sentimos, algo no esta bien. Por favor intentalo mas tarde.
          </div>
         
          <div id="cf-submit">
            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Enviar">
          </div>
          
        </div>
          
        </form>
      </div>
  </div>
</section>





@endsection
