#!/bin/bash

cd gerado/

# Opção para limpar o diretório "gerado/"
if [ "$1" == "-1" ]; then
	
	printf "Limpando \'gerado/\'...\t"
	
	if [ ! -z "`ls`" ]; then
		rm ./*
	fi
	if [ -d ".git" ]; then
		rm -rf .git
	fi
	
	echo Limpo!
	
	exit;
fi

# Preparativos
	echo

	# Inicializar repo
	[[ ! -d ".git" ]] && git init

	# Definir arg1 (operador ternário)
	[[ -z "$1" ]] && arg1=0 || arg1=$1

	# Assegurar que o índice existe
	[[ ! -f "indice.txt" ]] && echo 1 > indice.txt
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
	echo $(($indice + $counter)) > indice.txt;
	
	# Commitar
	git add gerado.php indice.txt
	git commit -m "Gerada $xª versão"
	
done

echo
