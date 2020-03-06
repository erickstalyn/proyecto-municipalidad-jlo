<div class="sidebar">
  <nav class="sidebar-nav">
      <ul class="nav">
          <li class="nav-item">
              <a class="nav-link active" href="#"><i class="fas fa-fw fa-tachometer-alt"></i> Panel de control</a>
          </li>
          <li class="nav-title">
              Mantenimiento
          </li>
          <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#"><i class="fas fa-chair"></i> Consultas</a>
              <ul class="nav-dropdown-items">
                  <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-user-secret"></i> Por DNI</a>
                  </li>
                  <li  class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-user-secret"></i> Por RUC</a>
                  </li>
              </ul>
          </li>
          <li @click="menu=3" class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-book-open"></i> Expedientes</a>
          </li>
          <li @click='menu=11' class="nav-item">
              <a class="nav-link" href="#"><i class="icon-book-open"></i> Pagina web <span class="badge badge-danger">PDF</span></a>
          </li>
          <li @click='menu=12' class="nav-item">
              <a class="nav-link" href="#"><i class="icon-info"></i> Facebook<span class="badge badge-info">IT</span></a>
          </li>
      </ul>
  </nav>
  {{-- <button class="sidebar-minimizer brand-minimizer" type="button"></button> --}}
</div>