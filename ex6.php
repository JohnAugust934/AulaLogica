<?php

$p = array();
$cad = array();
$i = 0;

for ($i = 0; $i < 5; $i++) {
	$p["nome"] = "";
	$p["genero"] = "";
	$p["ano"] = 0;
	$cad[$i] = $p;
	$p = array();
}

for ($i = 0; $i < 5; $i++) {
	echo "Digite o nome do jogo: ";
	$cad[$i]["nome"] = readline();

	echo "Digite o genero do jogo: ";
	$cad[$i]["genero"] = readline();

	echo "Digite o ano do jogo: ";
	$cad[$i]["ano"] = readline();
}


for ($i = 0; $i < 5; $i++) {
	echo " Nome: ";
	echo $cad[$i]["nome"];
	echo " Genero: ";
	echo $cad[$i]["genero"];
	echo " Ano: ";
	echo $cad[$i]["ano"];
	echo PHP_EOL;
}
?>
