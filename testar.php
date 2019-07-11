#!/usr/bin/php
<?php
	
	// ANSI codes
	define('estilos', [
		"verde" => "\e[32m",
		"vermelho" => "\e[91m",
		"fim" => "\e[0m",
	]);
	
	function resultado($cor, $msg, $i, $j){
		echo
			estilos[$cor].
			"$msg:		i = $i;".PHP_EOL.
			"			j = $j.".
			estilos["fim"].
			PHP_EOL . PHP_EOL
		;
	}
	
	function validar($i, $j){
		$i === $j?
			resultado("verde", "Sucesso", $i, $j)
		:
			resultado("vermelho", "Temos um erro", $i, $j);
	}
	
	function iniciarTeste(){
		if(!file_exists("repoTeste/programaQualquer.php")){
			echo "Nenhum código foi gerado até o momento." . PHP_EOL;
			die();
		}
		
		$i = 0;
		$j = 0;
		require "repoTeste/programaQualquer.php";
	}
	
	iniciarTeste();
	
?>
