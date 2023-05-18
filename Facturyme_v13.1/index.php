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

<body class="textoFacturyme fondoInicio" >
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
        <a href="login.php"><button type="button" class="btn btn-primary colorFacturyme" id="botonEncabezado">Regístrate/Perfil</button></a>
      </div>
    </header>
  </div>



  <main>
    <div id="contenidoInicioIzquierdo">
      <h1 class="negro"><strong>TUS FACTURAS, </strong></h1>
      <h1 class="negro"><strong> ¡AHORA MUCHO MÁS FÁCILES!</strong></h1>
      <p> Facturas de forma legítima por el Servicio de Administración Tributaria (SAT)</p>
      <?php
    // Verificar si se ha pasado la variable cuentaRFC a través de la URL
    if (isset($_GET['cuentaRFC'])) {
        $cuentaRFC = $_GET['cuentaRFC'];
        echo '<p>Cuenta o RFC: ' . $cuentaRFC . '</p>';
    }
    ?>
      <div class="mb-5">
        <a href="login.php" class="btn btn-primary btn-lg px-4 colorFacturyme">¡EMPIEZA AHORA!</a>
      </div>
    </div>
  </main>
</body>