<?php 
class Sites_casais{

	private $id;
	private $usuarioId;
	private $subdominio;
	private $spotify;
	private $bgsound1;
	private $bgsound2;
	private $bgsound3;
	private $bgsound4;
	private $bgsound5;
	private $bgsound6;
	private $criado;
	private $modificado;


	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function getUsuarioId() {
		return $this->usuarioId;
	}
	public function setUsuarioId($usuarioId) {
		$this->usuarioId = $usuarioId;
	}
	public function getSubdominio() {
		return $this->subdominio;
	}
	public function setSubdominio($subdominio) {
		$this->subdominio = $subdominio;
	}
	public function getSpotify() {
		return $this->spotify;
	}
	public function setSpotify($spotify) {
		$this->spotify = $spotify;
	}
	public function getBgsound1() {
		return $this->bgsound1;
	}
	public function setBgsound1($bgsound1) {
		$this->bgsound1 = $bgsound1;
	}
	public function getBgsound2() {
		return $this->bgsound2;
	}
	public function setBgsound2($bgsound2) {
		$this->bgsound2 = $bgsound2;
	}
	public function getBgsound3() {
		return $this->bgsound3;
	}
	public function setBgsound3($bgsound3) {
		$this->bgsound3 = $bgsound3;
	}
	public function getBgsound4() {
		return $this->bgsound4;
	}
	public function setBgsound4($bgsound4) {
		$this->bgsound4 = $bgsound4;
	}
	public function getBgsound5() {
		return $this->bgsound5;
	}
	public function setBgsound5($bgsound5) {
		$this->bgsound5 = $bgsound5;
	}
	public function getBgsound6() {
		return $this->bgsound6;
	}
	public function setBgsound6($bgsound6) {
		$this->bgsound6 = $bgsound6;
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