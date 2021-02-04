<?php

$alertas = array('Información incompleta','Acceso denegado','Acceso Concedido');
if(empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['area_trabajo']) || empty($_POST['password_acceso'])) {
    echo $alertas[0];
}else{
    include('../database/conexion_base.php');
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $area_trabajo = $_POST['area_trabajo'];
    $password_acceso = $_POST['password_acceso'];
    $buscador_acceso = mysqli_query($conexion, "SELECT * FROM empleados_acceso WHERE nombre = '$nombre' AND apellidos = '$apellidos'
    AND area_trabajo = '$area_trabajo' AND password_acceso = '$password_acceso'");
    $resultado_buscador = mysqli_num_rows($buscador_acceso);
    if($resultado_buscador > 0) {
        $arreglo_buscador = mysqli_fetch_array($buscador_acceso);
        session_start();
        $_SESSION['active'] = true;
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['apellidos'] = $_POST['apellidos'];
        $_SESSION['area_trabajo'] = $_POST['area_trabajo'];
        $_SESSION['password_acceso'] = $_POST['password_acceso'];
        header('location:../php/sistema-principal.php');
    }else{
        header('location:../public/error_log.html');
    }
}

?>