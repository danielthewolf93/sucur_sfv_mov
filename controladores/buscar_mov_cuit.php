<?php


$cuit=$_GET['cuit_cont'];

$mysqli = new mysqli("localhost", "root", "", "rentascf");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}



$consulta3 = "SELECT * FROM rm_sucursales_mov WHERE cuit_contrib=$cuit ";


//Funciona sola
$resultado = $mysqli->query($consulta3);



require '../vistas/vista_suc_tramites_mov_cuit.html';










?>