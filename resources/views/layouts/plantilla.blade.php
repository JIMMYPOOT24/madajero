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
    <!-- CDN sweetalert  -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- CDN Ajax  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>@yield('title')</title>
</head>


<body>

    <!-- Navbar  -->
    <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-light p-md-3">
      <div class="container ">
        <div class="logonav">
         <a class="navbar-brand" href="{{route('index')}}">
          <img src="img/logos/logo-white-3.png" alt="logo-white" width="220">
         </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

       <div class="text-center collapse navbar-collapse " id="navbarNav">
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
        <div class="modal-dialog modal-lg modal-dialog-centered">
          
          <div class="modal-content">
           
            <img src="img/gProyectos/2.jpg" class="modal-img img-fluid" alt="modal img">
            
          </div>
          
        </div>
     
    </div>
  </div>


  <!-- Boton de whatsapp -->
  <a href="https://api.whatsapp.com/send?phone=+52{{$datosinicio->telefono}}&text=Hola%20me%20interesa%20mas%20informacion%20sobre%20sus%20servicios%20que%20ofrecen" class="float" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
  </a>
      @yield('contenido')
     
      <!-- Footer -->
  <footer class=" pt-5">
    <div class="container text-right text-md-left pl-0">
      <div class="container text-justify">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
          <div class="col-md-3 text-center">
            <a href="{{route('index')}}">
              <img src="/img/logos/logo-color1.png" alt="logo madajero" class="img-logo" height="155">
            </a>
          </div>
          
          <div class="col-md-2">
            <h5 class="text-uppercase mb-4 font-weight-bold">Quienes somos</h5>
          <p>
            <a href="{{route('index')}}" class="link-dark " style="text-decoration: none;">Inicio</a>
          </p>
          <p>
            <a href="{{route('nosotros')}}" class="link-dark" style="text-decoration: none;">Nosotros</a>
          </p>
          <p>
            <a href="{{route('servicios')}}" class="link-dark" style="text-decoration: none;">Servicios</a>
          </p>
          <p>
            <a href="{{route('proyectos')}}" class="link-dark" style="text-decoration: none;">Proyectos</a>
          </p>
          <p>
            <a href="{{route('contactanos')}}" class="link-dark" style="text-decoration: none;">Contáctanos</a>
          </p>
          </div>
          <div class="col-md-3">
            <h5 class="text-uppercase mb-4 font-weight-bold ">Servicios</h5>
          <p>
            <a href="{{route('servicios')}}" class="link-dark " style="text-decoration: none;">Elaboración de proyectos ejecutivos</a>
          </p>
          <p>
            <a href="{{route('servicios')}}" class="link-dark " style="text-decoration: none;">Integración y planeación de proyectos</a>
          </p>
          <p>
            <a href="{{route('servicios')}}" class="link-dark " style="text-decoration: none;">Coordinación y supervisión de obras</a>
          </p>
          <p>
            <a href="{{route('servicios')}}" class="link-dark " style="text-decoration: none;">Ejecución de obras</a>
          </p>
          </div>
          <div class="col-md-4">
            <h5 class="text-uppercase mb-4 font-weight-bold">Contácto</h5>
            <p>
              <i class="fas fa-phone-alt"></i> {{$datosinicio->telefono}}
            </p>
            <p class="reducir">
              <i class="fas fa-envelope"></i> {{$datosinicio->correo}}
            </p>
            <p>
              <a href= "https://www.facebook.com/GrupoConstructorMadajero/" target="_blank" class="link-dark"  style="text-decoration: none;"><i class="fab fa-facebook"></i> Grupo Constructor Madajero</a>
            </p>
          </div>
        </div>
      </div>
    </div>

  </footer>
 <!-- footer Copyright -->
 <div class="footer-copyright text-center py-3">
  © 2022 Copyright todos los derechos reservados
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
 <script src="js/enviar.js"></script> 
 <script src="js/sweetAlert.js"></script>
 

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