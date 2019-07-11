<?php
	
	require "lib.php";
	$x = getIndice();
	
	echo "<?php";
?>

	echo "Executando <?=$x?>...\n";
	
	$x--;
	extract( executar($x, $i, $j) );
	
	$i++;
	$j++;
?>
