<?php


//date_default_timezone_set('America/Argentina/Catamarca');





$fechadesde=$_GET['fecha_desde'];
$fechahasta=$_GET['fecha_hasta'];


//Funciones para formatear fecha para visualizacion o para guardar en sql.

$newDate1 = date('Y/m/d', strtotime(str_replace('-', '/', $fechadesde)));

$newDate2 = date('Y/m/d', strtotime(str_replace('-', '/', $fechahasta)));


$fecha1=  $newDate1;

$fecha2=  $newDate2;



//------------------------------------------------------------------------

$mysqli = new mysqli("localhost", "root", "", "rentascf");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}


// consultadejemplo= "SELECT * FROM rm_sucursales_mov WHERE fecha_tramite BETWEEN '2018/04/20' AND '2018/04/28'";

$consulta3 = "SELECT * FROM rm_sucursales_mov  WHERE fecha_tramite  BETWEEN  '$fechadesde' AND '$fechahasta' ";


//Funciona sola

$resultado = $mysqli->query($consulta3);



require '../vistas/vista_suc_tramites_mov_fecha.html';









?>