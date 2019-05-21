<?php
$v = 0;
echo "Digite o Valor de v:";
$v = readline ();
if ($v <= 10) {
	echo "Menor ou Igual a 10";
} else if ($v < 20) {
	echo "Menor que 20 e Maior que 10";
} else if ($v < 30) {
	echo "Menor que 30 e Maior ou Igual a 20";
} else if ($v < 40) {
	echo "Menor que 40 e Maior ou Igual a 30";
} else {
	echo "Maior ou Igual a 40";
}
?>

