<?php
class Eventos {
	public $id;
	public $nome;
	
	
	public function setNome($nome) {
		$this->nome = $nome;
	}
	
	public function getNome() {
		return $this->nome;
    }
}
?>
