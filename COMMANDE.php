<?php

class Commande {
	private $IDCommande;
	private $DateCommande;
	private $DateLivraison;
	private $AdresseLivraison;
	private $CPLivraison;
	private $VilleLivraison;
	private $FraisDePort;
 
	// Constructeur

	function __construct($ID, $Date, $DateLivraison, $AdresseLivraison, $CPLivraison, $VilleLivraison, $FraisDePort) {
		$this->IDCommande=$ID;
		$this->DateCommande=$Date;
		$this->DateLivraison=$DateLivraison;
		$this->AdresseLivraison=$AdresseLivraison;
		$this->CPLivraison=$CPLivraison;
		$this->VilleLivraison=$VilleLivraison;
		$this->FraisDePort=$FraisDePort;
	}
    
    // Get ID du Client
		function getIDClient(){
  		return $this->$IDClient;
  	}
    
    // Set ID du Client
  	function setIDClient($id){
  		$this->IDClient=$id;
  	}

  	function getDateCommande(){
  		return $this->$DateCommande;
  	}

  	function setDateCommande($DateC){
  		 $this->DateCommande=$DateC;
  	}

  	function getDateLivraison(){
  		return $this->$DateLivraison;
  	}

  	function setDateLivraison($DateL){
  		 $this->$DateCommande=$DateL;
  	}

  	function getAdresseLivraison(){
  		return $this->$AdresseLivraison;
  	}

  	function setAdresseLivraison($AdresseL){
  		$this->$AdresseLivraison=$AdresseL;
  	}

  	function getCPLivraison(){
  		return $this->$CPLivraison;
  	}

    function setCPLivraison($CPL){
      $this->CPLivraison=$CPL;
    }

    function getVilleLivraison(){
      return $this->VilleLivraison;
    }

    function setVilleLivraison($VilleL){
      $this->VilleLivraison=$VilleL;
    }

    function getFraisDePort(){
      return $this->FraisDePort;
    }

    function setFraisDePort($FraisDP){

      $this->FraisDePort=$FraisDP;
    }

}