<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="trabajador_id" content="{{Auth::check() ? Auth::user()->getPersona->getTrabajador->id : ''}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Atatau Gaming</title>
  <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">

</head>

<body id="page-top">

  <div id="app">
  {{-- <input type="hidden" value="{{ Auth::user()->centro_id }}" id="idCentro"> --}}
  
    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- BARRA LATERAL DE OPCIONES SEGUN EL TIPO SE USUARIO -->
      
      @if(Auth::check())
          @if(Auth::user()->tipo=='G')
              @include('sidebars.sidebargerente')
          @elseif(Auth::user()->tipo=='C')
              @include('sidebars.sidebarpuesto')
          @elseif(Auth::user()->tipo=='R')
              @include('sidebars.sidebarrecepcionista')
          @elseif(Auth::user()->tipo=='T')
              @include('sidebars.sidebaralmacen')
          @else

          @endif
      @endif
      




      <!-- INICIO BARRA SUPERIOR -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-2 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- INICIO DEL BUSCADOR-->
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
              </li>
              <!-- FIN DEL BUSCADOR-->
              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- INICIO DE LA INFORMACIÓN DEL USUARIO -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  Hola, {{ Auth::user()->getNombres() }}
                </span>
                  <img class="img-profile rounded-circle" src="">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Cerrar Sesión
                  </a>
                </div>
              </li>
              <!-- FIN DE LA INFORMACIÓN DEL USUARIO -->
            </ul>
          </nav>

          <div class="container-fluid">
            <!-- CONTENIDO PRINCIPAL SEGUN EL TIPO DE USUARIO -->
              @yield('contenidoPrincipal')
              <!-- FIN DEL CONTENIDO PRINCIPAL -->


          </div>



        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; EasyCode 2019</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- FIN DE LA BARRA SUPERIOR -->

    </div>
    <!-- End of Page Wrapper -->
  </div>
  <!-- FIN DEL DIV con id = 'app' -->

  



  <!-- BOTON PARA EL SCROLL RAPIDO-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- MODAL CUANDO PRESIONAS CERRAR SESIÓN-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Listo para irse?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          {{-- <a class="btn btn-primary" href="{{route('logout')}}">Cerrar sesión</a> --}}
          <a class="btn btn-primary" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- FIN DEL MODAL-->




  <!--todos los scritps-->
  <!--<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
  <script src="js/Chart.min.js"></script>-->

  
  
  
  
  <script src="js/app.js"></script>

  <script src="js/plantilla.js"></script>
  
</body>

</html>