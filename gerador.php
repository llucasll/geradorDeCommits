<?php
	
	function getIndice(){
		$lido = @file("gerado/indice.txt");
		
		$val = 0;
		if(!empty($lido))
			$val = (int) $lido[0];
		
		return $val;
	}
	
	$x = getIndice();
	
?>

Executando fragmento <?=$x?>...
<?= "<?php" ?>
	
	//Fragmento <?=$x?>
	
	$i++;
	$j++;
		
	testar($i, $j);
	
?>
