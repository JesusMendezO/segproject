<?php
include('../../Conexion/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SISTEMA GESTIÓN</title>

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
                            <h1 class="m-0">Requerimiento de Compras</h1>
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
                    <div class="row">
                        <div class="col-12">
                            <!-- Aquí poner los botones -->
                            <!-- Button trigger modal -->
   

                         <!-- .card-body -->
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-tittle">Información de Requerimientos de Compras</h3>
                            </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                <th>Cliente</th>
                                <th>Contrato</th>
                                <th>OSM (Folio)</th>
                                <th>Fecha de Inicio</th>
                                <th>Requerimiento</th>
                                
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

                                    ?>
                                        <tr>
                                            <td><?php echo $id_Cod['Nombre'] ?></td>
                                            <td><?php echo $filas['Folio'] ?></td>
                                            <td><?php echo $filas['Folio'] ?></td>
                                            <td><?php echo $filas['Finicio'] ?></td>
                                            <td><?php echo 'Nro. 1' ?></td>

                                            <td>
                                                <a href="../Adquisiciones/ReqCompraLista.php"><button type="button" class="btn btn-info">Req. Compra</button></a>
                                                <a href="../Adquisiciones/FacturaCompra.php"><button type="button" class="btn btn-warning">Orden de Compra</button></a>
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
                            <!-- /.card-header -->

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
    <footer class=" main-footer">
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
    <script src="jquery.mim.js"></script>
    <script src="Ingresar.js"></script>

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
            $('#example3').DataTable({
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
</body>

</html>