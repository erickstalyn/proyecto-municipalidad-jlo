<!-- MENU LATERAL-->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Aqui va el Logo con su nombre -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-gamepad"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Atatau Gaming</div>
    </a>

    <!-- Divisor -->
    <hr class="sidebar-divider my-0">

    <!-- Elemento de navegación: panel de control-->
    <li class="nav-item active">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Panel de Gerencia</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Elemento de navegación - MENÚ INVENTARIO -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#inventario" aria-expanded="true" aria-controls="inventario">
        <i class="fas fa-store-alt"></i>
        <span>Inventario</span>
    </a>
    <div id="inventario" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item font-weight-bold" href="#" @click="menu=1">Equipos</a>
            <a class="collapse-item font-weight-bold" href="#" @click="menu=2">Videojuegos</a>
        </div>
    </div>
    </li>
    <!-- Elemento de navegación: MENÚ OPERACIONES -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#registros" aria-expanded="true" aria-controls="registros">
            <i class="fas fa-restroom"></i>
            <span>Registros Humanos</span>
        </a>
        <div id="registros" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item font-weight-bold" href="#" @click="menu=3">Trabajadores</a>
            <a class="collapse-item font-weight-bold" href="#" @click="menu=4">Clientes</a>
            {{-- <h6 class="collapse-header ">Cuentas</h6>
            <a class="collapse-item font-weight-bold" href="#" @click="menu=4">Usuarios</a> --}}
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#operaciones" aria-expanded="true" aria-controls="operaciones">
            <i class="fab fa-elementor"></i>
            <span>Operaciones</span>
        </a>
        <div id="operaciones" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item font-weight-bold" href="#" @click="menu=5">Mantenimientos</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#frontier" aria-expanded="true" aria-controls="frontier">
            <i class="fas fa-headset"></i>
            <span>Control de Atatau Gaming</span>
        </a>
        <div id="frontier" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item font-weight-bold" href="#" @click="menu=6">Alquileres</a>
            </div>
        </div>
    </li>

    <!-- Elemento de navegación: MENÚ ESTADISTICAS -->
    {{-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" @click="menu=8">
        <i class="fas fa-chart-pie"></i>
        <span>Estadisticas</span>
    </a>
    </li> --}}

    <!-- Divisor -->
    <hr class="sidebar-divider">

    <!-- Título -->
    <div class="sidebar-heading">
    Extras
    </div>

    <!-- N  av Item - Pages Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#redes" aria-expanded="true" aria-controls="redes">
        <i class="fas fa-thumbs-up"></i>
        <span>Nuestras Redes</span>
    </a>
    <div id="redes" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="#"><i class="far fa-file"></i>&nbsp;Mi pagina web oficial</a>
        <a class="collapse-item" href="#"><i class="fab fa-facebook"></i><span>&nbsp;Facebook Oficial</span></a>
        </div>
    </div>
    </li>

    <!-- Divisor -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- BOTON QUE OCULTA EL MENÚ-->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- FIN DEL MENÚ LATERAL -->