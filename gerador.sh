#!/bin/bash

# Opção para limpar o diretório "gerado/"
if [ "$1" == "-1" ]; then
	cd gerado/
	if [ ! -z "`ls`" ]; then
		rm ./*
	fi
	if [ -d ".git" ]; then
		rm -rf .git
	fi
	exit;
fi

# Tantas vezes quanto passado por linha de comando
for counter in $(seq 1 $1); do
	# Assegurar que o índice existe
	if [ ! -f "gerado/indice.txt" ]; then
		echo 0 > gerado/indice.txt;
	fi

	# Atualizar o índice
	lido=`cat gerado/indice.txt`;
	x=$(($lido+1))
	echo $x > gerado/indice.txt;
	
	# Gerar um arquivo de código-fonte
	./gerador.php > gerado/gerado.$x.php;
	
	# Commitar
	cd gerado
	if [ ! -d ".git" ]; then
		git init
	fi
	git add gerado.$x.php indice.txt
	git commit -m "Adicionado gerado.$x.php"
	cd .. 
done
