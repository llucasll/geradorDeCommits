<?php
	
	function getIndice(){
		$lido = @file("gerado/indice.txt");
		
		$val = 0;
		if(!empty($lido))
			$val = (int) $lido[0];
		
		return $val;
	}
	
	function executar($x, $i, $j){
		global $raiz;
		
		if(!empty($x)){
			$file = "gerado.$x.php";
		
			echo "Executar $file:\t";
			require $raiz . "/gerado/" . $file;
			return array("i"=>$i, "j"=>$j);
		}
		return array("i"=>0, "j"=>0);
	}
	
	function testar($arr){
		extract($arr);
		
		if($i === $j)
			echo "\e[1m\e[32mSucesso:\t\t".'$i = ' . $i . ";\n\t\t\t".'$j = ' . $j . ".\n\n\e[0m";
		else
			echo "\e[1m\e[91mTemos um erro:\t\t".'$i = ' . $i . ";\n\t\t\t".'$j = ' . $j . ".\n\n\e[0m";
	}
	
?>
