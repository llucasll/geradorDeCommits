<?php
	
	/*
		function tamanho($arq){
			if (!file_exists($arq))
				return 0;
			return filesize($arq);
		}
		
		if (tamanho("gerado/gerado.php") > 0)
	*/
	
	if (!file_exists("gerado/gerado.php") || filesize("gerado/gerado.php")==0)
		echo PHP_EOL . "<?php" . PHP_EOL;
		
	$x = (int) file_get_contents("gerado/indice.txt"); //file_put_contents($file, $x);
	
	if ($x > 0)
	
?>

	/* Fragmento <?= $x ?> */
	echo "Executando fragmento <?= $x ?>...".PHP_EOL;
	$i++;
	$j++;
	validar($i, $j);
