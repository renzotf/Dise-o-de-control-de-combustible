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
                
              </div>
            </div>
           
         
            <!-- table row starts here -->
            <div class="row">
              <div class="col-xl-12 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body pb-0">
                    <h4 class="card-title mb-0">Control de SOAT Y Mantenimiento</h4>
                  </div>

                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table custom-table text-dark">
                  
                        <tbody>
                          <tr>
        
                          <td>
                            <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                            <i class="mdi mdi-clipboard-outline "></i><br>Copy</button>
                            <button type="button" class="btn btn-success mt-2 mt-sm-0 btn-icon-text">
                            <i class="mdi mdi-file-excel-box"></i><br>Excel</button>
                            <button type="button" class="btn btn-secondary mt-2 mt-sm-0 btn-icon-text">
                            <i class="mdi mdi-file-xml"></i><br>CVS</button>
                            <button type="button" class="btn btn-danger mt-2 mt-sm-0 btn-icon-text">
                            <i class="mdi mdi-file-pdf"></i><br>PDF</button>
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
                            <td>Codigo</td>
                            <td>Vto.SOAT</td>
                            <td>Días*VencerSOAT</td>
                            <td>Mensaje</td>
                            <td>Sem</td>
                            <td>Vto.RevisiónT</td>
                            <td>Días*VencerRT</td>
                            <td>Mensaje</td>
                            <td>Sem</td>
                            <td>Responsable</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          <td>GAM-FRO</td>	
                          <td>2021-05-01</td>	
                          <td>-417</td>
                          <td>SOAT Vencido, renovar de manera urgente!!!</td>
                          <td><label class="badge badge-warning">Alerta!!</label></td>
                          <td>2021-05-31</td>	
                          <td>-387</td>
                          <td>Revisión técnica Vencida!!!</td>
                          <td><label class="badge badge-warning">Alerta!!</label></td>
                          <td>LUIS AZAÑER DE LA CRUZ</td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">American Rent a Car 2022</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  <a href="" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>-->

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