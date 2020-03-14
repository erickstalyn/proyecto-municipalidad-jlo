<div class="sidebar">
  <nav class="sidebar-nav">
      <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active text-center" href="#">Mesa de partes</a>
        </li>
        <li @click="menu=1" class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-book-open"></i> Registrar trámite</a>
        </li>
        <li class="nav-title">
            Bandejas
        </li>
        <li @click="menu=2" class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-book-open"></i> Entrada</a>
        </li>
        <li @click="menu=3" class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-book-open"></i> Recepcionados</a>
        </li>
        <li @click="menu=3" class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-book-open"></i> Salida</a>
        </li>
        <li class="nav-title">
            Bandejas
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="icon-book-open"></i> Pagina web</a>
        </li>
        {{-- <li @click='menu=12' class="nav-item">
            <a class="nav-link" href="#"><i class="icon-info"></i> Facebook<span class="badge badge-info">IT</span></a>
        </li> --}}

        {{-- <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#"><i class="fas fa-chair"></i> Consultas</a>
              <ul class="nav-dropdown-items">
                  <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-user-secret"></i> Por DNI</a>
                  </li>
                  <li  class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-user-secret"></i> Por RUC</a>
                  </li>
              </ul>
          </li> --}}
      </ul>
  </nav>
  {{-- <button class="sidebar-minimizer brand-minimizer" type="button"></button> --}}
</div>