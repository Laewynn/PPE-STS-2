<?php
class Commande {
	private $idcommande;
	private $datecommande;
	private $datelivraison;
	private $adresselivraison;
	private $cplivraison;
	private $villelivraison;
	private $fraisdeport;
 
	// Constructeur
	function __construct($idcommande, $datecommande, $datelivraison, $adresselivraison, $cplivraison, $villelivraison, $fraisdeport) {
		$this->idcommande=$idcommande;
		$this->datecommande=$Date;
		$this->datelivraison=$datelivraison;
		$this->adresselivraison=$adresselivraison;
		$this->cplivraison=$cplivraison;
		$this->villelivraison=$villelivraison;
		$this->fraisdeport=$fraisdeport;
	}
    
    // Get ID du Client
		function getIDClient(){
  		return $this->$idcommande;
  	}
    
    // Set ID du Client
  	function setIDClient($id){
  		$this->idcommande=$id;
  	}
  	function getDateCommande(){
  		return $this->$datecommande;
  	}
  	function setDateCommande($DateC){
  		 $this->datecommande=$DateC;
  	}
  	function getDateLivraison(){
  		return $this->$datelivraison;
  	}
  	function setDateLivraison($DateL){
  		 $this->$datelivraison=$DateL;
  	}
  	function getAdresseLivraison(){
  		return $this->$adresselivraison;
  	}
  	function setAdresseLivraison($AdresseL){
  		$this->$adresselivraison=$AdresseL;
  	}
  	function getCPLivraison(){
  		return $this->$cplivraison;
  	}
    function setCPLivraison($CPL){
      $this->cplivraison=$CPL;
    }
    function getVilleLivraison(){
      return $this->villelivraison;
    }
    function setVilleLivraison($VilleL){
      $this->villelivraison=$VilleL;
    }
    function getFraisDePort(){
      return $this->fraisdeport;
    }
    function setFraisDePort($FraisDP){
      $this->fraisdeport=$FraisDP;
    }
}
