<?php
require("conexion.php");

$ELRFC = $_POST["rfc"];
$ElRFC2= $_POST["rfc2"];
$Larazonsocial = $_POST["RazonSocial"];
$Larazonsocial2 = $_POST["RazonSocial2"];
$elmonto = $_POST["monto"];
$lafecha = $_POST["fecha"];
$elusoCFDI = $_POST["usoCFDI"];
$ladescripcion = $_POST["descripcion"];
$num_factura = rand(10000, 99999);

$sql = $conexion->prepare("INSERT INTO Facturas (RFC_usuario, RFC_destinatario, RSocial_usuario, RSocial_destinatario, monto, fecha, usoCFDI, descripcion, num_factura) 
VALUES (:rfc, :rfc2, :RazonSocial, :RazonSocial2, :monto, :fecha, :usoCFDI, :descripcion, :num_factura)");

$sql->bindParam(":rfc", $ELRFC);
$sql->bindParam(":rfc2", $ElRFC2);
$sql->bindParam(":RazonSocial", $Larazonsocial);
$sql->bindParam(":RazonSocial2", $Larazonsocial2);
$sql->bindParam(":monto", $elmonto);
$sql->bindParam(":fecha", $lafecha);
$sql->bindParam(":usoCFDI", $elusoCFDI);
$sql->bindParam(":descripcion", $ladescripcion);
$sql->bindParam(":num_factura", $num_factura);

$sql->execute();
header('Location:Perfil.php');
?>
