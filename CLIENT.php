<?php

class Client {
	private $IDClient;
	private $NomClient;
	private $PrenomClient;
	private $AdresseClient;
	private $CPClient;
	private $VilleClient;
	private $TelephoneClient;
	private $MailClient;

	// Constructeur 

	function __construct($ID, $Nom, $Prenom, $Adresse, $CP, $Ville, $Telephone, $Mail) {
		$this->IDClient=$ID;
		$this->NomClient=$Nom;
		$this->PrenomClient=$Prenom;
		$this->AdresseClient=$Adresse;
		$this->CPClient=$CP;
		$this->VilleClient=$Ville;
		$this->TelephoneClient=$Telephone;
		$this->MailClient=$Mail;
	}

	//Accesseurs (Get) recuperer les données

  	function getID(){
  		return $this->$IDClient;
  	}

  	function getNom(){
  		return $this->$NomClient;
  	}

  	function getPrenom(){
  		return $this->$PrenomClient;
  	}

  	function getAdresse(){
  		return $this->$AdresseClient;
  	}

  	function getCP(){
  		return $this->$CPClient;
  	}

  	function getVille(){
  		return $this->$VilleClient;
  	}

  	function getTelephone(){
  		return $this->$TelephoneClient;
  	}

  	function getMail(){
  		return $this->$MailClient;
  	}

  	// Muttateurs Set modifier les données

  	function setID($var){
  		return $this->IDClient=$var;
  	}

  	function setNom($var){
  		return $this->NomClient=$var;
  	}

  	function setPrenom($var){
  		return $this->PrenomClient=$var;
  	}

  	function setAdresse($var){
  		return $this->AdresseClient=$var;
  	}

  	function setCP($var) {
  		return $this->$CPClient=$var;
  	}

  	function setVille($var){
  		return $this->$VilleClient=$var;
  	}

  	function setTelephone($var){
  		return $this->$TelephoneClient=$var;
  	}

  	function setMail($var){
  		return $this->$MailClient=$var;
  	}
}

?> 