<?php
class Eventos {
	public $id;
	public $nome;
	

	public function setId($id) {
		$this->id = $id;
	}
	
	public function getId($id) {
		return $this->id;
	}
	
	
	public function setNome($nome) {
		$this->nome = $nome;
	}
	
	public function getNome() {
		return $this->nome;
    }
}
?>
