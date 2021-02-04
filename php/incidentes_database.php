<?php

$alertas = array('Información incompleta','No se pudo registrar tu reporte','Reporte enviado');
if(empty($_POST['fecha_incidente']) || empty($_POST['descripcion_incidente'])){
    //echo $alertas[0];
    header('location:../public/error_send_reporte.html');
}else{
    include('../database/conexion_base.php');
    $proyecto_afectado = $_POST['proyecto_afectado'];
    $fecha_incidente = $_POST['fecha_incidente'];
    $areas_afectadas = $_POST['areas_afectadas'];
    $tipo_incidente = $_POST['tipo_incidente'];
    $descripcion_incidente = $_POST['descripcion_incidente'];

    $registro_incidentes = "INSERT INTO area_database (proyecto_afectado,fecha_incidente,areas_afectadas,tipo_incidente,descripcion_incidente)
    VALUES ('$proyecto_afectado','$fecha_incidente','$areas_afectadas','$tipo_incidente','$descripcion_incidente')";
    $resultado_registro = mysqli_query($conexion,$registro_incidentes);
    if($resultado_registro == true) {
        //echo $alertas[2];
        header('location:../public/reporte_success.html');
    }else{
        //echo $alertas[1];
        header('location:../public/error_send_reporte.html');
    }
}

$registro_incidentes_totales = "INSERT INTO incidentes_totales (proyecto_afectado,fecha_incidente,areas_afectadas,tipo_incidente,descripcion_incidente)
    VALUES ('$proyecto_afectado','$fecha_incidente','$areas_afectadas','$tipo_incidente','$descripcion_incidente')";
    $resultado_registro_total = mysqli_query($conexion,$registro_incidentes_totales);
    if($resultado_registro_total == true) {
        //echo $alertas[2];
        header('location:../public/reporte_success.html');
    }else{
        //echo $alertas[1];
        header('location:../public/error_send_reporte.html');
    }

if(isset($_POST['btn-administrar'])) {
    header('location:../php/administrar_database.php');
}

?>