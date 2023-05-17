<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Facturyme</title>
  <link rel="shortcut icon" href="imagenes/logoRedondo.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/dashboard.css">
</head>

<body class="textoFacturyme fondoInicio">
  <div class="border-bottom">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4  container">
      <a href="index.html" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none ">
        <img src="imagenes/logo.PNG" alt="Logo Facturyme">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 textoEncabezado mb-md-0" id="textoEncabezado">
        <li><a href="dashboard.php" class="nav-link px-2 link-dark">Dashboard</a></li>
        <li><a href="profile.php" class="nav-link px-2 link-dark">Perfil</a></li>
        <li><a href="invoices.php" class="nav-link px-2 link-dark">Facturas</a></li>
        <li><a href="https://www.sat.gob.mx/home" class="nav-link px-2 link-dark" target="_blank">SAT</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a href="logout.php"><button type="button" class="btn btn-primary colorFacturyme" id="botonEncabezado">Cerrar Sesión</button></a>
      </div>
    </header>
  </div>

  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Resumen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ingresos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gastos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Balance</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Configuración</a>
            </li>
          </ul>
        </div>

        <div class="col-sm-9 col-md-10 main">
          <h1 class="negro">Resumen</h1>
          <p class="lead">Aquí puedes ver un resumen de tu actividad.</p>
          <div class="row
