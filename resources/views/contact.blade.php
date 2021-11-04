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


        <form id="contact-form" method="post" role="form">

          <div class="form-group">
            <input type="text" placeholder="Nombre" class="form-control" name="name" id="name">
          </div>
          
          <div class="form-group">
            <input type="email" placeholder="Correo" class="form-control" name="email" id="email">
          </div>
          
          <div class="form-group">
            <input type="text" placeholder="Numero de telefono" class="form-control" name="number" id="number">
          </div>


          <div class="form-group">
            <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
          </div>
          
          <div id="success" class="success">
            Gracias por ponerte en contacto. Tu mensaje esta en camino :)
          </div>
          
          <div id="error" class="error">
            Lo sentimos, algo no esta bien. Por favor intentalo mas tarde :(
          </div>

          <div id="cf-submit">
            <button class="btn btn-main align-items-center"> enviar </button>
          </div>						
          
        </form>
      </div>
  </div>
</section>





@endsection