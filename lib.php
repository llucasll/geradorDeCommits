<?php
	/*
	function increment($x){
		if(isset($$i))
			$$x++;
		else
			$$x=1;
	}
	
	function getIndice(){
		try{
			$indice = fopen("indice.txt", "r");
			$val = fread("%d", $indice);
			fclose($indice);
		}
		catch(){
			$val = 0;
		}
		catch(Exception e){
			echo "Atenção! Erro desconhecido ao abrir arquivo!";
			die();
		}
		finally{
			return $val;
		}
	}
	
	*/
	
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
		
		/*
		$file = empty($x)?
			"base.php"
			: "gerado.$x.php";
			
		$path = $raiz;
		$path .= empty($x)?
				"/"
				: "/gerado/"
		$path .= $file;
		
		$path = $raiz . "/";
		if(empty($x))
			$file = "base.php";
		else{
			$file = "gerado.$x.php";
			$path .= "gerado/";
		}
		$path .= $file;
		*/
		
		echo "Executar $file:\t";
		require "$path";
		
		//eval('require "gerado.' . $x . '.php"');
	}
	
?>
