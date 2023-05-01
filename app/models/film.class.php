<?php

class Film {

    //Propriétés d'instances
    public $title;
    public $tags;
    public $poster;
    public $movie;
    public $actor;
    public $catchexpression;
    public $duree;
    public $category;

    private $get_film_error="";


    //Propriétés de classe
 

     // constructeurs
        public function __construct($title="", $tags="",$poster="",$movie="",$actor="",$catchexpression="",$duree="",$category="") {
            $this->title = $title;
            $this->tags = $tags;
            $this->poster = $poster;
            $this->movie = $movie;
            $this->actor = $actor;
            $this->catchexpression = $catchexpression;
            $this->duree = $duree; 
            $this->category = $category;

        }
/*
    //-------------------------------------------------------
    //Fonction de recherche de la navbar
    //-------------------------------------------------------   
    public function get_searched_films($post){

        //Instanciation de la BD, Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
        $db= new Database();
        show($db);
 
        // Get the user inputs
        $searchInput = trim($post['search']);
            
        // Search in the db the films which title, tag or catch expression contains the search key
        $query = "SELECT * FROM films WHERE title LIKE :title OR tags LIKE :tags OR catchexpression LIKE :catchexpression";
 
        $data["title"] = '%' . $searchInput . '%';
        $data["tags"] = '%' . $searchInput . '%';
        $data["catchexpression"] = '%' . $searchInput . '%';
 
         // return all the movies searched
        $results=$db->read($query,$data);

        return $results;

     }

*/


         //-------------------------------------------------------
    //Fonction de recherche de la navbar
    //-------------------------------------------------------   
    public function get_searched_films($post){

        //Instanciation de la BD, Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
        $conn=Database::getConnInstance();
 
        // Get the user inputs
        $searchInput = trim($post['search']);
            
        // Search in the db the films which title, tag or catch expression contains the search key
        $query="SELECT * FROM films WHERE title LIKE :title OR tags LIKE :tags OR catchexpression LIKE :catchexpression";
        $stmt = $conn->prepare($query);
 
        $data["title"] = '%' . $searchInput . '%';
        $data["tags"] = '%' . $searchInput . '%';
        $data["catchexpression"] = '%' . $searchInput . '%';
 
         // return all the movies searched
        $stmt->execute($data);


         // Récupération des résultats
         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
 
     }



 

    //-------------------------------------------------------
    //Fonction de recuperation de tous les films 
    //-------------------------------------------------------   
    public function get_all_films(){

         //Instanciation de la BD, Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
         $conn=Database::getConnInstance();
         
        // Search in the db the films which tag contains the search key
        $query='SELECT * FROM films';
        $stmt = $conn->prepare($query);

        // Exécution de la requête
        $stmt->execute();

        // Récupération des résultats
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //Retour des resultat
        return $data;      
    }



    //-------------------------------------------------------
    //Fonction de recuperation des films par categorie
    //-------------------------------------------------------   

    public function get_films_by_category($category){

         //Instanciation de la BD, Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
       $conn=Database::getConnInstance();
         
       // Search in the db the films which title, tag or catch expression contains the search key
       $query = 'SELECT * FROM films WHERE category =:category';
       $stmt = $conn->prepare($query);

       $data["category"] = $category;

       // Exécution de la requête
       $stmt->execute($data);

       // Récupération des résultats
       $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

       //Retour des resultat
       return $data;

    }


 //-----------------------------------------------------------------
    //Fonction de recuperation des films pour toutes les categories 
//------------------------------------------------------------------

    public function get_films_All_category(){

      //Instanciation de la BD, Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
      $conn=Database::getConnInstance();
        
      // Search in the db the films which title, tag or catch expression contains the search key
      $query='SELECT * FROM films WHERE category LIKE :category';
      $stmt = $conn->prepare($query);

      $data["category"] ='%';

      // Exécution de la requête
      $stmt->execute($data);

      // Récupération des résultats
      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

      //Retour des resultat
      return $data;

 }
   

   

              
    public function delete($url){

    }

    public function get_film($url){

    }   

}

?>