<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sistema Ventas Laravel Vue Js- IncanatoIT">
        <meta name="author" content="Incanatoit.com">
        <meta name="keyword" content="Sistema ventas Laravel Vue Js, Sistema compras Laravel Vue Js">
        
        <link rel="shortcut icon" href="img/favicon.png">

        <meta name="userId" content="{{Auth::check() ? Auth::user()->id : ''}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Municipalidad JLO</title>
        <!-- Icons -->
        {{-- <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/simple-line-icons.min.css" rel="stylesheet">
        <!-- Main styles for this application -->
        <link href="css/style.css" rel="stylesheet"> --}}
        <link href="css/plantilla.css" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.7.2/src/chart.js"> --}}
    </head>

    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
        <div id="app">
            <!-- Aqui va la NAVEGACION SUPERIOR  -->
            <header class="app-header navbar">
                <i class="fab fa-app-store-ios"></i>
                <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
                <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
                <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav navbar-nav d-md-down-none">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#">Escritorio</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#">Configuraciones</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <notification :notifications="notifications"></notification>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="d-md-down-none"> {{Auth::user()->usuario}} </span>
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
            <span><a href="http://www.incanatoit.com/">EasyCode</a> &copy; 2019</span>
            <span class="ml-auto">Desarrollado por <a href="http://www.google.com/">EasyCode</a></span>
        </footer>
        <!-- FIN DE LA PARTE INFERIOR DE LA APP -->

        <script src="js/app.js"></script>
        <script src="js/plantilla.js"></script>
        
    </body>

</html>