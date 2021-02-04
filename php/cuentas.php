<?php

session_start();

include('../database/conexion_base.php');

$nombre = $_SESSION['nombre'];
$apellidos = $_SESSION['apellidos'];
$area_trabajo = $_SESSION['area_trabajo'];
$password_acceso = md5($_SESSION['password_acceso']);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../frameworks/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../frameworks/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Roboto+Condensed&family=Roboto+Slab&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Oswald:wght@600&family=Roboto+Condensed&family=Roboto+Slab&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/sistema-principal.css">
    <link rel="stylesheet" href="../css/consultar_incidentes.css">
    <title>Tú cuenta</title>
</head>
<body>

<div class="collapse contenedor-header-menu" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white">Sistema de Incidentes</h5>
            <div class="contenedor-menu">
                <a href="../php/sistema-principal.php" class="menu-navegacion">Inicio</a>
                <a href="../php/cuentas.php" class="menu-navegacion">Tú cuenta</a>
                <a href="../php/administrar_incidentes_totales.php" class="menu-navegacion">Incidentes totales</a>
                <a href="../php/cerrar_sesion.php" class="menu-navegacion">Cerrar Sesión</a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid btn-ham">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        Menú</button>
    </div>
</nav>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Área de trabjo</th>
      <th scope="col">Passoword</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $nombre; ?></td>
      <td><?php echo $apellidos; ?></td>
      <td><?php echo $area_trabajo; ?></td>
      <td><?php echo $password_acceso; ?></td>
    </tr>
  </tbody>
</table>


    <script src="../frameworks/popper.min.js"></script>
    <script src="../frameworks/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/46805a4884.js" crossorigin="anonymous"></script>
</body>
</html>
