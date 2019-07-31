#!/bin/bash

# Definir arg1 (operador ternário)
[ -z "$1" ] && arg1=0 || arg1=$1

# Opção para limpar o diretório "repoTeste/"
if [ "$arg1" == "0" ]; then
	
	if [ -d "repoTeste/" ]; then
		printf "Limpando \'repoTeste/\'...\t"
		rm -rf repoTeste/
		echo Limpo!
	fi
	
	exit;
	
fi

# Preparativos
	[ -d "repoTeste/" ]\
		|| mkdir repoTeste

	cd repoTeste/

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
	php gerarFragmento.php >> repoTeste/programaQualquer.php;
	cd repoTeste/

	# Atualizar o índice
	x=$(($indice + $counter -1))
	echo $(($x+1)) > indice.txt;
	
	# Commitar
	git add programaQualquer.php indice.txt
	git commit -m "Gerada $xª versão"
done

echo
