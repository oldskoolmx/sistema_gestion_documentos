<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Interrupciones | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="plugins/jquery/jquery.min.js">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- CUstom CSS-->
  <link rel="stylesheet" href="plugins/styles.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed <?php if (!isset($_SESSION["user_id"])) {
                                                          echo "login-page";
                                                        } ?> ">

  <?php if (isset($_SESSION["user_id"])) : ?>

    <div class="wrapper">

      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>

          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search 
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    -->

          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-user"></i> <span class="text-dark"><?php echo Core::$user->username; ?></span>
              <!--
          <span class="badge badge-warning navbar-badge">15</span>
        -->
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">Acciones</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-edit mr-2"></i> Tu Perfil
                <!--
            <span class="float-right text-muted text-sm">3 mins</span>
          -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="./?action=access&opt=logout" class="dropdown-item">
                <i class="fas fa-power-off mr-2"></i> Salir
                <!--
            <span class="float-right text-muted text-sm">3 mins</span>
          -->
              </a>
              <!--       <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
-->
            </div>


          </li>


        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="./" class="brand-link">
          <!--
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    -->
          <span class="brand-text font-weight-light"><b>SisGe</b> Documentos</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->

          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"><?php echo Core::$user->name; ?></a>
            </div>
          </div>


          <!-- SidebarSearch Form -->
          <!--
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
    -->

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="./" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Inicio

                  </p>
                </a>
              </li>


              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>
                    Catalogos
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <li class="nav-item">
                    <a href="./?view=areastur&opt=all" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Areas Turnadas</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="./?view=clasificaciones&opt=all" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Clasificaciones</p>
                    </a>
                  </li>
                  <!-- <li class="nav-item">
                    <a href="./?view=categories&opt=all" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lineas</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="./?view=eventos&opt=all" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Eventos</p>
                    </a>
                  </li> -->




                </ul>
                <!--               </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Interrupciones
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./?view=inter&opt=all&g=g" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Interrupciones</p>
                    </a>
                  </li>

                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./?view=inter&opt=all&g=g1" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Gerencia 1,3,4 y 12</p>
                    </a>
                  </li>

                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./?view=inter&opt=all&g=g2" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Gerencia 2,5,6 y B</p>
                    </a>
                  </li>

                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./?view=inter&opt=all&g=g3" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Gerencia 7,8,9 y A</p>
                    </a>
                  </li>

                </ul>
              </li> -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Reportes
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./?view=report" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Estadisticas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./?view=reportall" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Estadistica General</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./?view=repfechas" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reporte por Fechas</p>
                    </a>
                  </li>

                </ul>

              </li>
              <li class="nav-item">
                <a href="./?view=users&opt=all" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Usuarios

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./?view=documentos&opt=all" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Documentos

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./?view=agenda&opt=all" class="nav-link">
                  <i class="nav-icon fas fa-calendar-alt"></i>

                  <p>
                    Agenda

                  </p>
                </a>
              </li>

              <!--
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
        -->
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php View::load("home"); ?>
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong><a href="http://oldskool.com">OldSkool</a> &copy; 2024 </strong>
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0
        </div>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
  <?php else : ?>
    <div class="login-box">
      <div class="login-logo">
        <!-- 
      Cambiar el nombre de inicio de sesion -->
        <a href="./"><b>SiGes </b>Documentos</a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Iniciar sesion</p>

          <form action="./?action=access&opt=login" method="post">
            <div class="input-group mb-3">
              <input type="text" name="email" required class="form-control" placeholder="Usuario o Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" required class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
  <?php endif; ?>
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <script src="dist/js/function.js"></script>

  <script src="dist/js/clock.js"></script>

  <!-- Page specific script -->


  <script type="text/javascript">
    $(document).ready(function() {
      $(".datatable").DataTable({
        /*columnDefs:[{
          className:"centered",targets:[0,1,2,3,4,5,6,7,8,9]
        }],*/
        responsive: true,
        language: {
          "sProcessing": "Procesando...",
          "sLengthMenu": "Mostrar _MENU_ registros",
          "sZeroRecords": "No se encontraron resultados",
          "sEmptyTable": "Ningún dato disponible en esta tabla",
          "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
          "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
          "sInfoPostFix": "",
          "sSearch": "Buscar:",
          "sUrl": "",
          "sInfoThousands": ",",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
          },
          "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
          }
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $(".datatableR").DataTable({
        columnDefs: [{
          className: "centered",
          targets: [0, 1, 2, 3, 4, 5, 6, 7, 8],
          orderable: false,
          targets: [],
          searchable: false,
          targets: [2, 3, 4, 5, 6, 7, 8]

        }],

        buttons: [
          'copyHtml5',
          'excelHtml5',
          'csvHtml5',
          'pdfHtml5',
          'print'
        ],
        dom: "<'row'<'col-md-12 text-center'B>>" +
          "<'row'<'col-md-6'l><'col-md-6'f>>" +
          "<'row'<'col-md-12'tr>>" +
          "<'row'<'col-md-6'i><'col-md-6'p>>",

        responsive: true,
        language: {
          "sProcessing": "Procesando...",
          "sLengthMenu": "Mostrar _MENU_ registros",
          "sZeroRecords": "No se encontraron resultados",
          "sEmptyTable": "Ningún dato disponible en esta tabla",
          "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
          "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
          "sInfoPostFix": "",
          "sSearch": "Buscar:",
          "sUrl": "",
          "sInfoThousands": ",",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
          },
          "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
          }
        }
      });
      var buttonsContainer = table.buttons().container();
      buttonsContainer.addClass('text-center');

    });
  </script>

</body>

</html>