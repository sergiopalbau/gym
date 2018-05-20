<?php
class Actividad {

	private $id_act;
	private $nombre;
	private $cuota;
	private $cantidad;
	private $restriccion;
	private $horario;
	
	function __construct($id_act, $nombre, $cuota, $cantidad, $restriccion) {
		$this->id_act = $id_act;
		$this->nombre = $nombre;
		$this->cuota = $cuota;
		$this->cantidad = $cantidad;
		$this->restriccion = $restriccion;
	}
	

	function getId_act() {
		return $this->id_act;
	}

	function getNombre() {
		return $this->nombre;
	}

	function getCuota() {
		return $this->cuota;
	}

	function getCantidad() {
		return $this->cantidad;
	}

	function getRestriccion() {
		return $this->restriccion;
	}

	function getHorario(){
		return $this->horario;

	}

	function setId_act($id_act) {
		$this->id_act = $id_act;
	}

	function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	function setCuota($cuota) {
		$this->cuota = $cuota;
	}

	function setCantidad($cantidad) {
		$this->cantidad = $cantidad;
	}

	function setRestriccion($restriccion) {
		$this->restriccion = $restriccion;
	}

	function setHorario($horario) {
		$this->horario = $horario;
	}

}



