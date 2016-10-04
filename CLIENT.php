<?php
/**
* Le fichier PHP fait partie du projet Application Commericiale 
* Il sert à définir la classe Client avec son constructeur
* ses accesseurs et ses mutateurs.
* La classe client est la classe mère 
* @datedernièremodification : 27 septembre 2016
* @since 20 septembre 2016
* @author Laëtitia Marchand <laetitiamarchand35@gmail.com>
*/


/**
 * La classe Client permet de gérer la table client du projet Application Commericiale.
 *
 * @author Laëtitia Marchand <laetitiamarchand35@gmail.com>
 */
class Client {
	private $idclient;
	private $nomclient;
	private $prenomclient;
	private $adresseclient;
	private $cpclient;
	private $villeclient;
	private $telephoneclient;
	private $mailclient;
	
	/*
	* Fonction qui sert à déclarer le constructeur de la classe Client
	* @param $idclient =  l'identifiant du client
	* @param $nomclient = le nom du client  
	* @param $prenomclient = le prénom du client
	* @param $adresseclient = l'adresse du client
	* @param $cpclient = le code postal du client
	* @param $villeclient = la ville du client
	* @param $telephoneclient = le téléphone du client
	* @param $mailcient = l'email du client
	*/
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
	// Accesseurs et Mutateurs de ID Client
  	function getIDClient(){
  		return $this->$idclient;
  	}
	
	function setIDClient($var){
  		return $this->idclient=$var;
  	}
	
	// Accesseurs et Mutateurs du Nom Client
  	function getNomClient(){
  		return $this->$nomclient;
  	}
	
	function setNomClient($var){
  		return $this->nomclient=$var;
  	}
	
	// Accesseurs et Mutateurs du Prenom Client
  	function getPrenomClient(){
  		return $this->$prenomclient;
  	}
	
	function setPrenomClient($var){
  		return $this->prenomclient=$var;
  	}
	
	// Accesseurs et Mutateurs de l'Adresse du Client
  	function getAdresseClient(){
  		return $this->$adresseclient;
  	}
	
	function setAdresseClient($var){
  		return $this->adresseclient=$var;
  	}
	
	// Accesseurs et Mutateurs du Code Postal du Client
  	function getCPClient(){
  		return $this->$cpclient;
  	}
	
	function setCPClient($var) {
  		return $this->$cpclient=$var;
  	}
	
	// Accesseurs et Mutateurs de la Ville du Client
  	function getVilleClient(){
  		return $this->$villeclient;
  	}
	
	function setVilleClient($var){
  		return $this->$villeclient=$var;
  	}
	
	
	// Accesseurs et Mutateurs du Telephone du Client
  	function getTelephoneClient(){
  		return $this->$telephoneclient;
  	}
	
	function setTelephoneClient($var){
  		return $this->$telephoneclient=$var;
  	}
	
	// Accesseurs et Mutateurs du mail du Client
  	function getMailClient(){
  		return $this->$mailclient;
  	}
	
	function setMailClient($var){
  		return $this->$mailclient=$var;
  	}	
  	
}
?> 
