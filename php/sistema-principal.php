<?php

session_start();

$nombre = $_SESSION['nombre'];
$apellidos = $_SESSION['apellidos'];
$area_trabajo = $_SESSION['area_trabajo'];
$password_acceso = $_SESSION['password_acceso'];

include('../database/conexion_base.php');

//CONTAR REGISTROS EN EL AREA DE SOFTWARE//
$incidentes_software = mysqli_query($conexion,"SELECT COUNT(*) FROM area_software");
$row_software = mysqli_fetch_array($incidentes_software);
$resultado_conteo_s = $row_software['COUNT(*)'];

//CONTAR REGISTROS EN EL AREA DE BASE DE DATOS//
$incidentes_database = mysqli_query($conexion,"SELECT COUNT(*) FROM area_database");
$row_db = mysqli_fetch_array($incidentes_database);
$resultado_conteo_db = $row_db['COUNT(*)'];

//CONTAR REGISTROS EN EL AREA DE COMUNICACIONES//
$incidentes_comunicaciones = mysqli_query($conexion,"SELECT COUNT(*) FROM area_comunicaciones");
$row_comunicaciones = mysqli_fetch_array($incidentes_comunicaciones);
$resultado_conteo_c = $row_comunicaciones['COUNT(*)'];

//CONTAR REGISTROS EN EL AREA DE REDES Y ACCESOS//
$incidentes_redes_accesos = mysqli_query($conexion,"SELECT COUNT(*) FROM area_redes_accesos");
$row_redes_accesos = mysqli_fetch_array($incidentes_redes_accesos);
$resultado_contedeo_ra = $row_redes_accesos['COUNT(*)'];

//CONTAR REGISTROS DE TODOS LOS INCIDENTES TOTALES//
$incidentes_totales = mysqli_query($conexion,"SELECT COUNT(*) FROM incidentes_totales");
$row_total = mysqli_fetch_array($incidentes_totales);
$resultado_total = $row_total['COUNT(*)'];

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
    <title>Interfaz de gestión</title>
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

<div class="container-fluid contenedor-titulo">
    <div class="row">
        <div class="col-lg-12">
            <h1>Interfaz principal</h1>
            <h2>Bienvenid@ <?php echo "$nombre" . " " . "$apellidos"   ?></h2>
        </div>
    </div>
</div>
<!--SECCIONES DE ÁREAS PARA REPORTAR INCIDENTES-->

<div class="container contenedor-secciones">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <section class="secciones-globales sec-1">
                <h3>Área de software</h3>
                <i class="fas fa-laptop-code"></i>
                <p>Incidentes en esta área: <?php echo $resultado_conteo_s; ?></p>
                <a href="../public/form-software.html">Hacer un reporte</a>
            </section>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <section class="secciones-globales sec-2">
                <h3>Área de base de datos</h3>
                <i class="fas fa-database"></i>
                <p>Incidentes en esta área: <?php echo $resultado_conteo_db; ?></p>
                <a href="../public/form-databe.html">Hacer un reporte</a>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <section class="secciones-globales sec-3">
                <h3>Área de comunicaciones</h3>
                <i class="fas fa-satellite-dish"></i>
                <p>Incidentes en esta área: <?php echo $resultado_conteo_c; ?></p>
                <a href="../public/form-comunicaciones.html">Hacer un reporte</a>
            </section>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <section class="secciones-globales sec-4">
                <h3>Área de redes y accesos</h3>
                <i class="fas fa-network-wired"></i>
                <p>Incidentes en esta área: <?php echo $resultado_contedeo_ra; ?></p>
                <a href="../public/form-redes-accesos.html">Hacer un reporte</a>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <section class="secciones-globales sec-5">
                <h3>Incidentes totales</h3>
                <i class="fas fa-chart-bar"></i>
                <p>Incidentes totales: <?php echo $resultado_total; ?></p>
                <a href="../php/administrar_incidentes_totales.php">Administrar</a>
            </section>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <section class="secciones-globales sec-6">
                <h3>Guía de ayuda</h3>
                <i class="fas fa-check-circle"></i>
                <p>Tutorioal del sistema</p>
                <a href="../public/ayuda.html">Ver guía</a>
            </section>
        </div>
    </div>
</div>



    <script src="../frameworks/popper.min.js"></script>
    <script src="../frameworks/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/46805a4884.js" crossorigin="anonymous"></script>
</body>
</html>