<?php
	
	if (!file_exists("repoTeste/programaQualquer.php") || filesize("repoTeste/programaQualquer.php")==0)
		echo PHP_EOL . "<?php" . PHP_EOL;
		
	$x = (int) file_get_contents("repoTeste/indice.txt");
	
	if ($x > 0)
	
?>

	/* Fragmento <?= $x ?> */
	echo "Executando fragmento <?= $x ?>...".PHP_EOL;
	$i++;
	$j++;
	validar($i, $j);
