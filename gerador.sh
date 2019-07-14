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

# Tantas vezes quanto passado por linha de comando
for counter in $(seq 1 $1); do
	# Inicializar repo
	if [ ! -d ".git" ]; then
		git init
	fi
	
	# Status
	echo
	echo Gerando commit $counter/$1
	echo
	
	# Assegurar que o índice existe
	if [ ! -f "indice.txt" ]; then
		echo 0 > indice.txt;
	fi

	# Atualizar o índice
	lido=`cat indice.txt`;
	x=$(($lido+1))
	echo $x > indice.txt;
	
	# Append no código-fonte
	cd ..
	php gerador.php >> gerado/gerado.php;
	cd gerado/
	
	# Commitar
	git add gerado.php indice.txt
	git commit -m "Gerada $xª versão"
done

cd .. 
