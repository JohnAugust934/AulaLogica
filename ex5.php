<?php

interface IVeiculo {
	function Corre();
}

class Veiculo {
	private $nome;
	private $motor;
	private $cor;

	function setnome ($nome) {
		$this->nome = $nome;
	}

	function getnome () {
		return $this->nome;
	}

	function setmotor ($motor) {
		$this->motor = $motor;
	}

	function getmotor () {
		return $this->motor;
	}

	function setcor ($cor) {
		$this->cor = $cor;
	}

	function getcor () {
		return $this->cor;
	}
}

class Carro extends Veiculo implements IVeiculo {
	private $marca;

	function __construct($marca) {
		$this->marca = $marca;
	}

	function Corre() {
		echo "Correndo!\n";
	}
}

class Moto extends Veiculo implements IVeiculo {
	private $marcadamoto;

	function __construct($marcadamoto) {
		$this->marcadamoto = $marcadamoto;
	}

	function Corre() {
		echo "Correndo!\n";
	}
}

$play = array();
$play[0] = new Carro("Honda");
$play[0]->setnome ("Civic");
$play[0]->setmotor("2.0");
$play[0]->setcor("Prata");

$play[1] = new Moto("Harley");
$play[1]->setnome ("Harley");
$play[1]->setmotor("2.0");
$play[1]->setcor("Preto");

?>
