<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Plus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
     
    <?php include_once("navbar.php")?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
             
              <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                <div class="d-flex align-items-center">
                  <a href="#">
                    <p class="m-0 pr-3">Dashboard</p>
                  </a>
                  <a class="pl-3 mr-4" href="#">
                    <p class="m-0">ADE-00234</p>
                  </a>
                </div>
                <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                  <i class="mdi mdi-account-plus"></i> Agregar Nuevo Usuario </button>
              </div>
            </div>
           
         
            <!-- table row starts here -->
            <div class="row">
              <div class="col-xl-12 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body pb-0">
                    <h4 class="card-title mb-0">Información de Usuarios</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table custom-table text-dark">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>DNI</th>
                            <th>Nombres</th>
                            <th>Ap. Paterno</th>
                            <th>Ap. Materno</th>
                            <th>Area</th>
                            <th>Rol</th>
                            <th>Usuario</th>
                            <th>Password</th>
                            <th>Imagen</th>
                            <th>Creado</th>
                            <th>Editar/Eliminar</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>70836054</td>
                            <td>Renzo Arturo</td>
                            <td>Torrejón</td>
                            <td>Fernández</td>
                            <td>Sistemas</td>
                            <td>Administrador</td>
                            <td>RATF</td>
                            <td>123</td>
                            <td><img src="../assets/images/faces/face2.jpg" style=" width:40px; height:40px; border-radius:20px;" class="mr-2" alt="image" /></td>
                            <td>03/02/2022 04:55:15</td>
                            <td>
                              <button type="button" class="btn btn-success mt-2 mt-sm-0 btn-icon-text">
                                <i class="mdi mdi-border-color "></i> </button>
                              <button type="button" class="btn btn-danger mt-2 mt-sm-0 btn-icon-text">
                                <i class="mdi mdi-delete"></i>  </button>
                            </td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                   
                  </div>

                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table custom-table text-dark">
                        <thead>
                          <tr>
                            <th>Usuario</th>
                            <th>Sedes</th>
                            <th>Visualizar</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Guardar</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img src="../assets/images/faces/face2.jpg" class="mr-2" alt="image" /> Jacob Jensen </td>
                            <td>
                              <div class="d-flex">
                               
                                <select name="rating" autocomplete="off">
                                  <option value="1">Todas</option>
                                  <option value="2">Arriola</option>
                                  <option value="3">Huachipa</option>
                                  <option value="4">Cerro Lindo</option>
                                  <option value="5">Yauli</option>
                                  <option value="6">Chungar</option>
                                </select>
                              </div>
                            </td>
                           
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" /></label>
                              </div>
                            </td>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" /></label>
                              </div>
                            </td>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" /></label>
                              </div>
                            </td>
                            <td>
                              <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                                <i class="mdi mdi-content-save-all"></i>  </button>
                            </td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>

        

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.stack.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>