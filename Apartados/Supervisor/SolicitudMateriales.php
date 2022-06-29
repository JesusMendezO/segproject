<?php
include('../../Conexion/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sección Supervisor</title>

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
              <h1 class="m-0">Sección Solicitud de Materiales</h1>
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

              <div class="card">
                <div class="card-header">
                  <!-- Aquí poner los botones -->
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SolicitudMateriales">
                    Generar Solicitud
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="SolicitudMateriales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color:#3f668d">
                          <h5 class="modal-title" style="color:white" id="exampleModalLabel">Generar Solicitud</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">


                          <form method="POST" action="../../..">
                            <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                            </h4>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputDescripciónMat">Descripción de Material</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-bookmark"></i>
                                  </div>
                                  <input type="text" class="form-control" name="DescripciónMat" id="DescripciónMat" placeholder="Descripción de Materiales">
                                </div>

                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputIDSolicitud">Solicitud Nro.:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="far fa-id-card"></i>
                                  </div>
                                  <input type="text" class="form-control" name="IDSolicitud" id="IDSolicitud" placeholder="11111111-1">
                                </div>

                              </div>

                            </div>
                            <div class="form-row">

                              <div class="form-group col-md-6">
                                <label for="inputComentario">Comentario</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-comment-dots"></i>
                                  </div>
                                  <input type="text" class="form-control" name="Comentario" id="Comentario" placeholder="Comentarios Adicionales">
                                </div>

                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputNumFolio">Folio</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="far fa-id-card"></i>
                                  </div>
                                  <input type="text" class="form-control" name="NumFolio" id="NumFolio" placeholder="D1231-2">
                                </div>

                              </div>
                            </div>
                            <div class="form-row">

                              <div class="form-group col-md-6">
                                <label for="inputRutCliente">Rut Cliente</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control" name="RutCliente" id="RutCliente" placeholder="11111111-1">
                                </div>

                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputRutEmpleado">Rut Empleado</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control" name="RutEmpleado" id="RutEmpleado" placeholder="11111111-1">
                                </div>

                              </div>

                            </div>
                            <div class="form-row">

                              <div class="form-group col-md-6">
                                <label for="inputFechaEmision">Fecha de Emisión</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="far fa-calendar-alt"></i>
                                  </div>
                                  <input type="date" class="form-control" name="FechaEmision" id="FechaEmision" placeholder="dd/mm/aaaa">
                                </div>

                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputFechaRecepcion">Fecha de Recepción</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="far fa-calendar-check"></i>
                                  </div>
                                  <input type="date" class="form-control" name="FechaRecepcion" id="FechaRecepicon" placeholder="dd/mm/aaaa">
                                </div>

                              </div>
                            </div>

                            <div class="form-row">

                              <div class="form-group col-md-4">
                                <label for="InpuntObservacion">Observaciones</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-comment"></i>
                                  </div>
                                  <input type="text" class="form-control" name="Observaciones" id="Observaciones" placeholder="Alguna Observación Adicional">
                                </div>

                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputIDProyecto">ID Proyecto</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-radiation-alt"></i>
                                  </div>
                                  <input type="email" class="form-control" name="IDProyecto" id="IDProyecto" placeholder="Ingrese ID del Proyecto">
                                </div>

                              </div>

                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputDevolucion">Devolución</label>
                              <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <select class="form-control" name="Devolucion" id="Devolucion">
                                  <option>En Espera</option>
                                  <option>No</option>
                                  <option>Si</option>
                                </select>
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

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Descripcion</th>
                      <th>IDProyecto</th>
                      <th>Folio</th>
                      <th>RutCliente</th>
                      <th>RutEmpleado</th>
                      <th>FechaEmision</th>
                      <th>FechaRecepcion</th>
                      <th>Devolucion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM cliente";
                    $resultado = mysqli_query($conn, $sql);
                    while ($filas = mysqli_fetch_array($resultado)) {
                      $var = $filas['Region'];
                      $sql = "SELECT * FROM region where Id_Region=$var";
                      $query = mysqli_query($conn, $sql);
                      $fila = mysqli_fetch_array($query);
                      $var2 = $filas['Ciudad'];
                      $sql2 = "SELECT * FROM comuna WHERE id_comuna=$var2";
                      $query2 = mysqli_query($conn, $sql2);
                      $fila2 = mysqli_fetch_array($query2);
                    ?>
                      <tr>
                        <td><?php echo $filas['Nombre'] ?></td>
                        <td><?php echo $filas['Rut'] ?></td>
                        <td><?php echo $filas['Email'] ?></td>
                        <td><?php echo $filas['Telefono'] ?></td>
                        <td><?php echo $fila['Nombre'] ?></td>
                        <td><?php echo $fila2['Nombre_comuna'] ?></td>
                        <td><?php echo $filas['Actividad'] ?></td>
                        <td><?php echo $filas['Representante'] ?></td>
                        <td>
                          <a href="../../CRUD/DELETE_Cliente.php?id=<?php echo $filas['Rut'] ?>"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                          <button type="button" class="btn btn-primary editbtn" data-toggle="modal" data-target="#update_user_modal<?php echo $filas['Rut']; ?>"><i class="fas fa-edit"></i></button>
                        </td>
                      </tr>
                    <?php
                    }
                    mysqli_close($conn);
                    ?>
                  </tbody>
                </table>
              </div>
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