<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile border-bottom">
        <a href="#" class="nav-link flex-column">
          <div class="nav-profile-image">
            <img src="../assets/images/faces/face1.jpg" alt="profile" />
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
            <span class="font-weight-semibold mb-1 mt-2 text-center">Renzo Torrejón Fernandez</span>

          </div>
        </a>
      </li>
      <li class="nav-item pt-3">
        <a class="nav-link d-block" href="index.html">
          <img class="sidebar-brand-logo" src="https://american-rentacar.com/wp-content/uploads/2018/01/logo.png" style="width: 200px;height: 70px;"alt="" />
          <img class="sidebar-brand-logomini" src="../assets/images/logo-mini.svg" style="width: 15px;height: 15px;" />
          <div class="small font-weight-light pt-1"></div>
        </a>
      
      </li>
  
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="mdi mdi-compass-outline menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-book-open menu-icon"></i>
          <span class="menu-title">Administración</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="usuario.php">Usuario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="compania.php">Compañia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vehiculo.php">Vehículo</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-engine menu-icon"></i>
          <span class="menu-title">Mantenimiento</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="Especialista.php">Especialistas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Cliente.php">Cliente</a>
            </li>
            
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="conductores.php">
          <i class="mdi mdi-jeepney menu-icon"></i>
          <span class="menu-title">Conductores</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="combustible.php">
          <i class="mdi mdi-glass-mug menu-icon"></i>
          <span class="menu-title">Combustible</span>
        </a>
      </li>
     
     
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi mdi-chart-areaspline menu-icon"></i>
          <span class="menu-title">Reportes</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="R.vehiculos.php">R.Vehículos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Padron.php">Padrón General</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Control.php">Control General</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="mdi mdi-power menu-icon"></i>
          <span class="menu-title">Cerrar Sesión</span>
        </a>
      </li>
    </ul>
    
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
    <div id="theme-settings" class="settings-panel">
      <i class="settings-close mdi mdi-close"></i>
      <p class="settings-heading">SIDEBAR SKINS</p>
      <div class="sidebar-bg-options selected" id="sidebar-default-theme">
        <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
      </div>
      <div class="sidebar-bg-options" id="sidebar-dark-theme">
        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
      </div>
      <p class="settings-heading mt-2">HEADER SKINS</p>
      <div class="color-tiles mx-0 px-4">
        <div class="tiles default primary"></div>
        <div class="tiles success"></div>
        <div class="tiles warning"></div>
        <div class="tiles danger"></div>
        <div class="tiles info"></div>
        <div class="tiles dark"></div>
        <div class="tiles light"></div>
      </div>
    </div>
    <!-- partial -->
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-chevron-double-left"></span>
        </button>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home-circle"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>