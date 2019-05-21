<?php

$p = array();
$cad = array();
$i = 0;

$idade = 0;
$indice = 0;

for ($i = 0; $i < 5; $i++) {
	$p["nome"] = "";
	$p["idade"] = 0;
	$p["endereco"] = "";
	$cad[$i] = $p;
	$p = array();
}

for ($i = 0; $i < 5; $i++) {
	echo "Digite o nome do cliente: ";
	$cad[$i]["nome"] = readline();

	echo "Digite a idade do cliente: ";
	$cad[$i]["idade"] = readline();

	echo "Digite o endereco do cliente: ";
	$cad[$i]["endereco"] = readline();

	if ($cad[$i]["idade"] > $idade) {
		$idade = $cad[$i]["idade"];
		$indice = $i;
	}
}

echo " Nome: ";
echo $cad[$indice]["nome"];
echo " Idade: ";
echo $cad[$indice]["idade"];
echo " Endereco: ";
echo $cad[$indice]["endereco"];
echo PHP_EOL;

?>
