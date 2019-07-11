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
			return require $raiz . "/gerado/" . $file;
		}
		return array("i"=>0, "j"=>0);
	}
	
?>
