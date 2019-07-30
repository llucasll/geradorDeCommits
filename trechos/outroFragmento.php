<?php
    echo <<<'PHP'
<?php 
	/* Fragmento 
PHP
	. $x . <<<'PHP'
 */
	echo PHP_EOL."Executando fragmento 
PHP
	. $x . <<<'PHP'
...".PHP_EOL;
	
	$i++;
	$j++;
		
	testar($i, $j);
?>"
PHP
    ;


/*
PHP
	. $x . <<<'PHP'
*/

    
<?php
    echo <<<PHP
<?php 
	/* Fragmento $x */
	echo PHP_EOL."Executando fragmento $x...".PHP_EOL;
	
	\$i++;
	\$j++;
		
	testar(\$i, \$j);
?>"
PHP
    ;

// .PHP_EOL

