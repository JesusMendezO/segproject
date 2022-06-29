<?php
include('../Conexion/conexion.php');

$folio = $_POST['folio'];
$Femision = $_POST['Femision'];
$cliente = $_POST['cliente'];
$Finicio = $_POST['Finicio'];


$tcontrato = $_POST['tcontrato'];

$Email = $_POST['Email'];
//bien
$direccion=$_POST['address'];

$comuna=$_POST['comuna'];

$tinstalacion = $_POST['TipIns'];

$NameInst = $_POST['NomIns'];

$areacontrato = $_POST['AreaCont'];
//bien
$listservicio = $_POST['listservicio'];

$listservicioV = $_POST['listservicioV'];

$cantidadEmpleados =$_POST['CantEmp'];

$TipPer= $_POST['TipPer'];
//bien
$RangoP = $_POST['RangoPer'];

$Fincial = $_POST['DateStart'];

$Observ = $_POST['Observa'];

//bien
$eq_nombre=$_POST['eq_nombre'];

echo $eq_nombre[0];
$eq_codigo=$_POST['eq_codigo'];
$eq_descripcion=$_POST['eq_descripcion'];
$eq_categoria=$_POST['eq_categoria'];
$eq_area=$_POST['eq_area'];
$eq_cantidadreq=$_POST['eq_cantidadreq'];

if ($tinstalacion) {
    $contenedor = 0;
    for ($i = 0; $i < count($tinstalacion); $i++) {
        if ($tinstalacion[$i] != "")
            for ($j = $contenedor; $j < count($listservicio); $j++) {
                if ($listservicio[$j] != "") {
                    $sql = "INSERT INTO contrato (Folio,Femision,id_cliente,Finicio,tcontrato,Email,direccion,comuna,tinstalacion,NameInst,listservicio ,listservicioV,CantidadPersonal,RangoP,
                Fincial, observacion,AreaContrato,TipoPeriodo,eq_nombre,eq_codigo,eq_descripcion,eq_categoria,eq_area,eq_cantidadreq) VALUES ('$folio','$Femision','$cliente','$Finicio','$tcontrato','$Email','$direccion','$comuna','$tinstalacion[$i]',
                        '$NameInst[$i]','$listservicio[$i]','$listservicioV[$i]','$cantidadEmpleados[$j]','$RangoP[$i]','$Fincial[$i]','$Observ[$i]','$areacontrato[$i]','$TipPer[$i]','$eq_nombre[$i]','$eq_codigo[$i]','$eq_descripcion[$i]','$eq_categoria[$i]','$eq_area[$i]','$eq_cantidadreq[$i]')";
                    $resultado = mysqli_query($conn, $sql);
                    $i++;
                }
            }
        $contenedor = $i;
    }
}

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/get_contrato.php');
    die;
}
