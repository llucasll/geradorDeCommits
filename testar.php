#!/usr/bin/php
<?php
	
	function testar($i, $j){
	
		// Cores/Estilos
		$verde = "\e[32m";
		$vermelho = "\e[91m";
		$fim = ".\e[0m\n";
		
		if($i === $j)
			echo $verde."Sucesso:\t\t".'$i = ' . $i . ";\n\t\t\t".'$j = ' . $j . $fim;
		else
			echo $vermelho."Temos um erro:\t\t".'$i = ' . $i . ";\n\t\t\t".'$j = ' . $j . $fim;
		
	}
	
	$i = 0;
	$j = 0;
	require "gerado/gerado.php";
	
?>
