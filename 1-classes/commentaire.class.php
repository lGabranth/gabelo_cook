<?php 

class commentaire extends config{
	public $commentaire;
	public $id_recette;
	public $pseudo;
	public $date_crea;

	function __construct(){
		parent::construct();
		$this->commentaire = "";
		$this->id_recette  = 0;
		$this->pseudo      = "";
		$this->date_crea   = date('Y-m-d H:i:s');
	}
}