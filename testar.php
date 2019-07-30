#!/usr/bin/php
<?php

	// ANSI codes
	define('estilos', [
		"verde" => "\e[32m",
		"vermelho" => "\e[91m",
		"fim" => "\e[0m",
	]);
	
	function result($cor, $msg, $i, $j){
		echo
			estilos[$cor].
			"$msg:		i = $i;".PHP_EOL.
			"			j = $j.".
			estilos["fim"]
		;
	}

	function testar($i, $j){
		if($i === $j)
			result("verde", "Sucesso", $i, $j);
		else
			result("vermelho", "Temos um erro", $i, $j);
	}
	
	if(!file_exists("gerado/gerado.php")){
		echo "Nenhum código foi gerado até o momento.\n";
		die();
	}
	
	$i = 0;
	$j = 0;
	require "gerado/gerado.php";
	
?>
