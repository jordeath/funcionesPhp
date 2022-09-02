<?php 
//BORRAR CARPETA Y SU CONTENIDO
function funBorrarCarperta($rutaCarpeta){

  	foreach(glob($rutaCarpeta . "/*") as $archivoCarpeta){             
    	if (is_dir($archivoCarpeta)){
      		funBorrarCarperta($archivoCarpeta);
    	} else {
    		unlink($archivoCarpeta);
    	}
  	}

	rmdir($rutaCarpeta);
}