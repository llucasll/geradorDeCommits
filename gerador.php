<?php
	$x = (int) file_get_contents("gerado/indice.txt"); //file_put_contents($file, $x);
	
	if ($x < 2)
		include "trechos/fragmento-0.php";
	
	echo "<?php\n";
	include "trechos/fragmento.php";
	echo "?>\n\n";
?>

