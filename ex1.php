<?php

class Pessoa {
	private $nome;
	private $sexo;
	private $idade;

	function Pessoa ($nome, $sexo, $idade) {
		$this->nome;
		$this->sexo;
		$this->idade;
	}

	function quem() {
		echo "{$this->nome}\n{$this->sexo}\n{$this->idade}\n";
	}

	function andar() {
		echo "Andando!\n";
	}

	function pular() {
		echo "Pulando!\n";
	}
}

$b = new Pessoa ("Gabriel", "Masculino", "17");
$b-> quem();
$b-> andar();
$b-> pular();
?>
