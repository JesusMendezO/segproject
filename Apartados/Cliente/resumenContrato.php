
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Resumen Contrato </title>
    <!-- <script type="text/javascript" src="./js/submenu2.js"></script> -->
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
    <link rel="stylesheet" href="../Cliente/css/accordion.css">
</head>


<div class="bs-stepper-content">
                                            <form onSubmit="return false" id="formulario" method="POST" action="../../PhP/INSERTAR_contrato.php">
                                                <div id="test">
                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                        Datos de Emisión:</h4>
                                                    <div class="form-row">

                                                        <div class="form-group col-md-3">
                                                            <label for="inputNombreCliente">Folio del Contrato:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text" style="background-color:red">Folio:
                                                                </div>
                                                                                  
                                                                <input type="text" class="form-control" name="folio" id="folio" value="1" disabled >
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
                                                                <input type="text" class="form-control" name="folio" id="Prueba" value="1" disabled >
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">RUT:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fa fa-id-card" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="RUT" id="RUT" placeholder="98.123.567-K" value="98.123.567-K" disabled >
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class=" form-row">

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">Dirección:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="inputCiudad">Comuna:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-building"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="comuna" id="comuna" placeholder="Edificio el bosque..." disabled >
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail">Correo Electrónico:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-envelope"></i>
                                                                </div>
                                                                <input type="email" class="form-control" name="Email" id="Email" placeholder="contacto@dominio.com" disabled>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">Persona de Contacto:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="address" id="address" placeholder="Nombre y Apellido..." disabled>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">Tipo de Contrato:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-newspaper"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="address" id="address" placeholder="contrato." disabled>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <br>

                                                

                                                </div>
                                                <div id="" >

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
                                                                    <div id="productos" class="item2">
                                                                    <div class="lista-producto float-clear" style="clear:both;">
 <ul class="list-group item3">
   <li class="list-group-item">
<div class="float-left"><input type="checkbox" name="item_index[]" style="margin-left: -35px;" /></div>
<!-- <div class="float-left"><input class="form-control" type="text" name="pro_nombre[]"/></div> -->
<div class="float-left">



<input type="text" class="form-control" name="address" id="address" placeholder="contrato." disabled>




                            </div>




                            
                            <div class="float-left">
                            <input type="text" class="form-control" name="address" id="address" placeholder="contrato." disabled>
                            </div>
                            <div class="float-left">
                            <input type="text" class="form-control" name="address" id="address" placeholder="contrato." disabled>
                            </div>
                            <div class="float-left">
                            <input type="text" class="form-control" name="address" id="address" placeholder="contrato." disabled>
                            </div>
<div class="float-left"><input class="form-control border border-primary" type="date" name="pro_precio[]" id="date" style="width:135px; margin-left: 30px;" /></div>
<div class="float-left">
<input type="text" class="form-control" name="address" id="address" placeholder="contrato." disabled>
                            </div>
<!-- <div class="float-left"><input class="form-control" type="text" name="pro_precio[]" style="width:110px;" /></div> -->
<div class="float-left"><input class="form-control border border-primary" type="text" name="pro_cantidad[]" id="cantidad" style="width:100px; margin-left: 30px; margin-right: -20px;"/></div>




	</li>
 </ul> 



 
</div>

                                                                      
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

                                       

                                                </div>

                                                <div id="">

                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #6B90F3;">
                                                        Detalle de Equipos Encontrados Según el Contrato de Mantención</h4>

                                                    <br>
                                                    

                                                    <div id="seccion" class="it" >
    
  
                                                       

                                                             





                                                            
                                                        </div>
  
                                                    
                                                        <a href="../Cliente/contrato.php"><button type="button" id="enviar" class="btn btn-primary mt-5">Aceptar</button></a>
                                                </div>
                                            </form>
                                        </div>