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
echo $_SESSION["usuario"];
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

<body class="textoFacturyme fondoInicio">
  
  <div class="border-bottom">
    <header
      class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4  container">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none ">
        <img src="imagenes/logo.PNG" alt="Logo Facturyme">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 textoEncabezado mb-md-0" id="textoEncabezado">
        <li><a href="index.php" class="nav-link px-2 link-dark">Inicio</a></li>
        <li><a href="FAQ.php" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="https://www.sat.gob.mx/home" class="nav-link px-2 link-dark" target="_blank">SAT</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a href="login.php"><button type="button" class="btn btn-primary colorFacturyme"
            id="botonEncabezado"> Regístrate </button></a>
      </div>
          <body>
            
          </body>
    </header>
  </div>
  <p>

  </p>
  <div>
    <button type="button" class="btn btn-primary colorboton" id="colorboton">
      <p>¡Bienvenido Usuario! ¿Qué vamos a hacer hoy?</p>
    </button>
  </div>
  <main>
    <p>


    </p>
    
    <div> 

      <div style="border: 2px solid #b701ff; border-radius: 10px; padding: 5px; float: right; transform: scale(0.90); background-color: rgb(212, 212, 212); color:black">
        <h2 style="text-align: center;">Facturas y registros recientes</h2>
        
        <table style="margin: 0 auto; border-collapse: collapse;">
            
          <tr style="border: 1px solid #b701ff;">
            <th style="border: 1px solid #b701ff; padding: 5px; color:black">RFC</th>
            <th style="border: 1px solid #b701ff; padding: 5px; color:black">Nombre</th>
            <th style="border: 1px solid #b701ff; padding: 5px; color:black">Razón social</th>
          </tr>
          <tr style="border: 1px solid #b701ff;">
            <td style="border: 1px solid #b701ff; padding: 5px;"><input type="text" value="<?php echo $usuario->RFC; ?>"></td>
            <td style="border: 1px solid #b701ff; padding: 5px;"><input type="text" value="<?php echo $usuario->nombre; ?> "></td>
            <td style="border: 1px solid #b701ff; padding: 5px;"><input type="text" value="<?php echo $usuario->Razon_Social; ?>"></td> 
            
        
            
          </tr>
          <tr style="border: 1px solid #b701ff;">
            <td style="border: 1px solid #b701ff; padding: 5px;"><input type="text" value=""></td>
            <td style="border: 1px solid #b701ff; padding: 5px;"><input type="text" value=""></td>
            <td style="border: 1px solid #b701ff; padding: 5px;"><input type="text" value=""></td>
            
            
          </tr>
          <tr style="border: 1px solid #b701ff;">
            <td style="border: 1px solid #b701ff; padding: 5px;"><input type="text" value=""></td>
            <td style="border: 1px solid #b701ff; padding: 5px;"><input type="text" value=""></td>
            <td style="border: 1px solid #b701ff; padding: 5px;"><input type="text" value=""></td>
            
          </tr>
          <tr style="border: 1px solid #b701ff;">
            <td style="border: 1px solid #b701ff; padding: 5px;"><input type="text" value=""></td>
            <td style="border: 1px solid #b701ff; padding: 5px;"><input type="text" value=""></td>
            <td style="border: 1px solid #b701ff; padding: 5px;"><input type="text" value=""></td>
            
          </tr>
        </table>
      </div>

      <div class="recizquierdo" style="width: 15%; height: 70%; border: 5px; padding: 10px; border: 2px solid #b701ff; border-radius: 10px; padding: 10px; position: top; 	position: relative;
      left: 10px;">
        <a href="dashboardFactura.php"><button type="button" class="btn btn-primary colorbotonrexiz" id="colorbotonrexiz">FACTURAR</button></a>
        <p></p>
        <a href="dashboardReal.php"><button type="button" class="btn btn-primary colorbotonrexiz" id="colorbotonrexiz" >DASHBOARD</button></a>
        <p></p>
        <div>
            <a href="logout.php" style="display: inline-block; padding: 10px 5px; font-size: 125%; background-color: red; color: white; text-decoration: none; border-radius: 10px;">Cerrar Sesión</a>
        </div>
    </div>
    
      
      
    </main>
</body>
</html>