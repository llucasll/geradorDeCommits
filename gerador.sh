#!/bin/bash

if [ "$1" == "-1" ]; then
	rm gerado/*
	exit;
fi

for counter in $(seq 1 $1); do
	if [ ! -f "gerado/indice.txt" ]; then
		echo 0 > gerado/indice.txt;
	fi

	lido=`cat gerado/indice.txt`;
	x=$(($lido+1))
	echo $x > gerado/indice.txt;
	
	./gerador.php > gerado/gerado.$x.php;
done
