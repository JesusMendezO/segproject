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
              <h1 class="m-0">Sección: Ficha Cliente</h1>
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
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FichaCliente">
                    Ingresar Cliente
                  </button>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#proyecto">
                    Ingresar Proyecto
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="FichaCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color:#3f668d">
                          <h5 class="modal-title" style="color:white" id="exampleModalLabel">Ficha Cliente</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">


                          <form method="POST" action="../../PhP/INSERTAR_FichaCliente.php">
                            <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                              Datos del Cliente:</h4>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputNombreCliente">Nombre de Cliente:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control" name="NombreCliente" id="NombreCliente" placeholder="Ingrese Cliente">
                                </div>

                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputRut">RUT:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-address-card"></i>
                                  </div>
                                  <input type="text" class="form-control" name="RutCliente" id="RutCliente" placeholder="11111111-1">
                                </div>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="inputTlf">Teléfono:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-mobile"></i>
                                  </div>
                                  <input type="text" class="form-control" name="telefono" id="telefono" placeholder="911111111">
                                </div>

                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputActividad">Actividad:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-briefcase"></i>
                                  </div>
                                  <input type="text" class="form-control" name="Actividad" id="Actividad" placeholder="Ingrese su actividad">
                                </div>
                              </div>
                            
                              <div class="form-group col-md-6">
                                <label for="inputPais">País:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-building"></i>
                                  </div>
                                  <input type="text" class="form-control" name="pais" id="pais" placeholder="Chile">
                                </div>

                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputRegion">Región:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-building"></i>
                                  </div>
                                  <select class="form-control" name="region" id="region">
                                    <?php
                                    $sql = ("SELECT * FROM region");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                      echo '<option value="' . $valores['Id_Region'] . '">' . $valores['Nombre'] . '</option>';
                                    }
                                    ?>
                                  </select>
                                </div>

                              </div>

                            </div>
                            <div class="form-row">

                              <div class="form-group col-md-6">
                                <label for="inputCiudad">Ciudad:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-house-user"></i>
                                  </div>
                                  <select class="form-control" name="ciudad" id="ciudad">
                                    <!-- php aquí -->
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
                                <label for="inputDireccion">Dirección:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-building"></i>
                                  </div>
                                  <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingrese la dirección">
                                </div>

                              </div>
                            </div>
                             <br>

                            <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #1eff56;">
                              Datos de Crédito y Cobranza:</h4>

                            <div class="form-row">

                              <div class="form-group col-md-4">
                                <label for="inputPlazoPago">Plazo de Pago:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-building"></i>
                                  </div>
                                  <input type="text" class="form-control" name="PPago" id="PPago" placeholder="Ingrese el plazo de pago en días">
                                </div>

                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputContactoCobranza">Contacto Cobranza:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-phone"></i>
                                  </div>
                                  <input type="text" class="form-control" name="TelefonoCobranza" id="TelefonoCobranza" placeholder="Ingrese nombre del contacto">
                                </div>

                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputEmail5">Correo Pago:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-envelope"></i>
                                  </div>
                                  <input type="email" class="form-control" name="CorreoPago" id="CorreoPago" placeholder="contacto@dominio.com">
                                </div>

                              </div>
                            </div>


                            <div class="form-row">

                              <div class="form-group col-md-6">

                                <label for="inputDireccionPago">Dirección Pago:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-building"></i>
                                  </div>

                                  <input type="text" class="form-control" name="DirecPago" placeholder="Ingrese la dirección del pago">
                                </div>

                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputLineaCredito">Línea de crédito:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-wallet"></i>
                                  </div>
                                  <input type="text" class="form-control" name="LineCredit" id="LineCredit" placeholder="Ingrese Línea de pago">
                                </div>

                              </div>
                            </div>
                            <br>

                            <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #8b11fd;">
                              Datos de Contacto:</h4>

                            <div class="form-row">

                              <div class="form-group col-md-4">
                                <label for="InpuntRepre">Representante:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control" name="NombreRepresentante" id="NombreRepresentante" placeholder="ingrese nombre de Representante">
                                </div>

                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputEmail4">Email:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-envelope"></i>
                                  </div>
                                  <input type="email" class="form-control" name="CorreoCliente" id="CorreoCliente" placeholder="contacto@dominio.com">
                                </div>

                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputEmail4">Correo Pago:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-user"></i>
                                  </div>
                                  <input type="email" class="form-control" id="CorreoPago" placeholder="contacto@dominio.com">
                                </div>

                              </div>
                            </div>
                            <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #4437ff;">
                              Configuración Cliente</h4>
                            <div class="form-row">

                              <div class="form-group col-md-4">
                                <label for="inputEstadoCliente">Estado de Cliente en el Sistema:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-user"></i>
                                  </div>
                                  <select class="form-control" name="EstadoCliente" id="EstadoCliente">
                                    <?php
                                    $sql = ("SELECT * FROM estado_cliente_sistema");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                      echo '<option value="' . $valores['id_EstadoClienteSis'] . '">' . $valores['Estado_Cliente'] . '</option>';
                                    }
                                    ?>

                                  </select>
                                </div>

                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputEmail4">Tipo de Cliente:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-user"></i>
                                  </div>
                                  <select class="form-control" name="TipoCliente" id="TipoCliente">

                                    <?php
                                    $sql = ("SELECT * FROM tipocliente");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                      echo '<option value="' . $valores['id_TipoCliente'] . '">' . $valores['Categoria_usuario'] . '</option>';
                                    }
                                    ?>
                                  </select>
                                </div>

                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputcontrato">Tipo de contrato:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-copy"></i>
                                  </div>
                                  <select class="form-control" name="contrato" id="contrato">
                                    <?php
                                    $sql = ("SELECT * FROM tipocontrato");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                      echo '<option value="' . $valores['id_tipoContrato '] . '">' . $valores['Tipo'] . '</option>';
                                    }
                                    ?>
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

                  <div class="modal fade" id="proyecto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color:#3f668d">
                          <h5 class="modal-title" style="color:white" id="exampleModalLabel">Ficha Proyecto</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">


                          <form method="POST" action="#">
                            <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                              Datos del Proyecto</h4>
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
                                <label for="inputRut">Especialidad</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-address-card"></i>
                                  </div>
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

                            </div>
                            <div class="form-row">

                              <div class="form-group col-md-6">
                                <label for="inputTlf">Material a utilizar:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fa-solid fa-wrench"></i>
                                  </div>
                                  <select class="form-control" name="material" id="material">
                                    <?php
                                    $sql = ("SELECT * FROM materialoproducto");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                      echo '<option value="' . $valores['CodigoMP'] . '">' . $valores['Nombre'] . '</option>';
                                    }
                                    ?>
                                  </select>
                                </div>

                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputActividad">Cantidad Producto</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-briefcase"></i>
                                  </div>
                                  <input type="number" class="form-control" name="cantidad" id="cantidad">
                                </div>

                              </div>
                            </div>
                            <div class="form-row">

                              <div class="form-group col-md-6">
                                <label for="inputPais">Cuadrilla a cargo:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-building"></i>
                                  </div>
                                  <select class="form-control" name="cuadrilla" id="cuadrilla">
                                    <?php
                                    $sql = ("SELECT * FROM cuadrilla");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                      echo '<option value="' . $valores['id_personal'] . '">' . $valores['Alias'] . '</option>';
                                    }
                                    ?>
                                  </select>
                                </div>

                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputActividad">Fecha de inicio</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-briefcase"></i>
                                  </div>
                                  <input type="date" class="form-control" name="inicio" id="inicio">
                                </div>

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
                      <th>Nombre</th>
                      <th>Rut</th>
                      <th>Email</th>
                      <th>Teléfono</th>
                      <th>Región</th>
                      <th>Ciudad</th>
                      <th>Actividad</th>
                      <th>Ejecutivo</th>
                      <th>Acciones</th>
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
                      include 'editarmodalcliente.php';
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