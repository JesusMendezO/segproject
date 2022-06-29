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
        <div id="nav-bar">
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
                                                                <?php
                                                                  $sql = ("SELECT * FROM contrato ORDER by Folio DESC LIMIT 1");
                                                                  $query = $conn->query($sql);
                                                                  $valores = mysqli_fetch_array($query)                                                                                        
                                                                ?>                      
                                                                <input type="text" class="form-control" name="folio" id="folio" value="<?php echo $valor=$valores["Folio"]+1;?>" disabled >
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
                                                                    //$valores = mysqli_fetch_assoc($query);
                                                                    // foreach ($vendedores as $key => $value) {
                                                                    //     echo '<option  value="'.$value["Rut"].'">'.$value["Nombre"].' </option>';
                                                                    //     }
                                                                     while ($valores = mysqli_fetch_assoc($query)) {
                                                                        echo '<option value="' . $valores['Rut'] . '">' . $valores['Nombre'] . '</option>';
                                                                       
                                                                    }
                                                                    
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">RUT:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fa fa-id-card" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="RUT" id="RUT" placeholder="98.123.567-K">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class=" form-row">

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">Dirección:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="address" id="address" placeholder="Edificio el bosque...">
                                                            </div>
                                                        </div>

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

                                                    </div>

                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail">Correo Electrónico:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-envelope"></i>
                                                                </div>
                                                                <input type="email" class="form-control" name="Email" id="Email" placeholder="contacto@dominio.com">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">Persona de Contacto:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="address" id="address" placeholder="Nombre y Apellido...">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-row">

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

                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" style="margin-right: 46%;" onclick="stepper1.next()">Siguiente</button>
                                                    </div>

                                                </div>
                                                <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">

                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                        Instalación(es) a Requerir Servicio de Mantención:</h4>
                                                    <br>

                                                    <div class="card">
                                                        <FORM name="FormSerMant" method="POST" action="../../PhP/INSERTAR_contrato.php">
                                                            <div class="header">
                                                                <div class="form-row">
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Instalación:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Area:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Tipo de Ser.:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Lista de Ser.:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="text-align: center;">Fecha de Inicio de Ser.:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Periodo del Ser.:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Cant. de Técnicos:</label>
                                                                    </div>
                                                                    <div class="col rounded-lg" style="background: #D6EAF8; margin-left: 2px; border-color: #85929E; text-align: center;">
                                                                        <label for="inputNombreEmpleado" style="margin-top: 10%;">Acciones:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-row">

                                                                    <div class="col rounded-lg">
                                                                        <select class="form-control" id="TipIns" name="TipIns[]" style="margin-left: -15px">
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

                                                                    <div class="col rounded-lg">
                                                                        <select class="form-control" id="AreaCont" name="AreaCont[]" style="margin-left: -10px">
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

                                                                    <div class="col rounded-lg">
                                                                        <select id="listaservicio" class="form-control" id="listservicio" name="listservicio[]" style="margin-left: -5px">
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

                                                                    <div class="col rounded-lg">
                                                                        <select id="listaservicioV" class="form-control" id="listservicioV" name="listservicioV[]" style="margin-left: 2px">
                                                                            <option value="0">Seleccione un Servicio</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col rounded-lg">
                                                                        <input type="date" class="form-control" id="DateStart" name="DateStart[]" value="" style="margin-left: 10px; width:95%;">
                                                                    </div>

                                                                    <div class="col rounded-lg">
                                                                        <select class="form-control" id="TipPer" name="TipPer[]" style="margin-left: 5px">
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
                                                                    </div>

                                                                    <div class="col rounded-lg">
                                                                        <input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="" placeholder="1,2,3..." style="margin-left: 5px">
                                                                    </div>

                                                                    <div class="col rounded-lg">
                                                                        <button type="button" class="btn btn-success btn-xs" onclick="add_installations_fields();" style="position: absolute; right: 35px;"> <i class="fas fa-plus"></i> </button>
                                                                    </div>

                                                                </div>

                                                                <div id="installations_fields"></div>
                                                            </div>
                                                         <div id="productos">
<?php require_once("InputDinamico.php") ?>
</div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-8">
                                                                    <label for="inputNombreEmpleado">Observaciones:</label>
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="fas fa-comment"></i>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="Observa" name="Observa[]" value="" placeholder="Alguna otra cosa por aclarar...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <button class="btn btn-primary" style="margin-left: 40%;" onclick="stepper1.previous()">Anterior</button>
                                                    <button class="btn btn-primary" onclick="stepper1.next()">Siguiente</button>

                                                </div>

                                                <div id="test-l-3" role="tabpanel" class="bs-stepper-pane text-center" aria-labelledby="stepper1trigger3">

                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                        Detalle de Equipos Encontrados Según el Contrato de Mantención</h4>

                                                    <br>
                                                    <div class="card">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover" id="crud_table">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 13%;">Area</th>
                                                                        <th style="width: 13%;">Tipo de Servicio</th>
                                                                        <th style="width: 13%;">Lista de Servicio</th>
                                                                        <th style="width: 13%;">Nombre del Prod.</th>
                                                                        <th style="width: 13%;">Cod. del Producto</th>
                                                                        <th style="width: 13%;">Descripción del Prod.</th>
                                                                        <th style="width: 13%;">Cantidad Req.</th>

                                                                        <th style="width: 5%;"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="padding: 5px;">
                                                                            <input disabled type="text" class="form-control" name="Area_Ser" id="Area_Ser" value="Hall Acceso">
                                                                        </td>
                                                                        <td style="padding: 5px;">
                                                                            <input disabled type="text" class="form-control" name="#" id="#" value="Electrónica">
                                                                        </td>
                                                                        <td style="padding: 5px;">
                                                                            <input disabled type="text" class="form-control" name="#" id="#" value="CCTV">
                                                                        </td>
                                                                        <td style="padding: 5px;">
                                                                            <input type="text" class="form-control" name="eq_nombre[]" placeholder="Nombre del Producto...">
                                                                        </td>
                                                                        <td style="padding: 5px;">
                                                                            <input type="text" class="form-control" name="eq_codigo[]" placeholder="B-1234, DA531-C...">
                                                                        </td>
                                                                        <td style="padding: 5px;">
                                                                            <input type="text" class="form-control" name="eq_descripcion[]" placeholder="Alguna descripción...">
                                                                        </td>
                                                                        <td style="padding: 5px;">
                                                                            <input type="number" class="form-control" name="eq_cantidadreq[]" placeholder="1,2,3...">
                                                                        </td>
                                                                        <td style="padding: 5px;">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div style="text-align: right;">
                                                                <button type="button" name="Add" id="Add" class="btn btn-success btn-xs" style="margin-left: 95%"><i class="fas fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary mt-5" onclick="stepper1.previous()">Anterior</button>
                                                    <a href="../Cliente/contrato.php"><button type="button" id="enviar" class="btn btn-primary mt-5">Registrar</button></a>
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
    <script src="./js/datosClientes.js"></script>
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

<script>






function AgregarMas() {
	$("<div>").load("InputDinamico.php", function() {
			$("#productos").append($(this).html());
	});	

 
    setTimeout(()=>{
        $('div.lista-producto').each(function(index, item){
        var i=index
       
        $('li.list-group-item').each(function(index, item){
            var i2=index
            var dato= document.getElementsByName('pro_cantidad[]')[i2].value;
               
               
                 document.getElementsByName('listservicio[]')[i2].onchange = function(e) {
    option = this.value;
    
    $.post("get_servicios.php", { elegido: option }, function(data){
                document.getElementsByName('listservicioV[]')[i2].innerHTML=data;
            });  

}
                 
        });

	});
    },1000);
}

function BorrarRegistro() {
    $('div.lista-producto').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
    
}

</script>
</body>

</html>