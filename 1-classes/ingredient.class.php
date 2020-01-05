<?php 

class ingredient extends config{
	public $nom;

	function __construct(){
		parent::__construct();
		$this->nom = "";
	}
}