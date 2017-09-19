<?php 
class Produtos{

	private $id;
	private $siteCasalId;
	private $subcategoriaId;
	private $nome;
	private $descricao;
	private $valor;
	private $cotas;
	private $foto;
	private $fotoThumb;
	private $fotoHash;


	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function getSiteCasalId() {
		return $this->siteCasalId;
	}
	public function setSiteCasalId($siteCasalId) {
		$this->siteCasalId = $siteCasalId;
	}
	public function getSubcategoriaId() {
		return $this->subcategoriaId;
	}
	public function setSubcategoriaId($subcategoriaId) {
		$this->subcategoriaId = $subcategoriaId;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getDescricao() {
		return $this->descricao;
	}
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}
	public function getValor() {
		return $this->valor;
	}
	public function setValor($valor) {
		$this->valor = $valor;
	}
	public function getCotas() {
		return $this->cotas;
	}
	public function setCotas($cotas) {
		$this->cotas = $cotas;
	}
	public function getFoto() {
		return $this->foto;
	}
	public function setFoto($foto) {
		$this->foto = $foto;
	}
	public function getFotoThumb() {
		return $this->fotoThumb;
	}
	public function setFotoThumb($fotoThumb) {
		$this->fotoThumb = $fotoThumb;
	}
	public function getFotoHash() {
		return $this->fotoHash;
	}
	public function setFotoHash($fotoHash) {
		$this->fotoHash = $fotoHash;
	}

}