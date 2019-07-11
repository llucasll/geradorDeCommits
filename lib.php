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
		
		if(empty($x)){
			$file = "base.php";
			$path = $raiz . "/" . $file;
		}
		else{
			$file = "gerado.$x.php";
			$path = $raiz . "/gerado/" . $file;
		}
		
		echo "Executar $file:\t";
		require "$path";
	}
	
?>
