<?php
class Client {
	private $idclient;
	private $nomclient;
	private $prenomclient;
	private $adresseclient;
	private $cpclient;
	private $villeclient;
	private $telephoneclient;
	private $mailclient;
	// Constructeur 
	function __construct($idclient, $nomclient, $prenomclient, $adresseclient, $cpclient, $villeclient, $telephoneclient, $mailclient) {
		$this->idclient=$idclient;
		$this->nomclient=$nomclient;
		$this->prenomclient=$prenomclient;
		$this->adresseclient=$adresseclient;
		$this->cpclient=$cpclient;
		$this->villeclient=$villeclient;
		$this->telephoneclient=$telephoneclient;
		$this->MailClient=$mailclient;
	}
	//Accesseurs (Get) recuperer les données
  	function getidclient(){
  		return $this->$idclient;
  	}
  	function getnomclient(){
  		return $this->$nomclient;
  	}
  	function getprenomclient(){
  		return $this->$prenomclient;
  	}
  	function getadresseclient(){
  		return $this->$adresseclient;
  	}
  	function getcpclient(){
  		return $this->$cpclient;
  	}
  	function getvilleclient(){
  		return $this->$villeclient;
  	}
  	function gettelephoneclient(){
  		return $this->$telephoneclient;
  	}
  	function getmailclient(){
  		return $this->$mailclient;
  	}
  	// Muttateurs Set modifier les données
  	function setidclient($var){
  		return $this->idclient=$var;
  	}
  	function setnomclient($var){
  		return $this->nomclient=$var;
  	}
  	function setprenomclient($var){
  		return $this->prenomclient=$var;
  	}
  	function setadresseclient($var){
  		return $this->adresseclient=$var;
  	}
  	function setcpclient($var) {
  		return $this->$cpclient=$var;
  	}
  	function setvilleclient($var){
  		return $this->$villeclient=$var;
  	}
  	function settelephoneclient($var){
  		return $this->$telephoneclient=$var;
  	}
  	function setmailclient($var){
  		return $this->$mailclient=$var;
  	}
}
?> 
