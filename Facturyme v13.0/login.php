<?php
require("conexion.php");
session_start();
// Check if the user is already logged in, then redirect them to the dashboard or protected page
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: Perfil.php');
    exit();
}
// Verificar si se envió el formulario de inicio de sesión
if (isset($_POST['submit'])) {
    // Obtener los valores ingresados por el usuario
    $cuentaRFC = $_POST['cuentaRFC'];
    $contrasena = $_POST['contraseña'];
    $_SESSION['RFC'] = $cuentaRFC; 

    // Verificar las credenciales en la base de datos
    $stmt = $conexion->prepare("SELECT * FROM Usuarios WHERE RFC = :rfc AND contraseña = :contrasena");
    $stmt->bindParam(':rfc', $cuentaRFC);
    $stmt->bindParam(':contrasena', $contrasena);
    $stmt->execute();

    // Verificar si se encontró un usuario con las credenciales ingresadas
    if ($stmt->rowCount() > 0) {
        // Iniciar sesión para el usuario
        $_SESSION['loggedin'] = true;
        $_SESSION['usuario'] = $cuentaRFC;

        // Redirigir a la página deseada
        header('Location: Perfil.php');
        exit();
    } else {
        // Las credenciales son inválidas, mostrar un mensaje de error o redirigir a una página de error
        echo "Credenciales inválidas. Por favor, verifica tus datos e intenta nuevamente.";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facturyme</title>
    <link rel="shortcut icon" href="imagenes/logoRedondo.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cuentaRFC = "<?php echo isset($cuentaRFC) ? htmlspecialchars($cuentaRFC) : ''; ?>";
            var cuentaRFCInput = document.querySelector('input[name="cuentaRFC"]');
            cuentaRFCInput.value = cuentaRFC;
        });
    </script>
</head>

<body class="textoFacturyme cuerpoMorado">
    <div class="border-bottom">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4  container">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none ">
                <img src="imagenes/logomorado.png" alt="Logo Facturyme" height="71px" width="201px">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 textoEncabezado mb-md-0" id="textoEncabezado">
                <li><a href="index.php" class="nav-link px-2 link-light">Inicio</a></li>
                <li><a href="FAQ.php" class="nav-link px-2 link-light">FAQs</a></li>
                <li><a href="https://www.sat.gob.mx/home" class="nav-link px-2 link-light" target="_blank">SAT</a>
                </li>
            </ul>


            <div class="col-md-3 text-end">
                <a href="login.php"><button type="button" class="btn btn-primary colorFacturyme"
                        id="botonEncabezado">Regístrate</button></a>
            </div>
        </header>
    </div>
    <div class="Titulo contenidoInicioIzquierdo">
        <h1><strong>Iniciar Sesión</strong> </h1>
    </div>
    <div class="intro">
        <p class="textoFacturyme">Se necesita el inicio de sesión <br> para poder acceder a tus facturas recientes <br>y
            obtener su
            información.</p>
    </div>
    <div class="firstcontainer">
        <form class="firstinput" method="POST" action="login.php">
            <div>
                <input type="text" name="cuentaRFC" placeholder="Cuenta o RFC">
            </div>
            <input type="password" name="contraseña" placeholder="Contraseña">
            <div style="text-align: center;">
                <button type="submit" name="submit" class="botonLogin">Iniciar Sesión</button>
            </div>
        </form>
    </div>
    <div class="bottomcontainer">
        <a href="FAQ.php" class="link-light"><strong>¿Problemas iniciando sesión? <br> ¡Haz click aquí!
            </strong></a><br><br>
        <a href="dashboardUsuario.php" class="link-light"><strong>¿No tienes una cuenta? <br> ¡Únete hoy a Facturyme!
            </strong></a>
    </div>
    
</body>

</html>