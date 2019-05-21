<?php

class Livro {
	private $nome;
	private $genero;
	private $ano;

	function Livro ($nome, $genero, $ano) {
		$this->nome;
		$this->genero;
		$this->ano;
	}

	function quem() {
		echo "{$this->nome}\n{$this->genero}\n{$this->ano}\n";
	}

	function abrir() {
		echo "Abrindo!\n";
	}

	function fechar() {
		echo "Fechando!\n";
	}
}

$b = new Livro ("A volta dos que não foram", "Ação", "2010");
$b-> quem();
$b-> abrir();
$b-> fechar();
?>
