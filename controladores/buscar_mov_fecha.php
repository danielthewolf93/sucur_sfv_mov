<?php


date_default_timezone_set('America/Argentina/Catamarca');





$fechadesde=$_GET['fecha_desde'];
$fechahasta=$_GET['fecha_hasta'];




$fecha1=date( "Y-m-d", strtotime( $fechadesde ) );

$fecha2=date( "Y-m-d", strtotime( $fechahasta ) );




$mysqli = new mysqli("localhost", "root", "", "rentascf");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}



$consulta3 = "SELECT * FROM rm_sucursales_mov  WHERE fecha_tramite  BETWEEN $fecha1 AND $fecha2 ";


//Funciona sola

$resultado = $mysqli->query($consulta3);



require '../vistas/vista_suc_tramites_mov_fecha.html';









?>