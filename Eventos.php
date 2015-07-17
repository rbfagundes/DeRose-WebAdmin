<?php
class Eventos {
	private $id;
	private $nome;
	
	
	public function setNome($nome) {
		$this->nome = $nome;
	}
	
	public function getNome() {
		return $this->nome;
    }
}
?>
