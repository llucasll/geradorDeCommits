#!/usr/bin/php
<?php
	require "lib.php";
	
	echo "<?php";
	
	$x = getIndice();
?>

	echo "Executando <?=$x?>...\n";
	
	$i++;
	$j++;
	
	$x--;
	executar($x, $i, $j);
?>
