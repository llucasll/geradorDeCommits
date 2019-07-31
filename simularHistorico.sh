#!/bin/bash

# Definir arg1 (operador ternário)
[ -z "$1" ] && arg1=0 || arg1=$1

# Opção para limpar o diretório "gerado/"
if [ "$arg1" == "0" ]; then
	
	printf "Limpando \'gerado/\'...\t"
	[[ ! -z "`ls gerado/`" ]] && rm -rf gerado/
	echo Limpo!
	
	exit;
	
fi

# Preparativos
	[ -d "gerado/" ]\
		|| mkdir gerado

	cd gerado/

	[ -d ".git" ]\
		|| git init # Inicializar repo
	[ -f "indice.txt" ]\
		|| echo 1 > indice.txt # Assegurar que o índice existe

	indice=`cat indice.txt`;

# Tantas vezes quanto passado por linha de comando
for counter in $(seq 1 $arg1); do
	# Status
	echo
	echo Gerando commit $counter/$arg1
	echo
	
	# Append no código-fonte
	cd ..
	php gerador.php >> gerado/gerado.php;
	cd gerado/

	# Atualizar o índice
	x=$(($indice + $counter -1))
	echo $(($x+1)) > indice.txt;
	
	# Commitar
	git add gerado.php indice.txt
	git commit -m "Gerada $xª versão"
done

echo
