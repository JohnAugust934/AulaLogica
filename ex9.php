<?php

$p = array();
$cad = array();
$i = 0;

for ($i = 0; $i < 8; $i++) {
	$p["nome"] = "";
	$p["sexo"] = "";
	$p["idade"] = 0;
	$p = array();
}

for ($i = 0; $i < 8; $i++) {
	echo "Digite o Nome: ";
	$cad[$i]["nome"] = readline();

	echo "Digite o Sexo: ";
	$cad[$i]["sexo"] = readline();

	echo "Digite a Idade: ";
	$cad[$i]["idade"] = readline();
}


for ($i = 0; $i < 8; $i++) {

	if (($i % 2) == 0) {
		echo "Nome: ";
		echo $cad[$i]["nome"];

		echo "Sexo: ";
		echo $cad[$i]["sexo"];

		echo "Idade: ";
		echo $cad[$i]["idade"];
	}
}
?>
