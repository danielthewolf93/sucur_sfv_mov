<?php 





//Guiahttps://blog.reaccionestudio.com/busqueda-instantanea-con-jquery-y-php/

      $buscar = $_POST['b'];
       
      if(!empty($buscar)) {
            buscar($buscar);
      }
       
      function buscar($b) {

      		$mysqli = new mysqli("localhost", "root", "", "rentascf");

			/* comprobar la conexión */
			if (mysqli_connect_errno()) {
			    printf("Falló la conexión: %s\n", mysqli_connect_error());
			    exit();
				}



				$query = "SELECT * FROM rm_padron6 WHERE pad_ente=20 AND pad_cuit_index LIKE '%".$b."%'";
				$result = $mysqli->query($query);

				$numfilas = $result->num_rows;



				if($numfilas == 0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
		            }else{	
		            	//echo "Sugerencias"."</br>";
		                  foreach ($result as $res ) {
		                  	
		                        $nombre = $res['pad_nombre_propietario'];
		                        $id = $res['pad_cuit_index'];
		                         
		                        echo $nombre."/ "."<b>".$id."</b>"."<br /><br />";    
		                  									}
		            	}
		  }





?>