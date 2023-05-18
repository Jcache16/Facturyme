<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro de usuario</title>
  <link rel="shortcut icon" href="imagenes/logoRedondo.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href=" css/style.css">
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
        <a href="login.php"><button type="button" class="btn btn-primary colorFacturyme" id="botonEncabezado">Regístrate/Perfil</button></a>
      </div>
    </header>
  </div>


  <main>
    <div class="container">
      <h1 class="mt-4">Registro de usuario</h1>
      <hr>
      <form action="procesar_registro.php" method="POST">
        <div class="form-group">
          <label for="nombres" class="label-fondo">Nombres:</label>
          <input type="text" class="form-control" id="nombres" name="nombres" required>
        </div>
        <div class="form-group">
          <label for="apellidos" class="label-fondo">Apellidos:</label>
          <input type="text" class="form-control" id="apellidos" name="apellidos" required>
        </div>
        <div class="form-group">
          <label for="rfc" class="label-fondo">RFC:</label>
          <input type="text" class="form-control" id="rfc" name="rfc" required>
        </div>
        <div class="form-group">
          <label for="direccion" class="label-fondo">Dirección fiscal:</label>
          <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>
        <div class="form-group">
          <label for="razon-social" class="label-fondo">Razón social:</label>
          <input type="text" class="form-control" id="razon-social" name="razon-social" required>
        </div>
        <div class="form-group">
          <label for="tipo-persona" class="label-fondo">Tipo de persona:</label>
          <input type="text" class="form-control" id="tipo-persona" name="tipo-persona" required>
        </div>
        <div class="form-group">
          <label for="password" class="label-fondo">Contraseña:</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
          <label for="pass-v" class="label-fondo">Verificación de contraseña:</label>
          <input type="password" class="form-control" id="pass-v" name="pass-v" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </form>
    </div>
  </main>

</body>

</html>

