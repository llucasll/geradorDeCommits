#!/usr/bin/php
<?php
	
	$raiz = getcwd();
	
	require "lib.php";
	extract( executar(getIndice(), 0, 0) );
	
	if($i === $j)
		echo "\e[1m\e[32mSucesso:\t\t".'$i = ' . $i . ";\n\t\t\t".'$j = ' . $j . ".\n\n\e[0m";
	else
		echo "\e[1m\e[91mTemos um erro:\t\t".'$i = ' . $i . ";\n\t\t\t".'$j = ' . $j . ".\n\n\e[0m";
	
?>
