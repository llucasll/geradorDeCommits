#!/usr/bin/php
<?php
	
	if (!file_exists("repoTeste/programaQualquer.php") || filesize("repoTeste/programaQualquer.php")==0)
		echo PHP_EOL . "<?php" . PHP_EOL;
	
	$x = file_exists("repoTeste/indice.txt")?
		(int) file_get_contents("repoTeste/indice.txt")
		: 1;
	
	if ($x > 0)
	
?>

	/* Fragmento <?= $x ?> */
	echo "Executando fragmento <?= $x ?>...".PHP_EOL;
	$i++;
	$j++;
	validar($i, $j);
