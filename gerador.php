<?php
	
	$x = (int) file_get_contents("gerado/indice.txt"); //file_put_contents($file, $x);
	
	if (!file_exists("gerado/gerado.php") || filesize("gerado/gerado.php")==0)
		include "trechos/fragmento-0.php";
	
	if ($x > 0)
		include "trechos/fragmento.php";
	
?>
