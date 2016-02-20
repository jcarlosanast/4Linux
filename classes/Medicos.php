<?php
class Medicos{

	public $dadosDoPaciente;

	public function obtemFicha($dadosPaciente = null){
		return $this->dadosDoPaciente = $dadosDoPaciente;
	}

	public function lerDadosPasciente(){
		return $this->dadosDoPaciente;
	}

}