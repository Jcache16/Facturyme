<?php
session_start();
require("conexion.php");
// Check if the user is not logged in, then redirect them to the login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}
$sql = "SELECT * FROM usuarios WHERE RFC = :usuario";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':usuario', $_SESSION["usuario"]);
$stmt->execute();
$usuario = $stmt->fetch(PDO::FETCH_OBJ);
//echo $_SESSION["usuario"];
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

   
</head>

<body class="textoFacturyme fondoRegistro">
  
  <div class="border-bottom">
    <header
      class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4  container">
      <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none ">
        <img src="imagenes/logo.PNG" alt="Logo Facturyme">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 textoEncabezado mb-md-0" id="textoEncabezado">
        <li><a href="index.php" class="nav-link px-2 link-dark">Inicio</a></li>
        <li><a href="FAQ.php" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="https://www.sat.gob.mx/home" class="nav-link px-2 link-dark" target="_blank">SAT</a></li>
        <li><a href="quienesSomos.php" class="nav-link px-2 link-dark">Quiénes somos</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a href="login.php"><button type="button" class="btn btn-primary colorFacturyme"
            id="botonEncabezado"> Regístrate/Perfil </button></a>
      </div>
          <body>
            
          </body>
    </header>
  </div>
  <p>

  </p>
  <div>
    <button type="button" class="btn btn-primary colorboton" id="colorboton">
    <p>¡Bienvenido <?php echo $_SESSION["usuario"]; ?>! ¿Qué vamos a hacer hoy?</p>
    </button>
  </div>
  <main>
    <p>


    </p>
    
    <div> 
      <!--marco de la tabla-->
      <div id="FAQexploitsP" class="textoFacturyme cuadrocomparativo" style="background-color: rgb(184, 58, 223);">
        <h2 class="textotitulocuadro texto-blanco">Facturas y registros recientes</h2>
        
       <!--esto le da forma al cuadro--> <table id="FAQexploitsP" class="estructuracuadro">
            
          <tr class="borde">
            <th class="membrete texto-blanco">RFC</th>
            <th class="membrete texto-blanco">Nombre</th>
            <th class="membrete texto-blanco">Razón social</th>
          </tr>
          <tr class="borde">
            <td class="relleno"><input type="text" value="<?php echo $usuario->RFC; ?>"></td>
            <td class="relleno"><input type="text" value="<?php echo $usuario->nombre; ?>"></td>
            <td class="relleno"><input type="text" value="<?php echo $usuario->Razon_Social; ?>"></td> 
        
            
          </tr>
          <tr class="borde">
            <td class="relleno"><input type="text" value=""></td>
            <td class="relleno"><input type="text" value=""></td>
            <td class="relleno"><input type="text" value=""></td> 
            
            
          </tr>
          <tr class="borde">
            <td class="relleno"><input type="text" value=""></td>
            <td class="relleno"><input type="text" value=""></td>
            <td class="relleno"><input type="text" value=""></td> 
            
          </tr>
          <tr class="borde">
            <td class="relleno"><input type="text" value=""></td>
            <td class="relleno"><input type="text" value=""></td>
            <td class="relleno"><input type="text" value=""></td> 
            
          </tr>
        </table>
      </div>

      <div  class="recizquierdo recmarcoizquierdo" style="width: 11%; height: 40%; border: 5px; padding: 10px; border: 10px solid #b701ff; border-radius: 10px; padding: 10px; position: top; 	position: relative;">
        <a href="dashboardFactura.php"><button type="button" class="btn btn-primary colorbotonrexiz" id="colorbotonrexiz">FACTURAR</button></a>
        <p></p>
        <a href="dashboardReal.php"><button type="button" class="btn btn-primary colorbotonrexiz" id="colorbotonrexiz" >DASHBOARD</button></a>
        <p></p>
        <div>
            <a href="logout.php"><button type="button" class="btn btn-primary colorbotonrexizrojo" id="colorbotonrexizrojo" style="background-color: #e61c1c;">Cerrar Sesión</button></a>
        </div>
    </div>
    
      
      
    </main>
</body>
</html>