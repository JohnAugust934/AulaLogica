<?php

class Aluno {
	private $nome;
	private $idade;
	private $sexo;
	private $email;
	private $telefone;

	function setnome ($nome) {
		$this->nome = $nome;
	}

	function getnome () {
		return $this->nome;
	}

	function setidade ($idade) {
		$this->idade = $idade;
	}

	function getidade () {
		return $this->idade;
	}

	function setsexo ($sexo) {
		$this->sexo = $sexo;
	}

	function getsexo () {
		return $this->sexo;
	}

	function setemail ($email) {
		$this->email = $email;
	}

	function getemail () {
		return $this->email;
	}

	function settelefone ($telefone) {
		$this->telefone = $telefone;
	}

	function gettelefone () {
		return $this->telefone;
	}
}

$play = array();
$play[0] = new Aluno;
$play[0]->setnome ("Gabriel");
$play[0]->setidade("17");
$play[0]->setsexo("Masculino");
$play[0]->setemail("email@hotmail.com");
$play[0]->settelefone("99999-9999");

?>
