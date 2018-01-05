<?php
/**
 * Created by PhpStorm.
 * User: praktikant
 * Date: 05.01.2018
 * Time: 11:39
 */

$name = trim(strip_tags($_POST["name"]));
$email = trim(strip_tags($_POST["email"]));
$message = strip_tags($_POST["message"]);
$ipaddress = $_SERVER['REMOTE_ADDR'];

require('lib/fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40, 10, $name);
$pdf->Output();

?>