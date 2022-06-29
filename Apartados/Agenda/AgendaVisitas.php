<?php
include('../../Conexion/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sección Ficha Proveedor</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../recursos/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../recursos/dist/css/adminlte.min.css">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!--DataTables-->
    <link rel="stylesheet" href="../../recursos/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="../../recursos/plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
    <!-- Full Calendar -->
    <link rel='stylesheet' href='fullcalendar.min.css'>
    <!-- ClockPicker -->
    <link rel="stylesheet" href="bootstrap-clockpicker.css">

    <!-- Estilo Adicional -->
    <style>
        .fc th{
            padding: 10px 0px;
            vertical-align: middle;
            background: #f2f2f2;
        }
        .fc table{
            padding-top: 10px;
            border: 5px;
            border-color: black;
        }
    </style>
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <!-- Navbar -->
    <div id="navBar">
      <?php include '../1.ContenidoEstatico/NavBar.php' ?>
    </div>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <div id="sliceBar">
      <?php include '../1.ContenidoEstatico/Slicebar.php'  ?>
    </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Sección Agenda de Visitas</h1>
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="botones" style="margin-bottom:1%">
                <!-- Crear modal a todos los botones -->

            </div>

            <!-- Modal (Agregar, Editar o Borrar) -->
                <div class="modal fade" id="ModalEventos" name="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="tituloEvento" name="tituloEvento"></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="txtID" name="txtID" />
                        <input type="hidden" id="txtFecha" name="txtFecha" />

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label>Título:</label>
                                <input type="text" id="txtTitulo" name="txtTitulo" class="form-control" placeholder="Título del Evento" />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Hora del Evento:</label>

                                <div class="input-group" class="clockpicker" data-autoclose="true">
                                        <input type="text" id="txtHora" name="txtHora" value="10:30" class="form-control" />
                                    </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Descripción Del Evento:</label>
                            <textarea id="txtDescripcion" name="txtDescripcion" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Color: </label>
                            <input type="color" value="#ff0000" id="txtColor" name="txtColor" class="form-control" style="height: 36px;"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnAgregar" name="btnAgregar" class="btn btn-success">Agregar</button>
                        <button type="button" id="btnModificar" name="btnModificar" class="btn btn-success">Modificar</button>
                        <button type="button" id="btnEliminar" name="btnEliminar" class="btn btn-danger">Borrar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        
                    </div>
                    </div>
                </div>
                </div>
            
                <div class="container">
                    <div class="row">
                      <div class="col"></div>
                      <div class="col-lg-11"><div id="CalendarioWeb" name="CalendarioWeb"></div></div>
                      <div class="col"></div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Propiedad de Mline 2021
                <a href="https://mlineseg.wixsite.com/website">Mline</a>.</strong>
            Todos los derechos reservados
            <div class="float-right d-none d-sm-inline-block">
                <b>Versión</b> 1.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <script src="../../recursos/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../recursos/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- AdminLTE -->
    <script src="../../recursos/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="../../recursos/plugins/chart.js/Chart.min.js"></script>
    <script src="../../recursos/js/jquery-latest.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="moment.min.js"></script>
    <script src="Show.js"></script>
    <script src="fullcalendar.min.js"></script>
    <script src="es.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-clockpicker.js"></script>
    <!-- DataTables  & Plugins -->

    <script src="../../recursos/plugins/jszip/jszip.min.js"></script>
    <script src="../../recursos/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../recursos/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../recursos/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../recursos/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../recursos/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../recursos/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

</body>

</html>