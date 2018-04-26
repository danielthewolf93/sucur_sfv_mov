<?php 





#Lista de Sucursales.




//------------------------------------------
$mysqli = new mysqli("localhost", "root", "", "rentascf");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}



//$prueba_cont=2037462532;


$consulta3 = "SELECT id_sucursal_mov,fecha_tramite,cuit_contrib,id_sucursal,tramite_tipo FROM rm_sucursales_mov  ";





//Funciona sola
$resultado = $mysqli->query($consulta3);






require 'vistas/vista_suc_tramites_mov.html';









?>