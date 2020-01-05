<?php 

class utilisateur extends config {
	public $login;
	public $password;

	function __construct(){
		parent::__construct();
		$this->login 		= "";
		$this->password = "";
	}
}