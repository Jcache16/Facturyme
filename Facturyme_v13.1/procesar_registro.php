<?php
// Incluye el archivo de conexión
require('conexion.php');

// Verificamos si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Obtenemos los valores del formulario
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $rfc = $_POST['rfc'];
        $direccion = $_POST['direccion'];
        $razonSocial = $_POST['razon-social'];
        $tipoPersona = $_POST['tipo-persona'];
        $password = $_POST['password'];
        $verificacion = $_POST['pass-v'];

        // Validamos que las contraseñas coincidan
        if ($password !== $verificacion) {
            echo "Las contraseñas no coinciden.";
            return;
        }

        // Insertamos los datos en la tabla Usuarios
        $consulta = $conexion->prepare("INSERT INTO Usuarios (RFC, nombre, apellido, direccion_fiscal, Razon_Social, Tipo_Persona, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $consulta->execute([$rfc, $nombres, $apellidos, $direccion, $razonSocial, $tipoPersona, $password]);
header('location:login.php');
        echo "Registro exitoso!";
    } catch (PDOException $error) {
        echo "Error generado: " . $error->getMessage();
    }
}
?>
