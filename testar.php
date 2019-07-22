#!/usr/bin/php
<?php
	function render($cor, $msg, $i, $j){
	
		$estilos = [// ANSI codes
			"verde" => "\e[32m",
			"vermelho" => "\e[91m",
			"fim" => "\e[0m",
		];
		
		echo $estilos[$cor];
		
		include "trechos/renderResult.php";
		
		echo $estilos["fim"];
	}

	function testar($i, $j){
		if($i === $j)
			render("verde", "Sucesso", $i, $j);
		else
			render("vermelho", "Temos um erro", $i, $j);
	}
	
	require "gerado/gerado.php";
?>

