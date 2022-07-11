<?php
include('../Conexion/conexion.php');

$variables = $_POST['datos'];

///
// $Rut= $_POST['datos'];
// echo json_encode($Rut) 


$folio = $variables[0]['folito'];
$Femision = $variables[0]['femision'];
$cliente = $variables[0]['cliente'];

$Email
    = $variables[0]['email'];
$Pcontacto
    = $variables[0]['contacto'];
$tcontrato =
    $variables[0]['tcontrato'];


$insertar = "INSERT INTO contrato(Folio,Femision,id_cliente,tcontrato,Pcontacto,email) 
VALUES ( '$folio','$Femision','$cliente','$tcontrato','$Pcontacto','$Email')";

$resultado = mysqli_query($conn, $insertar);

$sql = ("SELECT id_contrato FROM contrato WHERE id_cliente='$cliente' AND tcontrato='$tcontrato' AND Femision='$Femision'
AND Folio='$folio'");
$query = $conn->query($sql);
$valores = mysqli_fetch_row($query);






// Insertar lo de arriba primero




// $json = $_POST['datos'];
// $json[$i][$productos];

for ($i = 0; $i < count($variables); $i++) {

    $tinstalacion =  $variables[$i]['instal1'];

    $areacontrato =  $variables[$i]['area'];

    $listservicio =  $variables[$i]['servicio'];

    $listservicioV = $variables[$i]['tipoServ'];

    $pro_precio =  $variables[$i]['date'];
    $TipPer = $variables[$i]['periodo'];
    $pro_cantidad =  $variables[$i]['cantidad'];
    $producto = json_encode($variables[$i]['productos']);
    $insertar = "INSERT INTO datos_servicios(id_contrato,id_instalacion,id_servicio,listaservicio,listservicioV,fecha_inicio,id_periodo,cantidad_tecnicos,Producto)
                                VALUES('$valores[0]','$tinstalacion','$areacontrato','$listservicio','$listservicioV','$pro_precio',
                                '$TipPer','$pro_cantidad','$producto')";
    $resultado = mysqli_query($conn, $insertar);
}



// if ($tinstalacion) {
//     $contenedor = 0;
//     for ($i = 0; $i < count($tinstalacion); $i++) {
//         if ($tinstalacion[$i] != "")
//             for ($j = $contenedor; $j < count($listservicio); $j++) {
//                 if ($listservicio[$j] != "") {
//                     $sql = "INSERT INTO contrato (Folio,Femision,id_cliente,Finicio,tcontrato,Email,direccion,comuna,tinstalacion,NameInst,listservicio ,listservicioV,CantidadPersonal,RangoP,
//                 Fincial, observacion,AreaContrato,TipoPeriodo,eq_nombre,eq_codigo,eq_descripcion,eq_categoria,eq_area,eq_cantidadreq) VALUES ('$folio','$Femision','$cliente','$Finicio','$tcontrato','$Email','$direccion','$comuna','$tinstalacion[$i]',
//                         '$NameInst[$i]','$listservicio[$i]','$listservicioV[$i]','$cantidadEmpleados[$j]','$RangoP[$i]','$Fincial[$i]','$Observ[$i]','$areacontrato[$i]','$TipPer[$i]','$eq_nombre[$i]','$eq_codigo[$i]','$eq_descripcion[$i]','$eq_categoria[$i]','$eq_area[$i]','$eq_cantidadreq[$i]')";
//                     $resultado = mysqli_query($conn, $sql);
//                     $i++;
//                 }
//             }
//         $contenedor = $i;
//     }
// }

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/get_contrato.php');
    die;
} else echo "error";
