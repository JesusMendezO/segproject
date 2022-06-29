<?php
require('../../recursos/PDF/fpdf.php');
include('../../Conexion/conexion.php');
$id = $_GET['id'];

$pdf = new FPDF();
$pdf->AliasNbPages();

$sql = "SELECT * FROM contrato where id_contrato  ='$id'";
$resultado = mysqli_query($conn, $sql);

while ($filas = mysqli_fetch_array($resultado)) {
    $rut = $filas['id_cliente'];
    $sql2 = "SELECT * FROM cliente WHERE Rut=$rut";
    $resultado2 = mysqli_query($conn, $sql2);
    $Cliente = mysqli_fetch_array($resultado2);

    $servicio = $filas['listservicio'];

    if ($servicio == 8) {
        $tiposervicio = $filas['listservicioV'];
        $sql3 = "SELECT * FROM listaservicioelectronica WHERE id_electronica=$tiposervicio";
        $resultado3 = mysqli_query($conn, $sql3);
        $servicelect = mysqli_fetch_array($resultado3);
    }


    $pdf->AddPage();
    //Header
    // Logo
    $pdf->Image('../../recursos/imagene/logo.png', 10, 8, 33);
    $pdf->SetDrawColor(239, 239, 239);
    $pdf->Image('../../recursos/imagene/NFPA.png', 180, 8, 12);
    // Arial bold 15
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->Ln(10);
    $pdf->Cell(180, 10, utf8_decode('Acta de Entrega'), 0, 0, 'C');
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'B', 13);
    $pdf->Cell(180, 10, utf8_decode('Mantención - ' . $servicelect['Nombre']), 0, 0, 'C');
    $pdf->Ln(15);
    $pdf->SetFont('Arial', '', 10);
    $miFecha = gmmktime(12, 0, 0, 1, 15, 2089);
    setlocale(LC_ALL, "spanish");
    $pdf->Cell(100, 10, utf8_decode('En Santiago de Chile, ' . strftime("%A %d de %B del %Y") . ', '), 0, 0, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(10, 10, utf8_decode('SEGPROJECT'), 0, 0, "C");
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(80, 10, utf8_decode('representada por Jonathan Opazo, hace'), 0, 0, "C");
    $pdf->ln(5);
    $pdf->Cell(95, 10, utf8_decode('entrega de la mantención del ' . $servicelect['Nombre'] . ' a Don '), 0, 0, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(-3, 10, utf8_decode($Cliente['Representante']), 0, 0, "C");
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(60, 10, utf8_decode('quién en representación de '), 0, 0, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(-2, 10, utf8_decode($Cliente['Nombre']), 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(30, 10, utf8_decode('recibe el'), 0, 0, 'C');
    $pdf->ln(5);
    $pdf->Cell(68, 10, utf8_decode('informe según el siguiente detalle: '), 0, 0, 'C');
}







$pdf->Output();
