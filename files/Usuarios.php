<?php 
class Usuarios{

	private $id;
	private $cidadeId;
	private $email;
	private $password;
	private $nome;
	private $endereco;
	private $complemento;
	private $bairro;
	private $cep;
	private $telefone;
	private $criado;
	private $modificado;


	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function getCidadeId() {
		return $this->cidadeId;
	}
	public function setCidadeId($cidadeId) {
		$this->cidadeId = $cidadeId;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password) {
		$this->password = $password;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getEndereco() {
		return $this->endereco;
	}
	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}
	public function getComplemento() {
		return $this->complemento;
	}
	public function setComplemento($complemento) {
		$this->complemento = $complemento;
	}
	public function getBairro() {
		return $this->bairro;
	}
	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}
	public function getCep() {
		return $this->cep;
	}
	public function setCep($cep) {
		$this->cep = $cep;
	}
	public function getTelefone() {
		return $this->telefone;
	}
	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}
	public function getCriado() {
		return $this->criado;
	}
	public function setCriado($criado) {
		$this->criado = $criado;
	}
	public function getModificado() {
		return $this->modificado;
	}
	public function setModificado($modificado) {
		$this->modificado = $modificado;
	}

}