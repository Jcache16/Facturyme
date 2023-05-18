<?php
session_start();

// Check if the user is not logged in, then redirect them to the login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
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
  <link rel="stylesheet" href=" css/style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

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
    <div class="container mt-4">
        <h1 class="text-center mb-4">DASHBOARD</h1>
        <div class="row">
          <div class="col-sm-6 col-md-3 mb-4">
            <a href="#" class="btn btn-primary btn-lg btn-block">
              <i class="fas fa-file-invoice"></i> Facturar
            </a>
          </div>
          <div class="col-sm-6 col-md-3 mb-4">
            <a href="#" class="btn btn-success btn-lg btn-block">
              <i class="fas fa-building"></i> Empresas
            </a>
          </div>
          <div class="col-sm-6 col-md-3 mb-4">
            <a href="#" class="btn btn-warning btn-lg btn-block">
              <i class="fas fa-file-alt"></i> Facturas Previas
            </a>
          </div>
          <div class="col-sm-6 col-md-3 mb-4">
            <a href="#" class="btn btn-info btn-lg btn-block">
              <i class="fas fa-users"></i> Usuarios
            </a>
          </div>
        </div>
      </div>                    
</main>