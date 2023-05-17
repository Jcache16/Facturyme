<?php
// Conectamos a la base de datos 
$servidor="localhost";
$basededatos="Facturyme";
$usuario="root";
$contrasena="Lopez3543@";

// vamos a conectarnos a la base de datos
try{
    $conexion=new PDO("mysql:host=$servidor;dbname=$basededatos", $usuario, $contrasena);
    //echo "Conexión realizada";
}catch(PDOException $error){
    echo "Error generado: ". $error->getMessage();
}

//localhost/(carpeta)/conexion.php
?>