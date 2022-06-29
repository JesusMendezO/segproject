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
                            <h1 class="m-0">Servicios de Mantención: Guia de Servicio</h1>
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
                                <div class="card-body">
                                    <form method="POST" action="#">
                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                        Guía de Servicio</h4>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputNombreCliente">N° de Orden Técnica:</label>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-sort-numeric-down"></i>
                                                </div>
                                                <input type="number" class="form-control" name="NOT">


                                            </div>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputNombreCliente">N° De Servicio Técnico:</label>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-sort-numeric-down"></i>
                                                </div>
                                                <input type="number" class="form-control" name="NServiceTec">


                                            </div>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputNombreCliente">Nombre del Cliente</label>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                </div>
                                                <select class="form-control" name="cliente">
                                                    <?php
                                                    $sql = ("SELECT * FROM cliente");
                                                    $query = $conn->query($sql);
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="' . $valores['id-Rut'] . '">' . $valores['Nombre'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                        </div>
                                        <!-- cargar el id del servicio técnico según lo seleccionado arriba (tabla autoincremental) -->



                                    </div>



                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #1eff56;">
                                        Tipo de Servicio-Trabajo</h4>

                                    <div class="form-row">

                                        <!-- acá -->
                                        <div class="form-group col-md-2">

                                            <div class="input-group-prepend">

                                                <input type="checkbox" id="check[]" name="check[]" value="Instalacion">
                                                <label for="value1">Instalación</label><br>
                                            </div>

                                        </div>
                                        <div class="form-group col-md-2">

                                            <div class="input-group-prepend">

                                                <input type="checkbox" id="check[]" name="check[]" value="Reparacion">
                                                <label for="value2">Reparación</label><br>
                                            </div>

                                        </div>
                                        <div class="form-group col-md-2">

                                            <div class="input-group-prepend">

                                                <input type="checkbox" id="check[]" name="check[]" value="Mantencion">
                                                <label for="value2">Mantención</label><br>
                                            </div>

                                        </div>

                                        <div class="form-group col-md-2">

                                            <div class="input-group-prepend">

                                                <input type="checkbox" id="check[]" name="check[]" value="Inspeccion_Tecnica">
                                                <label for="value1">Inspección Técnica</label><br>
                                            </div>

                                        </div>
                                        <div class="form-group col-md-2">

                                            <div class="input-group-prepend">

                                                <input type="checkbox" id="check[]" name="check[]" value="Reinstalacion">
                                                <label for="value2">Reinstalación</label><br>
                                            </div>

                                        </div>
                                        <div class="form-group col-md-2">

                                            <div class="input-group-prepend">

                                                <input type="checkbox" id="check[]" name="check[]" value="RevisionDeGarantia">
                                                <label for="value2">Revisión de Garantía</label><br>
                                            </div>

                                        </div>
                                        <div class="form-group col-md-2">

                                            <div class="input-group-prepend">

                                                <input type="checkbox" id="check[]" name="check[]" value="ServicioTecnico">
                                                <label for="value2">Servicio Técnico</label><br>
                                            </div>

                                        </div>
                                        <div class="form-group col-md-2">

                                            <div class="input-group-prepend">

                                                <input type="checkbox" id="check[]" name="check[]" value="Levantamiento">
                                                <label for="value2">Levantamiento</label><br>
                                            </div>

                                        </div>
                                        <div class="form-group col-md-3">

                                            <div class="input-group-prepend">

                                                <input type="checkbox" id="check[]" name="check[]" value="Otro">
                                                <label for="value2">Otro</label><br>
                                            </div>

                                        </div>

                                        <div class="form-group col-md-6">

                                            <label for="inputDireccionPago">Descripción del Servicio o Trabajo:</label>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-search"></i>
                                                </div>
                                                <input type="text" class="form-control" name="DescripcionServicio" id="DescripcionServicio" placeholder="Cliente señala que Sistema de CCTV no esta grabando las camaras en la noche....">
                                            </div>

                                        </div>
                                        <div class="form-group col-md-6">

                                            <label for="inputDireccionPago">Informe Estado Orden Técnica:</label>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-toolbox"></i>
                                                </div>
                                                <input type="text" class="form-control" name="ElementoReemplazado[]" id="ElementoReemplazado[]" placeholder="Ingrese el nombre del producto reemplazado">
                                            </div>

                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Agregar</button>
                                    </div>
                                </form>


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

</body>

</html>