#!/usr/bin/php
<?php
	
	$raiz = getcwd();
	
	require "lib.php";
	extract( executar(getIndice(), 0, 0) );
	
	if($i === $j)
		echo "Sucesso:\t\t".'$i = ' . $i . ";\n\t\t\t".'$j = ' . $j . ".\n";
	else
		echo 'Temos um erro: $i = ' . $i . '; e $j = ' . $j . ".\n";
	
?>
