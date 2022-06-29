<?php
include('../../Conexion/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Software Gestión</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../recursos/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../recursos/dist/css/adminlte.min.css">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!--DataTables-->
    <link rel="stylesheet" href="../../recursos/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../recursos/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
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





                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">

                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="../../recursos/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
                <span class="brand-text font-weight-light">SegProject</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- foto de usuario -->
                        <img src="../../recursos/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">UserName</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="../MenuAdministrador/administrador.php" class="nav-link">
                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> ícono descriptivo -->
                                <p>
                                    Administrador
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../MenuAdministrador/administrador.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Inicio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <!-- <i class="nav-icon fas fa-circle"></i> -->
                                        <p> &nbsp;&nbsp;
                                            Empleados
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">

                                        <li class="nav-item">
                                            <a href="../Empleado/Cuadrilla.php" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                                <p>Cuadrilla</p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="../Empleado/Cargo.php" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                                <p>Cargos</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../Empleado/Especialidad.php" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                                <p>Especialidad</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../Empleado/ConfiguracionEmpleado.php" class="nav-link ">
                                                <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                                <p>Empleados</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../Servicios/servicio.php" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                                <p>Servicios</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="right fas fa-angle-left"></i>
                                        <p> &nbsp;&nbsp;
                                            Unidades/Monedas
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="../Empleado/UnidadDeMedida.php" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                                <p>Unidad de medida</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../Empleado/TipoMoneda.php" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                                <p>Monedas</p>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <!-- <i class="nav-icon fas fa-chart-pie"></i> -->
                                <p>
                                    Adquisiciones
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../Adquisiciones/FichaProveedor.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Ficha Proveedor</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Adquisiciones/RequerimientoBodega.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Requerimiento Bodega</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Adquisiciones/RequerimientoCompra.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Requerimiento Compra</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Adquisiciones/OrdenCompra.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Orden de Compra</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Adquisiciones/Compras.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Compras</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Reportes Específico</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Cuadro Mando</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <!-- <i class="nav-icon fas fa-tree"></i> -->
                                <p>
                                    Bodega
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../Bodega/Bodega.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Ficha Bodega</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Devolución Bodega</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Solicitud de Bodega</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Otras Salidas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Otros ingresos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Reportes Inventario</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Reportes Kardex</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <!-- <i class="nav-icon fas fa-table"></i> -->
                                <p>
                                    Supervisor
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../Agenda/AgendaVisitas.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Agenda de Visitas
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Agenda/Programacion.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Programación</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="right fas fa-angle-left"></i>
                                        <p> &nbsp;&nbsp;
                                            Servicio de Mantención
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="../ServicioMantencion/OSM.php" class="nav-link active">
                                                <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                                <p>OSM
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../Supervisor/SolicitudMateriales.php" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                                <p>Solicitud de Materiales
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                                <p>Presupuesto
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../Ventas/CotizacionAfecta.php" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                                <p>Cotización
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                                <p>Cuadros de Mando
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                                <p>Correos Inf. y Alertas
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <!-- <i class="nav-icon fas fa-table"></i> -->
                                <p>
                                Cliente
                                <i class="fas fa-angle-left right "></i>
                                </p>
                            </a>             
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <!-- <i class="nav-icon fas fa-circle"></i> -->
                                    <p> &nbsp;&nbsp;
                                    Administrador
                                    <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                    <a href="../Cliente/FichaCliente.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                        <p>Ficha Cliente</p>
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="../Cliente/FichaEncargados.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                        <p>Ficha Encargados(as)</p>
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="../Cliente/FichaInstalaciones.php" class="nav-link ">
                                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                        <p>Ficha Instalaciones</p>
                                    </a>
                                    </li>
                                </ul>
                                </li>
                                <li class="nav-item">
                                <a href="../Cliente/Necesidades.php" class="nav-link ">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Necesidades
                                    </p>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="../Cliente/CotizacionCliente.php" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Cotización de Cliente
                                    </p>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Reportes especificos
                                    </p>
                                </a>
                                </li>
                                <!-- <li class="nav-header">Servicio Tecnico</li> -->
                                <li class="nav-item">
                                <a href="../Cliente/contrato.php" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Ficha Contrato
                                    </p>
                                </a>
                                </li>




                                    </ul>
                        </li>


                        </li>

                    </ul>
                    </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Información de Necesidades</h1>
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
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <a href="GenerarPpto.php"><button type="button" class="btn btn-success">Crear Presupuesto</button></a>
                                </div>

                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Folio</th>
                                                <th>Cliente</th>
                                                <th>Fecha de Emisión</th>
                                                <th>Nro OSM</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <button type="button" class="btn btn-info">Ver Detalle</button>
                                                    <button type="button" class="btn btn-danger">Eliminar Presupuesto</button>
                                                    <button type="button" class="btn btn-info">Enviar Cotización</button>

                                                </td>


                                            </tr>
                                            <?php

                                            ?>
                                        </tbody>
                                    </table>
                                </div>



                            </div>
                        </div>
                    </div>





                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
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

    <!-- DataTables  & Plugins -->

    <script src="../../recursos/plugins/jszip/jszip.min.js"></script>
    <script src="../../recursos/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../recursos/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../recursos/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../recursos/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../recursos/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../recursos/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>