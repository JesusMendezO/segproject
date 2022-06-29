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
                            <h1 class="m-0">Información de Servicios de Mantención</h1>
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
                                  <h4 style="font-size:20px;font-weight:bold;margin-bottom:4px;margin-top:10px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                      Documentos para exportar al campo:</h4>
                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#document_Print" ><i class="fas fa-file-contract" style="font-size: 25px;"></i></button>
                                </div>

                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Folio OSM</th>
                                                <th>Cliente</th>
                                                <th>Fecha Inicio de Contrato</th>
                                                <th>Fecha Inicio de obra</th>
                                                <th>Área</th>
                                                <th>Cantidad de Personal</th>
                                                <th>Nro. Contrato</th>
                                                <th>Estado</th>
                                                <th>Generar Documentos</th>
                                                <!--th>Acciones</th-->
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
                                                    <td><?php echo $filas['Folio'] ?></td>
                                                    <td><?php echo $id_Cod['Nombre'] ?></td>
                                                    <td><?php echo $filas['Fincial'] ?></td>
                                                    <td><?php echo $filas['Finicio'] ?></td>
                                                    <td></td>
                                                    <td><?php echo $filas['CantidadPersonal'] ?></td>
                                                    <td></td>
                                                    <td>
                                                      <div class="btn">
                                                        <button class="btn btn-primary" onclick="aviso();" ><i class="fas fa-calendar-alt"></i></button>
                                                      </div>
                                                    </td>



                                                    <td>


                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#check_list">CheckList</button>
                                                        <a href="../ServicioMantencion/Guia_Servicio.php"><button type="button" class="btn btn-warning">Guía de Servicio</button></a>
                                                        <a href="../GenerarDocumento/ActaCierreServicioMantencion.php?id=<?php echo $filas['id_contrato']; ?>"><button type="button" class="btn btn-danger"></i>Acta de Cierre</button></a>

                                                    </td>
                                                    <!-- td> <button type="button" class="btn btn-primary editbtn" data-toggle="modal" data-target="#CreateOSM<?php echo $id_Cod['Rut']; ?>">Ficha Orden Servicio Mantención</button> </td -->
                                                </tr>
                                            <?php
                                                include 'AgregarOSM.php';
                                            }
                                            ?>
                                        </tbody>
                                    </table>


                                </div>
                                            <!-- Modal Plantillas -->
                                <div class="modal fade" id="check_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color:#3f668d">
                                                <h5 class="modal-title" style="color:white" id="exampleModalLabel">CheckList Sistema Control de Acceso</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-header">
                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                                        CheckList</h4>
                                                    <br>
                                                    <a href="../ServicioMantencion/Check_ListCCAC.php"><button type="button" class="btn btn-success" style="margin-left: 10%;">
                                                            Ingresar C.ACC
                                                        </button></a>
                                                    <a href="../ServicioMantencion/Check_ListCCTV.php"><button type="button" class="btn btn-success" style="margin-left: 10%;">
                                                            Ingresar CCTV
                                                        </button></a>
                                                    <a href="../ServicioMantencion/Check_ListDeteccion.php"><button type="button" class="btn btn-success" style="margin-left: 10%;">
                                                            Ingresar Detección
                                                        </button></a>
                                                    <!-- a href="../ServicioMantencion/Check_ListSSB.php"><button type="button" class="btn btn-success" style="margin-left: 8%;">
                                                            Ingresar Tipo - SBB
                                                        </button></a -->
                                                    <a href="../ServicioMantencion/Check_ListSSB-Electrica.php"><button type="button" class="btn btn-success" style="margin-left: 23%;">
                                                            Ingresar SBB Eléctrica
                                                        </button></a>
                                                    <a href="../ServicioMantencion/Check_ListSSB-Diesel.php"><button type="button" class="btn btn-success" style="margin-left: 6%;">
                                                            Ingresar SBB Diesel
                                                        </button></a>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>

                                            <!-- Modal Documentos para Imprimir -->
                                <div class="modal fade" id="document_Print" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color:#3f668d">
                                                <h5 class="modal-title" style="color:white" id="exampleModalLabel">CheckList Sistema Control de Acceso</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                 <div class="card-header">
                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                                        CheckList</h4>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#">
                                                        C.ACC
                                                    </button>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#">
                                                        CCTV
                                                    </button>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#">
                                                        Detección
                                                    </button>
                                                    <!-- button type="button" class="btn btn-success" data-toggle="modal" data-target="#">
                                                        Tipo - SBB
                                                    </button -->
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#">
                                                        SBB Eléctrica
                                                    </button>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#">
                                                        SBB Diesel
                                                    </button>
                                                    <br>
                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #55D3FD;">
                                                        Guía de Servicio</h4>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#">
                                                        Guía de Servicio
                                                    </button>
                                              </div>


                                            </div>

                                        </div>
                                    </div>
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
    <script src="../ServicioMantencion/estado.js"></script>
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