<?php 
class Slide_apresentacao{

	private $id;
	private $siteCasalId;
	private $descricao;
	private $duracao;
	private $bgsound;
	private $fontFamily;
	private $fontSize;
	private $fontColor;


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
	public function getDescricao() {
		return $this->descricao;
	}
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}
	public function getDuracao() {
		return $this->duracao;
	}
	public function setDuracao($duracao) {
		$this->duracao = $duracao;
	}
	public function getBgsound() {
		return $this->bgsound;
	}
	public function setBgsound($bgsound) {
		$this->bgsound = $bgsound;
	}
	public function getFontFamily() {
		return $this->fontFamily;
	}
	public function setFontFamily($fontFamily) {
		$this->fontFamily = $fontFamily;
	}
	public function getFontSize() {
		return $this->fontSize;
	}
	public function setFontSize($fontSize) {
		$this->fontSize = $fontSize;
	}
	public function getFontColor() {
		return $this->fontColor;
	}
	public function setFontColor($fontColor) {
		$this->fontColor = $fontColor;
	}

}