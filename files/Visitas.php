<?php 
class Visitas{

	private $id;
	private $siteCasalId;
	private $visitas;


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
	public function getVisitas() {
		return $this->visitas;
	}
	public function setVisitas($visitas) {
		$this->visitas = $visitas;
	}

}