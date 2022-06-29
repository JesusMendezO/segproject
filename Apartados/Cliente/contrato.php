<?php

use function PHPSTORM_META\type;

include('../../Conexion/conexion.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sección Empleados</title>

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
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
                            <h1 class="m-0">Sección Contrato</h1>
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
                                    <!-- Aquí poner los botones -->
                                    <!-- Button trigger modal -->
                                    <div class="botones" style="margin-bottom:1%; margin-top:1%">
                                       <a href="../Cliente/get_contrato.php"><button type="button" class="btn btn-primary">
                                            Ingresar Contrato
                                        </button></a>


                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="Contrato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#13A31C">
                                                    <h5 class="modal-title" style="color:white" id="exampleModalLabel">Ficha contrato</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-5 p-4 bg-white shadow-sm">

                                                        <h3>Contrato de servicios</h3>
                                                        <div id="stepper1" class="bs-stepper">
                                                            <div class="bs-stepper-header" role="tablist">
                                                                <div class="step" data-target="#test-l-1">
                                                                    <button type="button" class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1">
                                                                        <span class="bs-stepper-circle">1</span>
                                                                        <span class="bs-stepper-label">Detalle del contrato</span>
                                                                    </button>
                                                                </div>
                                                                <div class="bs-stepper-line"></div>
                                                                <div class="step" data-target="#test-l-2">
                                                                    <button type="button" class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2">
                                                                        <span class="bs-stepper-circle">2</span>
                                                                        <span class="bs-stepper-label">Servicios contratados</span>
                                                                    </button>
                                                                </div>
                                                                <div class="bs-stepper-line"></div>
                                                                <div class="step" data-target="#test-l-3">
                                                                    <button type="button" class="step-trigger" role="tab" id="stepper1trigger3" aria-controls="test-l-3">
                                                                        <span class="bs-stepper-circle">3</span>
                                                                        <span class="bs-stepper-label">Detalle equipos
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="bs-stepper-content">
                                                                <form onSubmit="return false" id="formulario" method="POST" action="../../PhP/INSERTAR_contrato.php">
                                                                    <div id="test-l-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger1">
                                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                                            Datos de emisión</h4>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">

                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text" style="background-color:red">Folio:
                                                                                    </div>
                                                                                    <input type="number" class="form-control" name="folio" id="folio">
                                                                                </div>

                                                                            </div>
                                                                            <div class="form-group col-md-6">

                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text">Emisión
                                                                                    </div>
                                                                                    <input type="date" class="form-control" name="Femision" id="Femision">
                                                                                </div>

                                                                            </div>

                                                                        </div>

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
                                                                                <label for="inputEmail">Fecha de inicio</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i>
                                                                                    </div>
                                                                                    <input type="date" class="form-control" name="Finicio" id="Finicio">
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class=" form-row">

                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputNombreEmpleado">Tipo de contrato</label>
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

                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputEmail">Email</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-envelope"></i>
                                                                                    </div>
                                                                                    <input type="email" class="form-control" name="Email" id="Email" placeholder="contacto@dominio.com">
                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #4437ff;">
                                                                            Características del cliente</h4>

                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputNombreEmpleado">Tipo de instalación</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                                    </div>
                                                                                    <select class="form-control" name="tinstalacion" id="tinstalacion">
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

                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputNombreEmpleado">Nombre de instalación</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" name="NameInst" id="NameInst" placeholder="Edificio el bosque...">
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <!-- <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputNombreEmpleado">Dirección</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" name="address" id="address" placeholder="Edificio el bosque...">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputCiudad">Comuna</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                                    </div>
                                                                                    <select class="form-control" name="comuna" id="comuna">
                                                                                       

                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                        </div> -->
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputNarea">Área del contrato:</label>
                                                                                <div class="checkbox-card">
                                                                                    <div class="form-group col-md-20">
                                                                                        <div class="checkbox">
                                                                                            <label class="form-group col-md-10">
                                                                                                <input type="checkbox" style="margin-left: -5%; margin-right:2%;" name="Tipoarea[]" value="1" class="checkme">Hall Acceso
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="recursos-box">
                                                                                            <input type="text" name="Cant[]" placeholder="Cantidad de Empleados..." class="form-control">
                                                                                        </div>
                                                                                        <div class="checkbox">
                                                                                            <label class="form-group col-md-10">
                                                                                                <input type="checkbox" style="margin-left: -5%; margin-right:2%;" name="Tipoarea[]" value="2" class="checkme2">Bodega 1 Común
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="recursos-box2">
                                                                                            <input type="text" name="Cant[]" placeholder="Cantidad de Empleados..." class="form-control">
                                                                                        </div>
                                                                                        <div class="checkbox">
                                                                                            <label class="form-group col-md-10">
                                                                                                <input type="checkbox" style="margin-left: -5%; margin-right:2%;" name="Tipoarea[]" value="3" class="checkme3">Bodega 2 Común
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="recursos-box3">
                                                                                            <input type="text" name="Cant[]" placeholder="Cantidad de Empleados..." class="form-control">
                                                                                        </div>
                                                                                        <div class="checkbox">
                                                                                            <label class="form-group col-md-10">
                                                                                                <input type="checkbox" style="margin-left: -5%; margin-right:2%;" name="Tipoarea[]" value="4" class="checkme4">Bodega 3 Común
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="recursos-box4">
                                                                                            <input type="text" name="Cant[]" placeholder="Cantidad de Empleados..." class="form-control">
                                                                                        </div>
                                                                                        <div class="checkbox">
                                                                                            <label class="form-group col-md-10">
                                                                                                <input type="checkbox" style="margin-left: -5%; margin-right:2%;" name="Tipoarea[]" value="9" class="checkme5">Estacionamiento
                                                                                        </div>
                                                                                        <div class="recursos-box5">
                                                                                            <input type="text" name="Cant[]" placeholder="Cantidad de Empleados..." class="form-control">
                                                                                        </div>
                                                                                        <div class="checkbox">
                                                                                            <label class="form-group col-md-10">
                                                                                                <input type="checkbox" style="margin-left: -5%; margin-right:2%;" name="Tipoarea[]" value="10" class="checkme6">Sala
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="recursos-box6">
                                                                                            <input type="text" name="Cant[]" placeholder="Cantidad de Empleados..." class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-50">
                                                                                    <label></label>
                                                                                    <div class="checkbox-card">
                                                                                        <div class="form-group col-md-100">
                                                                                            <div class="checkbox">
                                                                                                <label class="form-group col-md-40">
                                                                                                    <input type="checkbox" style="margin-left: -2%; margin-right:2%;" name="Tipoarea[]" value="11" class="checkme7">Gimnasio
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="recursos-box7">
                                                                                                <input type="text" name="Cant[]" placeholder="Cantidad de Empleados..." class="form-control">
                                                                                            </div>
                                                                                            <div class="checkbox">
                                                                                                <label class="form-group col-md-40">
                                                                                                    <input type="checkbox" style="margin-left: -2%; margin-right:2%;" name="Tipoarea[]" value="12" class="checkme8">Cafetería - Casino
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="recursos-box8">
                                                                                                <input type="text" name="Cant[]" placeholder="Cantidad de Empleados..." class="form-control">
                                                                                            </div>
                                                                                            <div class="checkbox">
                                                                                                <label class="form-group col-md-40">
                                                                                                    <input type="checkbox" style="margin-left: -2%; margin-right:2%;" name="Tipoarea[]" value="13" class="checkme9">Quincho
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="recursos-box9">
                                                                                                <input type="text" name="Cant[]" placeholder="Cantidad de Empleados..." class="form-control">
                                                                                            </div>
                                                                                            <div class="checkbox">
                                                                                                <label class="form-group col-md-40">
                                                                                                    <input type="checkbox" style="margin-left: -2%; margin-right:2%;" name="Tipoarea[]" value="14" class="checkme10">Terraza
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="recursos-box10">
                                                                                                <input type="text" name="Cant[]" placeholder="Cantidad de Empleados..." class="form-control">
                                                                                            </div>
                                                                                            <div class="checkbox">
                                                                                                <label class="form-group col-md-40">
                                                                                                    <input type="checkbox" style="margin-left: -2%; margin-right:2%;" name="Tipoarea[]" value="15" class="checkme11">Oficina
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="recursos-box11">
                                                                                                <input type="text" name="Cant[]" placeholder="Cantidad de Empleados..." class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button class="btn btn-primary" style="margin-right: 40%;" onclick="stepper1.next()">Siguiente</button>
                                                                        </div>
                                                                    </div>
                                                                    <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">

                                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                                            Servicios Contratados</h4>

                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputTipoServicio">Tipo de Servicio:</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                                    </div>
                                                                                    <select id="listaservicio" class="form-control" name="listservicio" id="listservicio">
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

                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputListaServicio">Lista de Servicios:</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                                    </div>
                                                                                    <select id="listaservicioV" class="form-control" name="listservicioV" id="listservicioV">
                                                                                        <option value="0">Selecione un Servicio</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #4437ff;">
                                                                            Frecuencia de Servicio</h4>

                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputNombreEmpleado">Rango Periodo:</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                                    </div>
                                                                                    <select class="form-control" name="RangoP" id="RangoP">
                                                                                        <option>Días</option>
                                                                                        <option>Meses</option>
                                                                                        <option>Años</option>
                                                                                        <option>Trimestre</option>
                                                                                        <option>Semestre</option>
                                                                                        <option>Anual</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>

                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputNombreEmpleado">Periodo:</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                                    </div>
                                                                                    <input type="number" class="form-control" name="Periodo" id="Periodo">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputNombreEmpleado">Fecha Inicial:</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                                    </div>
                                                                                    <input type="date" class="form-control" name="Fincial" id="Finicial">
                                                                                </div>

                                                                            </div>

                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputNombreEmpleado">Observaciones:</label>
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" name="Observ" id="Observ" placeholder="Alguna Observación...">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button class="btn btn-primary" onclick="stepper1.previous()">Anterior</button>
                                                                        <button class="btn btn-primary" onclick="stepper1.next()">Siguiente</button>
                                                                    </div>

                                                                    <div id="test-l-3" role="tabpanel" class="bs-stepper-pane text-center" aria-labelledby="stepper1trigger3">

                                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                                            Dellate de Equipos Sujetos al presente Contrato de Mantención</h4>

                                                                        <div class="form-row">
                                                                            <div class="card-body">
                                                                                <table id="example2" class="table table-bordered table-hover table-responsive">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Nombre</th>
                                                                                            <th>Código</th>
                                                                                            <th>Descripcion</th>
                                                                                            <th>Categoria</th>
                                                                                            <th>Cantidad</th>
                                                                                            <th>Acciones</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php
                                                                                        $sql = "SELECT * FROM materialoproducto";
                                                                                        //ver como mostrar el nombre en vez del cargo

                                                                                        $resultado = mysqli_query($conn, $sql);
                                                                                        while ($filas = mysqli_fetch_array($resultado)) {
                                                                                            $var = $filas['SubCategoria_id'];
                                                                                            $sql2 = "SELECT * FROM subcategoria where id_subcategoria =$var";
                                                                                            $resultado2 = mysqli_query($conn, $sql2);
                                                                                            $nombrecomu = mysqli_fetch_array($resultado2);
                                                                                            $var2 = $filas['Categoria_id'];
                                                                                            $sql3 = "SELECT * FROM categoria where id_Categoria='$var2'";
                                                                                            $resultado3 = mysqli_query($conn, $sql3);
                                                                                            $datosEmpleado = mysqli_fetch_array($resultado3);
                                                                                        ?>
                                                                                            <tr>
                                                                                                <td><?php echo $filas['Nombre'] ?></td>
                                                                                                <td><?php echo $filas['CodigoMP'] ?></td>
                                                                                                <td><?php echo $filas['Descripcion'] ?></td>
                                                                                                <td><?php echo $datosEmpleado['Nombre'] ?></td>
                                                                                                <td><?php echo $filas['Cantidad'] ?></td>
                                                                                                <td>
                                                                                                    <div class="input-group-prepend">
                                                                                                        <input type="number" class="form-control" name="CantidadC[]" id="CantidadC[]" placeholder="1,2.">
                                                                                            </tr>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </tbody>
                                                                                </table>
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
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Información Contrato de servicios</h3>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Cliente</th>
                                        <th>Fecha de inicio del contrato</th>
                                        <th>Área</th>
                                        <th>Cantidad de Personal</th>
                                        <th>Fecha Inicio de obra</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM contrato ";
                                    //ver como mostrar el nombre en vez del cargo

                                    $resultado = mysqli_query($conn, $sql);
                                    while ($filas = mysqli_fetch_array($resultado)) {
                                        $var = $filas['id_cliente'];
                                        $sql2 = "SELECT * FROM cliente where Rut=$var";
                                        $resultado2 = mysqli_query($conn, $sql2);
                                        $id_Cod = mysqli_fetch_array($resultado2);
                                        $var2 = $filas['tipoarea'];
                                        $sql3 = "SELECT * FROM tipoarea where id_area=$var2";
                                        $resultado3 = mysqli_query($conn, $sql3);
                                        $nombrearea = mysqli_fetch_array($resultado3);

                                    ?>
                                        <tr>
                                            <td><?php echo $filas['Folio'] ?></td>
                                            <td><?php echo $id_Cod['Nombre'] ?></td>
                                            <td><?php echo $filas['Finicio'] ?></td>
                                            <td><?php echo $nombrearea['NombreArea'] ?></td>
                                            <td><?php echo $filas['CantidadPersonal'] ?></td>
                                            <td><?php echo $filas['Fincial'] ?></td>


                                            <td>
                                                <a href="../../CRUD/DELETE_contrato.php?id=<?php echo $filas['id_contrato'] ?>"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                                                <button type="button" class="btn btn-primary editbtn" data-toggle="modal" data-target="#crud<?php echo $filas['id_contrato']; ?>"><i class="fas fa-edit"></i></button>

                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
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
    <script src="bs-stepper.min.js"></script>
    <script src="ShowInput.js"></script>
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