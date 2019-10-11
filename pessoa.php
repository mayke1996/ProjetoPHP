<?php
class Pessoa implements JsonSerializable{

	private $altura;
	private $idade;
	private $peso;

	public function getPeso(){
		return $this->peso;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function getAltura(){
		return $this->altura;
	}

	public function setPeso($peso){
		$this->peso = $peso;
	}

	public function setIdade($idade){
		$this->idade = $idade;
	}

	public function setAltura($idade){
		$this->altura = $altura;
	}

	public function __CONSTRUCT($peso,$altura,$idade){
		$this->peso = $peso;
		$this->idade = $idade;
		$this->altura = $altura;
	}

	public function __toString(){
		$string =
			"Peso: ".$this->peso."<br>".
			"Altura: ".$this->altura."<br>".
			"Idade: ".$this->idade."<br>";
		return $string;
	}

	public function Jsonserialize(){
		return [
				"Idade" => $this->idade,
				"Altura" => $this->altura,
				"Peso" => $this->peso
		];
	}

}

?>