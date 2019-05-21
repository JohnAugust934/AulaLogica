<?php

$p = array();
$cad = array();
$i = 0;

for ($i = 0; $i < 5; $i++) {
	$p["nome"] = "";
	$p["marca"] = "";
	$p["preco"] = 0;
	$cad[$i] = $p;
	$p = array();
}

for ($i = 0; $i < 5; $i++) {
	echo "Digite o nome do produto: ";
	$cad[$i]["nome"] = readline();

	echo "Digite a marca do produto: ";
	$cad[$i]["marca"] = readline();

	echo "Digite o preco do produto: ";
	$cad[$i]["preco"] = readline();
}

for ($i = 0; $i < 5; $i++) {
	echo " Nome: ";
	echo $cad[$i]["nome"];
	echo " Marca: ";
	echo $cad[$i]["marca"];
	echo " Preco: ";
	echo $cad[$i]["preco"];
	echo PHP_EOL;
}
?>
