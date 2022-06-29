<?php

use function PHPSTORM_META\type;

include('../../Conexion/conexion.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sección Contrato</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <link rel="stylesheet" href="bs-stepper.min.css">
    <!-- Styles por pasos -->
    <link rel="stylesheet" href="https://unpkg.com/bs-stepper/dist/css/bs-stepper.min.css">
    <script src="https://unpkg.com/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../recursos/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../recursos/dist/css/adminlte.min.css">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!--DataTables-->
    <link rel="stylesheet" href="../../recursos/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../recursos/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../Apartados/Cliente/css/style.css">
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
            <a href="https://www.segproject.cl" class="brand-link">
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
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inicio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <!-- <i class="nav-icon fas fa-circle"></i> -->
                                        <p>
                                            Empleados
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">

                                        <li class="nav-item">
                                            <a href="../Empleado/Cuadrilla.php" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Cuadrilla</p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="../Empleado/Cargo.php" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Cargos</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../Empleado/Especialidad.php" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Especialidad</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../Empleado/ConfiguracionEmpleado.php" class="nav-link ">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Empleados</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../Servicios/servicio.php" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Servicios</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="right fas fa-angle-left"></i>
                                        <p>
                                            Unidades/Monedas
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="../Empleado/UnidadDeMedida.php" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Unidad de medida</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../Empleado/TipoMoneda.php" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
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
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ficha Proveedor</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Adquisiciones/RequerimientoCompra.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Requerimiento Compra</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Ventas/CotizacionProveedor.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Cotización de Compra</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Orden de Compra</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Adquisiciones/IngresarCompra.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ingresar Compra</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reportes Específico</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
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
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ficha Bodega</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Devolución Bodega</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Solicitud de Bodega</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Otras Salidas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Otros ingresos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reportes Inventario</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reportes Kardex</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
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
                                <a href="#" class="nav-link">
                                    <i class="right fas fa-angle-left"></i>
                                    <p> &nbsp;&nbsp;
                                    Servicio de Mantención
                                    <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                    <a href="../ServicioMantencion/OSM.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                        <p>OSM
                                        </p>
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="../Cliente/presupuesto.php" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                                        <p>Presupuesto
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
                                <a href="#" class="nav-link active">
                                    <!-- <i class="nav-icon fas fa-table"></i> -->
                                    <p>
                                    Cliente
                                    <i class="fas fa-angle-left right "></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                    <a href="../Cliente/FichaCliente.php" class="nav-link ">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Ficha Cliente
                                        </p>
                                    </a>
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
                                    <a href="../Cliente/contrato.php" class="nav-link active">
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
                            <h1 class="ml-3">Apartado: Contrato</h1>
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
                                    <!-- Modal -->
                                    <h3>Creación de Contrato de Servicios</h3>
                                    <div id="stepper1" class="bs-stepper">
                                        <div class="bs-stepper-header" role="tablist">
                                            <div class="step" data-target="#test-l-1">
                                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1">
                                                    <span class="bs-stepper-circle">1</span>
                                                    <span class="bs-stepper-label">Detalles del Contrato</span>
                                                </button>
                                            </div>
                                            <div class="bs-stepper-line"></div>
                                            <div class="step" data-target="#test-l-2">
                                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2">
                                                    <span class="bs-stepper-circle">2</span>
                                                    <span class="bs-stepper-label">Creación del Servicio de Mantención</span>
                                                </button>
                                            </div>
                                            <div class="bs-stepper-line"></div>
                                            <div class="step" data-target="#test-l-3">
                                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger3" aria-controls="test-l-3">
                                                    <span class="bs-stepper-circle">3</span>
                                                    <span class="bs-stepper-label">Detalles de Equipos
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-content">
                                            <form onSubmit="return false" id="formulario" method="POST" action="../../PhP/INSERTAR_contrato.php">
                                                <div id="test-l-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger1">
                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                        Datos de Emisión:</h4>
                                                    <div class="form-row">

                                                        <div class="form-group col-md-3">
                                                            <label for="inputNombreCliente">Folio del Contrato:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text" style="background-color:red">Folio:
                                                                </div>
                                                                <input type="text" class="form-control" name="folio" id="folio">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-4" style="position: absolute; right: 40px;">
                                                        <label for="inputNombreCliente">Fecha del Contrato:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">Emisión:
                                                                </div>
                                                                <input type="date" class="form-control" name="Femision" id="Femision">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #2980B9;">
                                                        Datos del Cliente:</h4>
                                                       

                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreCliente">Cliente:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                <select class="form-control" name="cliente" id="cliente">
                                                                    <?php
                                                                    $sql = ("SELECT * FROM cliente");
                                                                    $query = $conn->query($sql);
                                                                    while ($valores = mysqli_fetch_array($query)) {
                                                                        echo '<option value="' . $valores['Rut'] . '">' . $valores['Nombre'] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                              <label for="inputNombreEmpleado">Dirección:</label>
                                                              <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="address" id="address" placeholder="Edificio el bosque...">
                                                              </div>
                                                        </div>

                                                    </div>


                                                    <div class=" form-row">
                                                        
                                                        <div class="form-group col-md-6">
                                                            <label for="inputCiudad">Comuna:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-building"></i>
                                                                </div>
                                                                <select class="form-control" name="comuna" id="comuna">

                                                                    <?php
                                                                    $sql = ("SELECT * FROM comuna");
                                                                    $query = $conn->query($sql);
                                                                    while ($valores = mysqli_fetch_array($query)) {
                                                                        echo '<option value="' . $valores['id_comuna'] . '">' . $valores['Nombre_comuna'] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail">Correo Electrónico:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-envelope"></i>
                                                                </div>
                                                                <input type="email" class="form-control" name="Email" id="Email" placeholder="contacto@dominio.com">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                              <label for="inputNombreEmpleado">Persona de Contacto:</label>
                                                              <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="address" id="address" placeholder="Nombre y Apellido...">
                                                              </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">Tipo de Contrato:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-newspaper"></i>
                                                                </div>
                                                                <select class="form-control" name="tcontrato" id="tcontrato">
                                                                    <?php
                                                                    $sql = ("SELECT * FROM tipocontrato");
                                                                    $query = $conn->query($sql);
                                                                    while ($valores = mysqli_fetch_array($query)) {
                                                                        echo '<option value="' . $valores['id_tipoContrato'] . '">' . $valores['Tipo'] . '</option>';
                                                                    }
                                                                    ?>

                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <br>
                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #2980B9;">
                                                        Datos de la Instalación(es):</h4>

                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                                <label for="inputNombreEmpleado">Nombre de Instalación:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fab fa-fort-awesome"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="NomIns" name="NomIns[]" value="" placeholder="Nombre de la Instalación...">
                                                                </div>

                                                        </div>
                                                        
                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">Tipo de Instalación:</label> 
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fab fa-fort-awesome"></i>
                                                                </div>
                                                                <select class="form-control" id="TipIns" name="TipIns[]">
                                                                    <option value="0">Selecione un Tipo de Instalación</option>
                                                                        <?php
                                                                        $sql = ("SELECT * FROM tipoinstalacion");
                                                                        $query = $conn->query($sql);
                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            echo '<option value="' . $valores['id_tipoIns'] . '">' . $valores['Tipo'] . '</option>';
                                                                            //por defecto se creará como libre
                                                                        }
                                                                        ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-row">
                                                        
                                                        <div class="form-group col-md-6">
                                                              <label for="inputNombreEmpleado">Dirección de la Instalación:</label>
                                                              <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="AddressIns[]" id="AddressIns" value="" placeholder="Edificio el bosque...">
                                                              </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail">Correo Electrónico del Encargado(a) de la Instalación:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-envelope"></i>
                                                                </div>
                                                                <input type="email" class="form-control" name="EmailIns[]" id="EmailIns" value="" placeholder="contacto@dominio.com">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-row">
                                                        
                                                        <div class="form-group col-md-6">
                                                              <label for="inputNombreEmpleado">Encargado(a) de la Instalación:</label>
                                                              <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                <input type="text" class="form-control" id="ContactIns" name="ContactIns[]" value="" placeholder="Nombre y Apellido...">
                                                              </div>
                                                            </div>

                                                            <div class="input-group-btn">
                                                                <button type="button" class="btn btn-success btn-xs" onclick="add_installations_fields();" style="position: absolute; right: 25px; margin-top: 30px;"> <i class="fas fa-plus"></i> </button>
                                                            </div>

                                                    </div>
                                                    <div class="clear"></div>

                                                    <div id="installations_fields"></div>

                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" style="margin-right: 46%;" onclick="stepper1.next()">Siguiente</button>
                                                    </div>

                                                </div>
                                                <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">

                                                <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                        Instalación(es) a Requerir Servicio de Mantención</h4>
                                                <br>

                                                <div class="form-group col-md-12">
                                                    <h5 for="inputNombreEmpleado" style="font-size:20px;font-weight:bold; margin:auto; margin-bottom:4px; border-bottom-style: solid; border-bottom-color: #117A65;">
                                                    Instalación(es):</h5>
                                                       <div class="checkbox-card">
                                                       <div class="form-group col-md-12">
                                                             <div class="checkbox">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <input type="checkbox" class="checkme" value="1">
                                                                    </div>
                                                                    <input disabled type="text" class="form-control" value="Nombre de la Instalación" style="width: 50%">
                                                                </div>
                                                             </div>
                                                             <div class="recursos-box">
                                                                 
                                                             <br>
                                                            <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                                 Creación de Servicio de Mantención:</h4>

                                                                <div class="card">
                                                                 <div class="table-responsive">
                                                                     <table class="table table-bordered table-hover" >
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="width: 12%;">Area</th>
                                                                                <th style="width: 12%;">Cant. de Técnicos</th>
                                                                                <th style="width: 18%;">Tipo de Servicio</th>
                                                                                <th style="width: 18%;">Lista de Servicio</th>
                                                                                <th style="width: 18%;">Fecha de Inicio Serv. Mant.</th>
                                                                                <th style="width: 18%;">Tipo de Periodo Serv. Mant.</th>
                                                                                <th style="width: 3%;"></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                             <tr> 
                                                                                 <td style="padding: 5px;" >
                                                                                      <select class="form-control" id="AreaCont" name="AreaCont[]">
                                                                                          <option value="0">Selecione un Area</option>
                                                                                          <?php
                                                                                          $sql = ("SELECT * FROM tipoarea");
                                                                                          $query = $conn->query($sql);
                                                                                          while ($valores = mysqli_fetch_array($query)) {
                                                                                              echo '<option value="' . $valores['id_area'] . '">' . $valores['NombreArea'] . '</option>';
                                                                                              //por defecto se creará como libre
                                                                                          }
                                                                                          ?>
                                                                                      </select>    
                                                                                 </td>
                                                                                 <td style="padding: 5px;" >
                                                                                     <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                                 </td>
                                                                                 <td style="padding: 5px;" >
                                                                                    <button type="button" class="btn btn-info btn-xs" onclick="add_installations_fields2();" style="position: absolute; margin: auto;"><i class="fa fa-arrow-down"></i></button>
                                                                                     <select id="listaservicio" class="form-control" id="listservicio" name="listservicio[]" style="width: 80%; margin-left: 20%;">
                                                                                         <option value="0">Selecione un Servicio</option>
                                                                                             <?php
                                                                                             $sql = ("SELECT * FROM listaservicio");
                                                                                             $query = $conn->query($sql);
                                                                                             while ($valores = mysqli_fetch_array($query)) {
                                                                                                 echo '<option value="' . $valores['ID_lista'] . '">' . $valores['Nombre'] . '</option>';
                                                                                                 //por defecto se creará como libre
                                                                                             }
                                                                                             ?>
                                                                                     </select>
                                                                                     <div class="clear2"></div>
                                                                                     <div id="installations_fields2"></div>
                                                                                 </td>
                                                                                 <td style="padding: 5px;" >
                                                                                    <button type="button" class="btn btn-info btn-xs" onclick="add_installations_fields3();" style="position: absolute; margin: auto;"><i class="fa fa-arrow-down"></i></button>
                                                                                     <select id="listaservicioV" class="form-control" id="listservicioV" name="listservicioV[]" style="width: 80%; margin-left: 20%;">
                                                                                        <option value="0">Seleccione un Servicio</option>
                                                                                     </select>
                                                                                     <div class="clear3"></div>
                                                                                     <div id="installations_fields3"></div>
                                                                                 </td>
                                                                                 <td style="padding: 5px;" >
                                                                                    <button type="button" class="btn btn-info btn-xs" onclick="add_installations_fields4();" style="position: absolute; margin: auto;"><i class="fa fa-arrow-down"></i></button>
                                                                                     <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="" style="width: 80%; margin-left: 20%;">
                                                                                     <div class="clear4"></div>
                                                                                     <div id="installations_fields4"></div>
                                                                                 </td>                           
                                                                                 <td style="padding: 5px;" >
                                                                                   <button type="button" class="btn btn-info btn-xs" onclick="add_installations_fields5();" style="position: absolute; margin: auto;"><i class="fa fa-arrow-down"></i></button>
                                                                                    <select class="form-control" id="TipPer" name="TipPer[]" style="width: 80%; margin-left: 20%;">
                                                                                        <option value="0">Seleccione un Tipo de Periodo</option>
                                                                                        <option value="1">Diario</option>
                                                                                        <option value="2">Semanal</option>
                                                                                        <option value="3">Mensual</option>
                                                                                        <option value="4">Bimestre</option>
                                                                                        <option value="5">Trimestre</option>
                                                                                        <option value="6">Cuatrimestre</option>
                                                                                        <option value="7">Semestre</option>
                                                                                        <option value="8">Anual</option>
                                                                                    </select>
                                                                                    <div class="clear5"></div>
                                                                                     <div id="installations_fields5"></div>
                                                                                 </td>
                                                                                 <td>  
                                                                                 </td>
                                                                         </tbody>
                                                                     </table>
                                                                         <div style="text-align: right;">
                                                                             <button type="button" name="" id="" class="btn btn-success btn-xs" style="margin-left: 95%"><i class="fas fa-plus"></i></button>
                                                                         </div>
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        
                                                     </div>


                                                    <!-- h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                        Creación de Servicio de Mantención</h4>

                                                        <div class="card">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover" id="crud_table">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 13%;">Area</th>
                                                                        <th style="width: 13%;">Cant. de Empleados</th>
                                                                        <th style="width: 13%;">Lista de Servicio</th>
                                                                        <th style="width: 13%;">Fecha de Inicio Serv. Mant.</th>
                                                                        <th style="width: 13%;">Tipo de Periodo Serv. Mant.</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                    <div class="checkbox">
                                                                        <td style="padding: 4px;" >
                                                                            <div class="input-group-text" style="padding: 3px;">
                                                                                <input type="checkbox" style="height: 20px; width: 20px;" value="1" class="checkme">
                                                                                <label for="inputNombreEmpleado" style="margin-left: 5px; margin-top: 2px;">Hall Acceso</label>
                                                                            </div>
                                                                        </td>
                                                                    </div>
                                                                <div class="checkbox-card">
                                                                    <div class="recursos-box">
                                                                        <td style="padding: 5px;" >
                                                                            <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                             <select class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                                <option value="0">Seleccione un Servicio</option>
                                                                             </select>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                                        </td>                           
                                                                        <td style="padding: 5px;" >
                                                                            <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 4px;" >
                                                                            <div class="input-group-text" style="padding: 3px;">
                                                                                <input type="checkbox" style="height: 20px; width: 20px;" value="2" class="checkme2">
                                                                                <label for="inputNombreEmpleado" style="margin-left: 5px; margin-top: 2px;">Bodega 1 Común</label>
                                                                            </div>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                             <select class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                                <option value="0">Seleccione un Servicio</option>
                                                                             </select>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                                        </td>                           
                                                                        <td style="padding: 5px;" >
                                                                            <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                                        </td>
                                                                    </div>
                                                                </div>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 4px;" >
                                                                            <div class="input-group-text" style="padding: 3px;">
                                                                                <input type="checkbox" style="height: 20px; width: 20px;" value="3" class="checkme3"> 
                                                                                <label for="inputNombreEmpleado" style="margin-left: 5px; margin-top: 2px;">Bodega 2 Común</label>
                                                                            </div>
                                                                         </td>
                                                                         <td style="padding: 5px;" >
                                                                            <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                             <select class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                                <option value="0">Seleccione un Servicio</option>
                                                                             </select>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                                        </td>                           
                                                                        <td style="padding: 5px;" >
                                                                            <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 4px;" >
                                                                            <div class="input-group-text" style="padding: 3px;">
                                                                                <input type="checkbox" style="height: 20px; width: 20px;" value="4" class="checkme4"> 
                                                                                <label for="inputNombreEmpleado" style="margin-left: 5px; margin-top: 2px;">Bodega 3 Común</label>
                                                                            </div>
                                                                         </td>
                                                                         <td style="padding: 5px;" >
                                                                            <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                             <select class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                                <option value="0">Seleccione un Servicio</option>
                                                                             </select>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                                        </td>                           
                                                                        <td style="padding: 5px;" >
                                                                            <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 4px;" >
                                                                            <div class="input-group-text" style="padding: 3px;">
                                                                                <input type="checkbox" style="height: 20px; width: 20px;" value="#" class="checkme5"> 
                                                                                <label for="inputNombreEmpleado" style="margin-left: 5px; margin-top: 2px;">Piso</label>
                                                                            </div>
                                                                         </td>
                                                                         <td style="padding: 5px;" >
                                                                            <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                             <select class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                                <option value="0">Seleccione un Servicio</option>
                                                                             </select>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                                        </td>                           
                                                                        <td style="padding: 5px;" >
                                                                            <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 4px;" >
                                                                            <div class="input-group-text" style="padding: 3px;">
                                                                                <input type="checkbox" style="height: 20px; width: 20px;" value="9" class="checkme6"> 
                                                                                <label for="inputNombreEmpleado" style="margin-left: 5px; margin-top: 2px;">Estacionamiento</label>
                                                                            </div>
                                                                         </td>
                                                                         <td style="padding: 5px;" >
                                                                            <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                             <select class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                                <option value="0">Seleccione un Servicio</option>
                                                                             </select>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                                        </td>                           
                                                                        <td style="padding: 5px;" >
                                                                            <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 4px;" >
                                                                            <div class="input-group-text" style="padding: 3px;">
                                                                                <input type="checkbox" style="height: 20px; width: 20px;" value="10" class="checkme7">
                                                                                <label for="inputNombreEmpleado" style="margin-left: 5px; margin-top: 2px;">Sala</label>
                                                                            </div>
                                                                         </td>
                                                                         <td style="padding: 5px;" >
                                                                            <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                             <select class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                                <option value="0">Seleccione un Servicio</option>
                                                                             </select>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                                        </td>                           
                                                                        <td style="padding: 5px;" >
                                                                            <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 4px;" >
                                                                            <div class="input-group-text" style="padding: 3px;">
                                                                                <input type="checkbox" style="height: 20px; width: 20px;" value="11" class="checkme8">
                                                                                <label for="inputNombreEmpleado" style="margin-left: 5px; margin-top: 2px;">Gimnasio</label>
                                                                            </div>
                                                                         </td>
                                                                         <td style="padding: 5px;" >
                                                                            <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                             <select class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                                <option value="0">Seleccione un Servicio</option>
                                                                             </select>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                                        </td>                           
                                                                        <td style="padding: 5px;" >
                                                                            <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 4px;" >
                                                                            <div class="input-group-text" style="padding: 3px;">
                                                                                <input type="checkbox" style="height: 20px; width: 20px;" value="12" class="checkme9">
                                                                                <label for="inputNombreEmpleado" style="margin-left: 5px; margin-top: 2px;">Cafetería - Casino</label>
                                                                            </div>
                                                                         </td>
                                                                         <td style="padding: 5px;" >
                                                                            <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                             <select class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                                <option value="0">Seleccione un Servicio</option>
                                                                             </select>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                                        </td>                           
                                                                        <td style="padding: 5px;" >
                                                                            <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 4px;" >
                                                                            <div class="input-group-text" style="padding: 3px;">
                                                                                <input type="checkbox" style="height: 20px; width: 20px;" value="13" class="checkme10">
                                                                                <label for="inputNombreEmpleado" style="margin-left: 5px; margin-top: 2px;">Quincho</label>
                                                                            </div>
                                                                         </td>
                                                                         <td style="padding: 5px;" >
                                                                            <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                             <select class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                                <option value="0">Seleccione un Servicio</option>
                                                                             </select>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                                        </td>                           
                                                                        <td style="padding: 5px;" >
                                                                            <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 4px;" >
                                                                            <div class="input-group-text" style="padding: 3px;">
                                                                                <input type="checkbox" style="height: 20px; width: 20px;" value="14" class="checkme11">
                                                                                <label for="inputNombreEmpleado" style="margin-left: 5px; margin-top: 2px;">Terraza</label>
                                                                            </div>
                                                                         </td>
                                                                         <td style="padding: 5px;" >
                                                                            <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                             <select class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                                <option value="0">Seleccione un Servicio</option>
                                                                             </select>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                                        </td>                           
                                                                        <td style="padding: 5px;" >
                                                                            <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 4px;" >
                                                                            <div class="input-group-text" style="padding: 3px;">
                                                                                <input type="checkbox" style="height: 20px; width: 20px;" value="15" class="checkme12">
                                                                                <label for="inputNombreEmpleado" style="margin-left: 5px; margin-top: 2px;">Oficina</label>
                                                                            </div>
                                                                         </td>
                                                                         <td style="padding: 5px;" >
                                                                            <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                             <select class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                                <option value="0">Seleccione un Servicio</option>
                                                                             </select>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                                        </td>                           
                                                                        <td style="padding: 5px;" >
                                                                            <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 4px;" >
                                                                            <div class="input-group-text" style="padding: 3px;">
                                                                                <input type="checkbox" style="height: 20px; width: 20px;" value="16" class="checkme13">
                                                                                <label for="inputNombreEmpleado" style="margin-left: 5px; margin-top: 2px;">Departamento</label>
                                                                            </div>
                                                                         </td>
                                                                         <td style="padding: 5px;" >
                                                                            <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                             <select class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                                <option value="0">Seleccione un Servicio</option>
                                                                             </select>
                                                                        </td>
                                                                        <td style="padding: 5px;" >
                                                                            <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                                        </td>                           
                                                                        <td style="padding: 5px;" >
                                                                            <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                                <div style="text-align: right;">
                                                                    <button type="button" name="Add" id="Add" class="btn btn-success btn-xs" style="margin-left: 95%"><i class="fas fa-plus"></i></button>
                                                                </div>
                                                        </div>
                                                     </div >

                                                    <div class="form-row">
                                                    
                                                     <div class="form-group col-md-3">
                                                            <label for="inputNombreEmpleado">Area del Contrato:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-chart-area"></i>
                                                                </div>
                                                                <select class="form-control" id="AreaCont" name="AreaCont[]">
                                                                    <option value="0">Selecione un Area</option>
                                                                        <?php
                                                                        $sql = ("SELECT * FROM tipoarea");
                                                                        $query = $conn->query($sql);
                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            echo '<option value="' . $valores['id_area'] . '">' . $valores['NombreArea'] . '</option>';
                                                                            //por defecto se creará como libre
                                                                        }
                                                                        ?>
                                                                </select>
                                                            </div>

                                                     </div>
                                                     <div class="form-group col-md-3">
                                                            <label for="inputNombreEmpleado">Cantidad de Empleados:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-people-carry"></i>
                                                                </div>
                                                                <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3...">
                                                            </div>

                                                     </div>
                                                     <div class="form-group col-md-3">
                                                            <label for="inputNombreEmpleado">Tipo de Servicio:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-concierge-bell"></i>
                                                                </div>
                                                                <select id="listaservicio" class="form-control" id="listservicio" name="listservicio[]">
                                                                    <option value="0">Selecione un Servicio</option>
                                                                        <?php
                                                                        $sql = ("SELECT * FROM listaservicio");
                                                                        $query = $conn->query($sql);
                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            echo '<option value="' . $valores['ID_lista'] . '">' . $valores['Nombre'] . '</option>';
                                                                            //por defecto se creará como libre
                                                                        }
                                                                        ?>
                                                                </select>
                                                            </div>

                                                     </div>
                                                     <div class="form-group col-md-3">
                                                            <label for="inputNombreEmpleado">Lista de Servicios:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-concierge-bell"></i>
                                                                </div>
                                                                <select id="listaservicioV" class="form-control" id="listservicioV" name="listservicioV[]" >
                                                                    <option value="0">Seleccione un Servicio</option>
                                                                </select>
                                                            </div>

                                                     </div>
                                                     <div class="form-group col-md-3">
                                                            <label for="inputNombreEmpleado">Tipo de Periodo:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-business-time"></i>
                                                                </div>
                                                                <input type="text" class="form-control" id="TipPer" name="TipPer[]" value="" placeholder="Trimestral, Mensual...">
                                                            </div>

                                                     </div>
                                                     <div class="form-group col-md-3">
                                                            <label for="inputNombreEmpleado">Rango del Periodo:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-business-time"></i>
                                                                </div>
                                                                <input type="text" class="form-control" id="RangoPer" name="RangoPer[]" value="" placeholder="Por mes, Por año...">
                                                            </div>

                                                     </div>
                                                     <div class="form-group col-md-4">
                                                            <label for="inputNombreEmpleado">Fecha Inicial:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-stopwatch"></i>
                                                                </div>
                                                                <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="">
                                                            </div>

                                                     </div>
                                                     <div class="form-group col-md-8">
                                                            <label for="inputNombreEmpleado">Observaciones:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-comment"></i>
                                                                </div>
                                                                <input type="text" class="form-control" id="Observa" name="Observa[]" value="" placeholder="Alguna otra cosa por aclarar...">
                                                                <div class="input-group-btn">
                                                                <button type="button" class="btn btn-success btn-xs" onclick="add_installations_fields();" style="margin-left: 10px;"> <i class="fas fa-plus"></i> </button>
                                                                </div>
                                                            </div>
                                                      </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div id="installations_fields"></div -->
                                                        <br />
                                                        <br />

                                                    <button class="btn btn-primary" style="margin-left: 40%;" onclick="stepper1.previous()">Anterior</button>
                                                    <button class="btn btn-primary" onclick="stepper1.next()">Siguiente</button>
                                                </div>

                                                <div id="test-l-3" role="tabpanel" class="bs-stepper-pane text-center" aria-labelledby="stepper1trigger3">

                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                        Dellate de Equipos Encontrados Según el Contrato de Mantención</h4>

                                                    <br>
                                                    <div class="card">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover" id="crud_table">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 13%;">Nombre</th>
                                                                        <th style="width: 13%;">Código</th>
                                                                        <th style="width: 13%;">Descripcion</th>
                                                                        <th style="width: 13%;">Categoria</th>
                                                                        <th style="width: 13%;">Area</th>
                                                                        <th style="width: 13%;">Cantidad Req.</th>

                                                                        <th style="width: 5%;">Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="padding: 5px;" ><input type="text" class="form-control" name="eq_nombre[]" value="" placeholder="Nombre del Producto..."></td>
                                                                        <td style="padding: 5px;" ><input type="text" class="form-control" name="eq_codigo[]" value="" placeholder="B-1234, DA531-C..."></td>
                                                                        <td style="padding: 5px;" ><input type="text" class="form-control" name="eq_descripcion[]" value="" placeholder="Alguna descripción..."></td>
                                                                        <td style="padding: 5px;" ><select class="form-control" name="eq_categoria[]">
                                                                                                    <option value="0">Selecione un Servicio</option>
                                                                                                    <option value="8">Electrónica</option>
                                                                                                    <option value="9">Pipping</option>                                                                                            
                                                                            </td>                           
                                                                        <td style="padding: 5px;" ><input type="text" class="form-control" name="eq_area[]" value="" placeholder="Hall Acceso/Departamento..."></td>
                                                                        <td style="padding: 5px;" ><input type="number" class="form-control" name="eq_cantidadreq[]" value="" placeholder="1,2,3..."></td>
                                                                        
                                                                        <td style="padding: 5px;"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                                <div style="text-align: right;">
                                                                    <button type="button" name="Add" id="Add" class="btn btn-success btn-xs" style="margin-left: 95%"><i class="fas fa-plus"></i></button>
                                                                </div>
                                                        </div>
                                                     </div>
                                                    <button class="btn btn-primary mt-5" onclick="stepper1.previous()">Anterior</button>
                                                    <button type="submit" id="enviar" class="btn btn-primary mt-5">Registrar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <!-- /.card-header -->
                <br>
                <!-- .card-body -->

                <!-- /.card-body -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../Cliente/js/ShowInput.js"></script>
    <script src="bs-stepper.min.js"></script>
    <!-- DataTables  & Plugins -->

    <script src="../../recursos/plugins/jszip/jszip.min.js"></script>
    <script src="../../recursos/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../recursos/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../recursos/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../recursos/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../recursos/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../recursos/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
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
    <script>
        $(document).ready(function() {
            $(' .$editbtn').on('click', function() {

                $('#crud').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                $('#NombreCliente').val(data[0]);
            });
        });
    </script>
    <script>
        var stepper1Node = document.querySelector('#stepper1')
        var stepper1 = new Stepper(document.querySelector('#stepper1'))

        stepper1Node.addEventListener('show.bs-stepper', function(event) {
            console.warn('show.bs-stepper', event)
        })
        stepper1Node.addEventListener('shown.bs-stepper', function(event) {
            console.warn('shown.bs-stepper', event)
        })
        $("#enviar").click(function(e) {
            document.getElementById("formulario").submit();
        })
    </script>
</body>

</html>