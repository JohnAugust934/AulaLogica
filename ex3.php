<?php

class Carro {
	private $nome;
	private $motor;
	private $cor;

	function Carro ($nome, $motor, $cor) {
		$this->nome;
		$this->motor;
		$this->cor;
	}

	function quem() {
		echo "{$this->nome}\n{$this->motor}\n{$this->cor}\n";
	}

	function andar() {
		echo "Andando!\n";
	}

	function parar() {
		echo "Parando!\n";
	}
}

$b = new Carro ("Astra", "2.0", "Prata");
$b-> quem();
$b-> andar();
$b-> parar();
?>
