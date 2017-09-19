<?php 
class Vendas{

	private $id;
	private $produtoId;
	private $quantidade;
	private $cotas;
	private $total;
	private $criado;


	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function getProdutoId() {
		return $this->produtoId;
	}
	public function setProdutoId($produtoId) {
		$this->produtoId = $produtoId;
	}
	public function getQuantidade() {
		return $this->quantidade;
	}
	public function setQuantidade($quantidade) {
		$this->quantidade = $quantidade;
	}
	public function getCotas() {
		return $this->cotas;
	}
	public function setCotas($cotas) {
		$this->cotas = $cotas;
	}
	public function getTotal() {
		return $this->total;
	}
	public function setTotal($total) {
		$this->total = $total;
	}
	public function getCriado() {
		return $this->criado;
	}
	public function setCriado($criado) {
		$this->criado = $criado;
	}

}