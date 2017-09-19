<?php 
class Subcategorias{

	private $id;
	private $categoriaId;
	private $nome;
	private $ref;


	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function getCategoriaId() {
		return $this->categoriaId;
	}
	public function setCategoriaId($categoriaId) {
		$this->categoriaId = $categoriaId;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getRef() {
		return $this->ref;
	}
	public function setRef($ref) {
		$this->ref = $ref;
	}

}