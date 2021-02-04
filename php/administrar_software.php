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
    <link rel="stylesheet" href="../css/consultar_incidentes.css?new">
    <title>Admnistrar Software</title>
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



    <script src="../frameworks/popper.min.js"></script>
    <script src="../frameworks/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/46805a4884.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>

<?php

$conexion_base = include('../database/conexion_base.php');
if($conexion_base == true) {
    $consulta_incidentes = "SELECT * FROM area_software";
    $mostrar_incidentes = mysqli_query($conexion,$consulta_incidentes);
    if($mostrar_incidentes == true) {
        while($row = $mostrar_incidentes->fetch_array()) {
            $id_incidente = $row['id_incidente'];
            $proyecto_afectado = $row['proyecto_afectado'];
            $fecha_incidente = $row['fecha_incidente'];
            $areas_afectadas = $row['areas_afectadas'];
            $tipo_incidente = $row['tipo_incidente'];
            $descripcion_incidente = $row['descripcion_incidente'];
            ?>
                <form action="../php/administrar_software.php" method="POST">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th-g" scope="col">ID</th>
                            <th class="th-g" scope="col">P.A</th>
                            <th class="th-g" scope="col">Fecha</th>
                            <th class="th-g" scope="col">Áreas afectadas</th>
                            <th class="th-g" scope="col">Tipo</th>
                            <th class="th-g" scope="col">Descripción</th>
                            <th class="eliminar" scope="col">Borrar</th>
                        </tr>
                    </thead>
                <tbody>
                <tr>
                    <th scope="row"><?php echo $id_incidente; ?></th>
                    <th><?php echo $proyecto_afectado; ?></th>
                    <th><?php echo $fecha_incidente; ?></th>
                    <th><?php echo $areas_afectadas ?></th>
                    <th><?php echo $tipo_incidente ?></th>
                    <th><?php echo $descripcion_incidente ?></th>
                    <th class="eliminar"><button name="eliminar"><i class="fas fa-times"></i></button></th>
                </tr>
            </tbody>
        </table>
    </form>


            <?php
        }
    }
    
}

if(isset($_POST['eliminar'])) {
    $query_delete = "DELETE FROM area_software WHERE id_incidente = '$id_incidente'";
    $resultado = mysqli_query($conexion,$query_delete);
    if($resultado == true) {
        echo "<script>alert('Incidente eliminado')</script>";
    }else{
        echo "<script>alert('Fallo en el sistema')</script>";
    }
}
if(isset($_POST['eliminar'])) {
    $query_delete = "DELETE FROM incidentes_totales WHERE id_incidente = '$id_incidente'";
    $resultado = mysqli_query($conexion,$query_delete);
    if($resultado == true) {
        //echo "<script>alert('Incidente eliminado')</script>";
    }else{
        echo "<script>alert('Fallo en el sistema')</script>";
    }
}
