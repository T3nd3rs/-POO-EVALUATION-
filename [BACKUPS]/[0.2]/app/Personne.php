<?php

class Personne {


	private $nom;
	private $prenom;
	private $mail;
	private $adresse;
	private $cp;
	private $ville;
	private $date_naissance;
	private $id;


	function __construct($nom, $prenom, $mail, $adresse, $cp, $ville, $date_naissance, $id ) {


		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->mail = $mail;
		$this->adresse = $adresse;
		$this->code_postal = $cp;
		$this->ville = $ville;
		$this->date_naissance = $date_naissance;
		$this->id = $id;

	}

	public function getNom(){
		return $this->nom;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function getMail(){
		return $this->mail;
	}

	public function getAdresse(){
		return $this->adresse;
	}

	public function getCp(){
		return $this->cp;
	}

	public function getDate_naissance(){
		return $this->date_naissance;
	}

	public function getId(){
		return $this->id;
	}

}

?>