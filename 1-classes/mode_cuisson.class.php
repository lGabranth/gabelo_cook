<?php 

class mode_cuisson extends config{
	public $nom;

	function __construct(){
		parent::__construct();
		$this->nom = "";
	}
}