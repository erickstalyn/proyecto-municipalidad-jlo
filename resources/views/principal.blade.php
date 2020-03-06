<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sistema Interno MJLO">
        <meta name="author" content="EasyCode">
        <meta name="keyword" content="">
        
        <link rel="shortcut icon" href="img/logo_mjlo.png">

        {{-- <meta name="userId" content="{{Auth::check() ? Auth::user()->id : ''}}"> --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Municipalidad JLO</title>

        <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="css/plantilla.css" rel="stylesheet">
    </head>

    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
        <div id="app">
            <!-- Aqui va la NAVEGACION SUPERIOR  -->
            <header class="app-header navbar">
                
                <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand h6 pt-3 pl-2" href="#">
                  Sistema Interno
                </a>
                <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav navbar-nav d-md-down-none">
                    <li class="nav-item px-3">
                    </li>
                    <li class="nav-item px-3">
                    </li>
                    <li class="nav-item px-3">
                    </li>
                    <li class="nav-item px-3">
                    </li>
                    <li class="nav-item px-3">
                    </li>
                    <li class="nav-item px-3">
                    </li>
                    <li class="nav-item px-3">
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link h4" href="#">
                        Municipalidad José Leonardo Ortiz <img src="img/logo_mjlo.jpg" alt="" width="48" height="48">
                      </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    {{-- <notification :notifications="notifications"></notification> --}}
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="" class="img-avatar" alt="">
                            <span class="d-md-down-none">Erick Stalyn Pacherrez Puyén</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header text-center">
                                <strong>Cuenta</strong>
                            </div>
                            <a class="dropdown-item" href="{{route('logout')}}" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Cerrar sesión</a>
                            <form id="logout-form" action="{{route('logout')}}" method="post" style="display:none;">
                                {{csrf_field()}}
                            </form>

                        </div>
                    </li>
                    
                </ul>
            </header>
            <!-- FIN DE LA NAVEGACION SUPERIOR  -->

            <!-- BARRA LATERAL DE OPCIONES SEGUN EL TIPO SE USUARIO -->
            <div class="app-body">

                {{-- @if(Auth::check())
                    @if(Auth::user()->idrol==1)
                        @include('plantilla.sidebaradministrador')
                    @elseif(Auth::user()->idrol==2)
                        @include('plantilla.sidebarvendedor')
                    @elseif(Auth::user()->idrol==3)
                        @include('plantilla.sidebaralmacenero')
                    @else

                    @endif
                @endif --}}

                @include('sidebars.sidebaradministrador')
                
                @yield('contenido')
            </div>

        </div>
        

        <!-- PARTE INFERIOR DE LA APP -->
        <footer class="app-footer">
            <span><a href="#">EasyCode</a> &copy; 2020</span>
            <span class="ml-auto">Desarrollado por <a href="#">EasyCode</a></span>
        </footer>
        <!-- FIN DE LA PARTE INFERIOR DE LA APP -->

        <script src="js/app.js"></script>
        <script src="js/plantilla.js"></script>
        
    </body>

</html>