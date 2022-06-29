<?php
include('../../Conexion/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sección Ficha Cliente</title>

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
                            <h1 class="m-0">Cotización</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">


                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../MenuAdministrador/administrador.php">Inicio</a></li>

                            </ol>
                        </div>
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
                    <form method="POST" action="../../PhP/INSERTAR_FichaCliente.php">
                        <div class="row">
                            <!-- aquí puedo poner objetos separados en cartas. -->
                            <div class="col-md-6">

                                <div class="card">
                                    <div class="card-header">

                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-top-style: solid;border-top-color: #00c0ef;">
                                            Cliente Asociado</h4>

                                        <div class="card-body">
                                            <select class="form-control" name="cliente" id="cliente">
                                                <option value="0">Seleccione el cliente</option>
                                                <?php
                                                $sql = ("SELECT * FROM cliente");
                                                $query = $conn->query($sql);
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="' . $valores['Rut'] . '">' . $valores['Nombre'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-address-card"><label for="inputRut">Rut</label></i>
                                                        </div>
                                                        <input type="text" class="form-control" name="rut" id="rut">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-map-marked-alt"><label for="inputRut">Direccion</label></i>
                                                        </div>

                                                        <input type="text" class="form-control" name="direccion" id="direccion">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <div class="input-group-prepend">

                                                        <div class="input-group-text"><i class="fas fa-chart-line"><label for="inputRut">Actividad</label></i>
                                                        </div>
                                                        <input type="text" class="form-control" name="actividad" id="actividad">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-user"><label for="inputRut">Ejecutivo</label></i>
                                                        </div>

                                                        <input type="text" class="form-control" name="ejecutivo" id="ejecutivo">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <div class="input-group-prepend">

                                                        <div class="input-group-text"><i class="fas fa-mobile-alt"><label for="inputRut">Teléfono:</label></i>
                                                        </div>

                                                        <input type="text" class="form-control" name="telefono" id="telefono">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-envelope"><label for="inputRut">Correo</label></i>
                                                        </div>

                                                        <input type="text" class="form-control" name="mail" id="mail">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- sin fondo -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-top-style: solid;border-top-color: #00c0ef;">
                                            Datos de Cotización</h4>
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputRut">Fecha Inicio</label>
                                                    <div class="input-group-prepend">
                                                        <input type="date" class="form-control" name="rut" id="rut">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputRut">Fecha Fin</label>
                                                    <div class="input-group-prepend">
                                                        <input type="date" class="form-control" name="direccion" id="direccion">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputRut">Especialidad</label>
                                                    <div class="input-group-prepend">
                                                        <select class="form-control" name="especialidad" id="especialidad">

                                                            <?php
                                                            $sql = ("SELECT * FROM especialidad");
                                                            $query = $conn->query($sql);
                                                            while ($valores = mysqli_fetch_array($query)) {
                                                                echo '<option value="' . $valores['id_Especialidad'] . '">' . $valores['Nombre'] . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputRut">Servicio</label>
                                                    <div class="input-group-prepend">
                                                        <select class="form-control" name="especialidad" id="especialidad">
                                                            <?php
                                                            $sql = ("SELECT * FROM listaservicio");
                                                            $query = $conn->query($sql);
                                                            while ($valores = mysqli_fetch_array($query)) {
                                                                echo '<option value="' . $valores['ID_lista'] . '">' . $valores['Nombre'] . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputRut">Sistema</label>
                                                    <div class="input-group-prepend">
                                                        <select class="form-control" name="listapiping" id="listapiping">

                                                            <?php
                                                            $sql = ("SELECT * FROM listaserviciopiping");
                                                            $query = $conn->query($sql);
                                                            while ($valores = mysqli_fetch_array($query)) {
                                                                echo '<option value="' . $valores['id_piping'] . '">' . $valores['Nombre'] . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputRut">Área</label>
                                                    <div class="input-group-prepend">
                                                        <select class="form-control" name="especialidad" id="especialidad">
                                                            <option value="0">Seleccionar área</option>
                                                            <?php
                                                            $sql = ("SELECT * FROM tipoarea");
                                                            $query = $conn->query($sql);
                                                            while ($valores = mysqli_fetch_array($query)) {
                                                                echo '<option value="' . $valores['id_area'] . '">' . $valores['NombreArea'] . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputRut">Cantidad de áreas</label>
                                                    <div class="input-group-prepend">
                                                        <input type="number" class="form-control" name="cantidadArea" id="cantidadArea">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputRut">Agregar otra área</label>
                                                    <div class="input-group-prepend">
                                                        <button style="width:15%;margin-left:10%" id="adicional" type="button" class="btn btn-block btn-primary">+</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>




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
    <script src="../../recursos/Javascript/ajax/funcionCliente.js"></script>
    <script>
        $(function() {
            $("#adicional").on("click", function() {
                $
            })
        })
    </script>
    <!-- <script>
        $(document).ready(function(e) {
            $("#cliente").change(function() {
                var id_cliente = $("#cliente").val();

                $.ajax({
                    data: id_cliente,
                    url: '../../CRUD/Read_Cliente.php',
                    type: 'post',
                    beforeSend: function() {
                        $('#cliente')
                    }
                })
            })
        })
    </script> -->


</body>

</html>