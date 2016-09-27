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
	
	// Constructeur de la classe Client
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
	// Accesseurs et Mutateurs TVA
  	function getIDClient(){
  		return $this->$idclient;
  	}
	
	function setIDClient($var){
  		return $this->idclient=$var;
  	}
	
	// Accesseurs et Mutateurs TVA
  	function getNomClient(){
  		return $this->$nomclient;
  	}
	
	function setNomClient($var){
  		return $this->nomclient=$var;
  	}
	
	// Accesseurs et Mutateurs TVA
  	function getPrenomClient(){
  		return $this->$prenomclient;
  	}
  	function getAdresseClient(){
  		return $this->$adresseclient;
  	}
	
	
  	function getCPClient(){
  		return $this->$cpclient;
  	}
  	function getVilleClient(){
  		return $this->$villeclient;
  	}
	
	// Accesseurs et Mutateurs TVA
  	function getTelephoneClient(){
  		return $this->$telephoneclient;
  	}
  	function getMailClient(){
  		return $this->$mailclient;
  	}
	
  	// Accesseurs et Mutateurs TVA
  	
  	
	
	// Accesseurs et Mutateurs TVA
  	function setPrenomClient($var){
  		return $this->prenomclient=$var;
  	}
  	function setAdresseClient($var){
  		return $this->adresseclient=$var;
  	}
	
	// Accesseurs et Mutateurs TVA
  	function setCPClient($var) {
  		return $this->$cpclient=$var;
  	}
  	function setVilleClient($var){
  		return $this->$villeclient=$var;
  	}
	
	// Accesseurs et Mutateurs TVA
  	function setTelephoneClient($var){
  		return $this->$telephoneclient=$var;
  	}
  	function setMailClient($var){
  		return $this->$mailclient=$var;
  	}
}
?> 
