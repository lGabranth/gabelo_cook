<?php 

class categorie extends config{
	public $nom;

	function __construct(){
		parent::__construct();
		$this->nom = "";
	}
}