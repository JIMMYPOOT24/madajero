<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CDN bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS main  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- CDN foont awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- CDN font family google raleway  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;600&display=swap" rel="stylesheet">
    <!-- CDN font family avenir  -->
    <link href="http://fonts.cdnfonts.com/css/avenir-lt-std" rel="stylesheet">
    <!-- CDN Boton de whatsapp  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  

    <title>@yield('title')</title>
</head>


<body>

    <!-- Navbar  -->
    <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-light p-md-3">
      <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">
          <img src="img/logos/logo-white.png" alt="logo-white" width="150">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse " id="navbarNav">
        <div class="mx-auto">    </div>
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link text-white" href="{{route('index')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('nosotros')}}">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{url('servicios')}}">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{url('proyectos')}}">Proyectos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{url('contactanos')}}">Contáctanos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

   
  <!-- Modal de galeri -->
  <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <img src="img/gProyectos/2.jpg" class="modal-img" alt="modal img">
        </div>
      </div>
    </div>
  </div>


  <!-- Boton de whatsapp -->
  <a href="https://api.whatsapp.com/send?phone=9832299070&text=Hola%20me%20interesa%20mas%20informacion%20sobre%20sus%20servicios%20que%20ofrecen" class="float" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
  </a>
      @yield('contenido')
     
      <!-- Footer -->
  <footer class="py-4 ">
    <STYLE>
      A {
        text-decoration: none;
      }
    </STYLE>
    <div class="footer-links container">
      <nav class="row justify-content-center">
        <!-- Logo -->
        <a href="{{route('index')}}" class="col-12 col-md-3   text-reset d-flex align-items-center justify-content-center mb-5 mb-md-0">
          <img src="/img/logos/logo-color.png" alt="logo madajero" class="img-logo mr-2" height="130">

        </a>
        <!-- menu 1 -->
        <ul class="col-8 col-md-3 list-unstyled">
          <h5 class="font-weight-bold ">Quienes somos</h5>
          <li><a href="{{route('index')}}" class="text-reset">Inicio</a></li>
          <li><a href="{{route('nosotros')}}" class="text-reset">Nosotros</a></li>
          <li><a href="{{route('servicios')}}" class="text-reset">Servicios</a></li>
          <li><a href="{{route('proyectos')}}" class="text-reset">Proyectos</a></li>
          <li><a href="{{route('contactanos')}}" class="text-reset">Contáctanos</a></li>
        </ul>
        <!-- menu 2 -->
        <ul class="col-8 col-md-3  list-unstyled">
          <h5 class="font-weight-bold ">Servicios</h5>
          <li><a href="{{route('servicios')}}" class="text-reset">Elaboración de proyectos ejecutivos</a></li>
          <li><a href="{{route('servicios')}}"class="text-reset">Integración y planeación de proyectos</a></li>
          <li><a href="{{route('servicios')}}" class="text-reset">Coordinación y supervición de obras</a></li>
          <li><a href="{{route('servicios')}}" class="text-reset">Ejecución de obras</a></li>
        </ul>
        <!-- Contáctanos y redes sociales -->
        <ul class="col-8 col-md-3 list-unstyled">
          <h5 class="font-weight-bold ">Contáctanos</h5>
          <li></i><a class="text-reset">983-100-1010</a> <i class="fas fa-phone-alt"></i></li>
          <li></i><a href="{{route('contactanos')}}" class="text-reset">Correo@ejemplo.com</a> <i class="far fa-envelope"></i></li>
          <li class="iconos d-flex py-3">
            <!-- Facebook -->
            <a href= https://www.facebook.com/ target="_blank" class="text-reset"><i class="fab fa-facebook"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </footer>
 <!-- footer Copyright -->
 <div class="footer-copyright text-center py-3">
  © 2020 Copyright todos los derechos reservados
</div>

</body>




<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
  crossorigin="anonymous"></script>
<script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
  crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
  crossorigin="anonymous"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>


 <!-- Form Validation -->
 <script src="js/jquery.form.js"></script> 
 <script src="js/jquery.validate.min.js"></script>

 <!-- Custom js -->
 <script src="js/script.js"></script>


<script type="text/javascript">
  var nav = document.querySelector('nav');
  window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
      nav.classList.add('colornav', 'shadow');
    } else {
      nav.classList.remove('colornav', 'shadow');
    }
  });
</script>


</html>