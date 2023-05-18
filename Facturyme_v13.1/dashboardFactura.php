<?php
session_start();

// Check if the user is not logged in, then redirect them to the login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}

require("conexion.php");
$archivo = 'login.php'; // Reemplaza 'ruta/del/archivo.txt' con la ubicación y nombre de tu archivo

// Leer el valor del archivo de texto

// generamos la consulta sql
$sql = "SELECT * FROM usuarios WHERE RFC = :usuario";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':usuario', $_SESSION["usuario"]);
$stmt->execute();
$usuario = $stmt->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturación</title>
    <link rel="shortcut icon" href="imagenes/logoRedondo.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="textoFacturyme fondoFactura">
    <div class="border-bottom">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 container">
            <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none ">
                <img src="imagenes/logo.PNG" alt="Logo Facturyme">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 textoEncabezado mb-md-0" id="textoEncabezado">
                <li><a href="index.html" class="nav-link px-2 link-dark">Inicio</a></li>
                <li><a href="FAQ.html" class="nav-link px-2 link-dark">FAQs</a></li>
                <li><a href="https://www.sat.gob.mx/home" class="nav-link px-2 link-dark" target="_blank">SAT</a></li>
                <li><a href="quienesSomos.php" class="nav-link px-2 link-dark">Quiénes somos</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="login.php"><button type="button" class="btn btn-primary colorFacturyme"
                        id="botonEncabezado">Regístrate/Perfil</button></a>
            </div>
        </header>
    </div>

    <main>
        <div class="container">
            <h1 class="text-center">Facturación</h1>

            <form action="guardarFactura.php" method="Post">
                <div class="form-group">
                    <label for="rfc">RFC:</label>
                    <input type="text" class="form-control" id="rfc" name="rfc" value="<?php echo $usuario->RFC; ?>"
                        required>
                </div>

                <div class="form-group">
                    <label for="rfc">RFC Destinatario:</label>
                    <input type="text" class="form-control" id="rfc2" name="rfc2" value=""
                        required>
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre o Razón Social:</label>
                    <input type="text" class="form-control" id="RazonSocial" name="RazonSocial"
                        value="<?php echo $usuario->Razon_Social; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre o Razón Social Destinatario:</label>
                    <input type="text" class="form-control" id="RazonSocial2" name="RazonSocial2" value="" required>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion"
                        value="<?php echo $usuario->direccion_fiscal; ?>" required>
                </div>

                <div class="form-group">
                    <label for="TipoPersona">Tipo de Persona:</label>
                    <input type="text" class="form-control" id="TipodePersona" name="TipodePersona"
                        value="<?php echo $usuario->Tipo_Persona; ?>" required>
                </div>

                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                </div>


                <div class="form-group">
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" class="form-control" id="monto" name="monto" required>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                </div>

                <div class="form-group">
                    <label for="precio_unitario">Uso de CFDI:</label>
                    <input type="number" class="form-control" id="usoCFDI" name="usoCFDI" required>
                </div>

                <div class="form-group">
                    <label for="descuento">Descuento:</label>
                    <input type="number" class="form-control" id="descuento" name="descuento">
                </div>

                <div class="form-group">
                    <label for="impuestos">Impuestos:</label>
                    <select class="form-control" id="impuestos" name="impuestos">
                        <option value="IVA">IVA</option>
                        <option value="ISR">ISR</option>
                        <option value="IEPS">IEPS</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="monto_impuestos">Monto de Impuestos:</label>
                    <input type="number" class="form-control" id="monto_impuestos" name="monto_impuestos" required>
                </div>

                <button type="submit" class="btn btn-primary" action="guardarFactura.php">Facturar</button>
            </form>
        </div>
    </main>
    
</body>

</html>