
<?php

/**
 * classe article
 * 
 * <p>la article a pour but de creer des articles
 * de pouvoir avoir tous les informations sur un article
 * </p>
 * 
 * @classe Article
 * @author Moussa Thimbo <moussa.thimbo@gmail.com> 
 * @copyright Moussa Thimbo 2012
 * @version 1.0.0
 * @package classe
 */
 
 class Article {
 
    /*~*~*~*~*~*~*~*~*~*~*/
    /*  1. propriétés    */
    /*~*~*~*~*~*~*~*~*~*~*/
	
    private $titre;
	private $date;
	private $auteur;
	private $description;
	private $url;
	private $images;
    
    /*~*~*~*~*~*~*~*~*~*~*/
    /*  2. méthodes      */
    /*~*~*~*~*~*~*~*~*~*~*/
    
    /**
    * Constructeur
    * 
    * <p>création de l'instance de la classe</p>
    * 
    * @name Article::__construct()
    * @return void 
    *//*
    public function __construct() {
		$this->$titre;
		$this->$date = new DateTime();
		$this->$images = array();
    } 
	*/
	/**
    * Constructeur
    * 
    * <p>création de l'instance de la classe</p>
    * 
    * @name Article::__construct()
    * @param titre
    * @param date
    * @param auteur
	* @param description
    * @param url
    * @param images
	* @param pages
    * @return void 
    */
    public function __construct($unTitre, $uneDate, $unAuteur, $uneDesc, $unUrl) {
		$this->$titre = $unTitre;
		$this->$date = $uneDate;
		$this->$auteur = $unAuteur;
		$this->$description = $uneDesc;
		$this->$url = $unUrl;
    } 
	
	
    
    /*~*~*~*~*~*~*~*~*~*~*~*~*~*/
    /*  2.1 méthodes privées   */
    /*~*~*~*~*~*~*~*~*~*~*~*~*~*/
	private function lireFichier(){
		$contenu = array();
		$contenu = file($url);
		print_r($contenu_array);
	}
    
    /*~*~*~*~*~*~*~*~*~*~*~*~*~*/
    /*  2.1 méthodes getters   */
    /*~*~*~*~*~*~*~*~*~*~*~*~*~*/
	public function getTitre(){
		return $this->$titre;
	}
	
	public function getAuteur(){
		return $this->$auteur;
	}
	
	public function getDate(){
		return $this->$date;
	}
	
	public function getDescription(){
		return $this->$description;
	}
	
	public function getUrl(){
		return $this->$url;
	}
	
	public function getImages(){
		return $this->$images;
	}
	
	/*~*~*~*~*~*~*~*~*~*~*~*~*~*/
    /*  2.1 méthodes setters   */
    /*~*~*~*~*~*~*~*~*~*~*~*~*~*/
	public function setTitre($unTitre){
		$this->$unTitre = $unTitre;
	}
	
	public function setAuteur($unAuteur){
		$this->$auteur = $unAuteur;
	}
	
	public function setDate($uneDate){
		$this->$date= $uneDate;
	}
	
	public function setDescription($desc){
		$this->$description = $desc;
	}
	
	public function setUrl($location){
		$this->$url = $location;
	}
	
	public function setImages($img){
		$this->$images = $img;
	}
	   
    /**
    * Destructeur
    * 
    * <p>Destruction de l'instance de classe</p>
    * 
    * @name Nom de la classe::__destruct()
    * @param nom du premier paramètre
    * @param nom du second paramètre
    * @param etc ...
    * @return void
    */
    public function __destruct() {
    }
 }
 ?> 