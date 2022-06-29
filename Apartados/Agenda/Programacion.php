<?php
include('../../Conexion/conexion.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Programar Servicio</title>

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
                            <h1 class="m-0">Sección Programación</h1>
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
            <div class="container">
               <div class="row">                
                  <div class="col-12" >
                    <div class="card">
                      <div class="card-header">
                      <div class="botones" style="margin-bottom:1%; margin-top:1%">
                          <a href="../Cliente/get_contrato.php"><button type="button" class="btn btn-primary">
                                            Ingresar Evento
                                        </button></a>


                                    </div>

                      </div>

                
                    <!-- Modal (Agregar, Editar o Borrar) -->
                <div class="modal fade" id="ModalProgramacion" name="ModalProgramacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <form class="row">
                    <div class="form-group col-md-12">
                        <h4 style=" font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                            Información del Solicitante</h4>
                        <div class="form-row">
                            <div class="form-group col-md-11">
                                <label for="inputNombreCliente">Seleccione Cliente:</label>
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
                                <label for="inputNombreCliente">Seleccione Servicio:</label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                    </div>
                                    <select class="form-control" name="listaservicio" id="listaservicio">
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
                            <div class="form-group col-md-11">
                                <label for="inputNombreCliente">Comentarios:</label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-heading"></i>
                                    </div>
                                    <input type="text" class="form-control" name="Comentario" id="Comentario" placeholder="Fuga en sistema... Revisión con urgencia">
                                </div>

                            </div>

                        </div>



                    </div>
                    <div class="form-group col-md-12">
                        <h4 style=" font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                            Ingreso de Visita</h4>
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <label for="inputNombreCliente">Fecha de Visita:</label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                    </div>
                                    <input type="date" class="form-control" name="fechaVisita" id="fechaVisita">
                                </div>

                            </div>
                            <div class="form-group col-md-10">
                                <label for="inputNombreCliente">Seleccionar Cuadrilla:</label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                    </div>
                                    <select class="form-control" name="Mpago" id="Mpago">
                                        <?php
                                        $sql = ("SELECT * FROM cuadrilla WHERE Estado ='Libre'");
                                        $query = $conn->query($sql);
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id_personal'] . '">' . $valores['Alias'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>


                        </div>
                        <div class="Ingreso" style="margin-top:4%;">
                            <a href="#"><button type="button" class="btn btn-success"></i>Ingresar Servicio</button></a>
                        </div>

                    </div>

                                    </form>
                    </div>
                </div>
                </div>
                  <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example6" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Comienzo</th>
                            <th>Finalización</th>
                            <th>Alerta</th>

                            <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $sql = "SELECT * FROM eventos";
                             //ver como mostrar el nombre en vez del cargo

                             $resultado = mysqli_query($conn, $sql);
                             while ($filas = mysqli_fetch_array($resultado)) {

                             ?>
                                 <tr>
                                     <td><?php echo $filas['id']; ?></td>
                                     <td><?php echo $filas['title']; ?></td>
                                     <td><?php echo $filas['descripcion']; ?></td>
                                     <td><?php echo $filas['start']; ?></td>
                                     <td><?php echo $filas['end']; ?></td>
                                     <td></td>

                                     <td>
                                         <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                         <button type="button" class="btn btn-primary editbtn" data-toggle="modal"><i class="fas fa-edit"></i></button>

                                     </td>
                                 </tr>
                             <?php
                             }
                            mysqli_close($conn);
                            ?>
                        </tbody>
                        </table>
                    </div>
                
                  </div>
                    <!-- /.card-body -->
                      </div>
                    <!-- /.col -12 -->
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