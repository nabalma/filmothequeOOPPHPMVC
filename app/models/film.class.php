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
   

  //-----------------------------------------------------------------
    //Fonction de recuperation d'un film, connaissant a reference 
//-------------------------------------------------------------------
    public function get_film($ref){

     //Instanciation de la BD, Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
      $conn=Database::getConnInstance();
        
      // Search in the db the films which title, tag or catch expression contains the search key
      $query='SELECT * FROM films WHERE ref=:ref';
      $stmt = $conn->prepare($query);

      $data["ref"] =$ref;

      // Exécution de la requête
      $stmt->execute($data);

      // Récupération des résultats
      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

      //Retour des resultat
      return $data;


    } 
    
    

    public function delete($url){

    }


    public function collectData($post){
        $collectedData=array();
      
        // -- a- Collecting data
       
        //a.1 -- input type text data
         $length = trim($post['length']);
         $actor = trim($post['actor']);
         $title = trim($post['title']);
         $catchexpression = trim($post['catchexpression']);
         $tags = trim($post['tags']);

         //a.2 -- input type radio button data
         $category =trim($post['category']);

         //a.3 -- input type file data

         // a.3.1- Vérifier si un fichier a été sélectionné
        if (!empty($_FILES["poster"]["name"])) {
                      
            $poster_tmp_name = $_FILES['poster']['tmp_name']; // Chemin temporaire du fichier
            $poster_name = $_FILES['poster']['name']; // Nom du fichier
            $poster_size = $_FILES["poster"]["size"];  // Taille du fichier
            $poster_error = $_FILES["poster"]["error"];  // Error du fichier
            $poster_type = $_FILES["poster"]["type"];  // Type du fichier
                        
            // Le nom du poster  dans la base de données
            $bdd_poster = $poster_name;         
         }else{$collectedData["success"]="false";}


                  // a.3.1- Vérifier si un fichier a été sélectionné
        if (!empty($_FILES["film"]["name"])) {
                      
            $film_tmp_name = $_FILES['film']['tmp_name']; // Chemin temporaire du fichier
            $film_name = $_FILES['film']['name']; // Nom du fichier
            $film_size = $_FILES["film"]["size"];  // Taille du fichier
            $film_error = $_FILES["film"]["error"];  // Error du fichier
            $film_type = $_FILES["film"]["type"];  // Type du fichier
                        
            // Le nom du poster  dans la base de données
            $bdd_film = $film_name; 

         }else{$collectedData["success"]="false";}


                 
        // -- b- Put data in a collection Table  
        $collectedData["length"]=$length;
        $collectedData["actor"]=$actor;
        $collectedData["title"]=$title;
        $collectedData["catchexpression"]=$catchexpression;
        $collectedData["tags"]=$tags;
        $collectedData["category"]= $category;
         

        $collectedData["poster_tmp_name"]=$poster_tmp_name; // Chemin temporaire du fichier
        $collectedData["poster_name"]=$poster_name; // Nom du fichier
        $collectedData["poster_size"]=$poster_size;  // Taille du fichier
        $collectedData["poster_error"]=$poster_error;  // Error du fichier
        $collectedData["poster_type"]=$poster_type;  // Type du fichier
        $collectedData["bdd_poster"]=$bdd_poster;  // nom du fichier poster dans la bdd

        $collectedData["film_tmp_name"]=$film_tmp_name; // Chemin temporaire du fichier
        $collectedData["film_name"]=$film_name; // Nom du fichier
        $collectedData["film_size"]=$film_size;  // Taille du fichier
        $collectedData["film_error"]=$film_error;  // Error du fichier
        $collectedData["film_type"]=$film_type;  // Type du fichier
        $collectedData["bdd_film"]=$bdd_film;  // nom du fichier film dans la bdd

    return $collectedData;

    }


    public function checkData($collectedData){
        $collectedData["success"]="true";
        if(empty($collectedData["film_name"]) OR empty($collectedData["poster_name"]) OR empty($length) OR empty($actor) OR empty($title) OR 
        empty($catchexpression) OR empty($tags) OR empty($category)){
            $collectedData["success"]="true";
        }else{  $collectedData["success"]="false";}

        return $collectedData;       

    }

    public function saveFilm($collectedData){

    if($collectedData["success"]=="true"){

            // Déplace le fichier poster téléchargé vers sa destination finale
    move_uploaded_file($collectedData["poster_tmp_name"],DOC_ROOT."/filmotheque_andre/public/assets/posters/".$collectedData["poster_name"]);
    
       

    // Déplace le fichier film téléchargé vers sa destination finale
    move_uploaded_file($collectedData["film_tmp_name"],DOC_ROOT."/filmotheque_andre/public/assets/movies/".$collectedData["film_name"]);

        // Sauver les données du film dans la BD

         //1.1 -- Instanciation de la BD, 
         $db=Database::getDbInstance();



          // before saving the film, check if the title is not yet already in the database
        $query="SELECT * FROM films WHERE title =:title";
        $data["title"]=$collectedData["title"];
        $check=$db->read($query,$data);
        if(count($check)>0){
    //    $this->register_error.="Oups, cet courriel est déja utilisé. Merci d'essayer un autre ! <br>";
        }else{

             // Enregistrement du film  
        // Parametrized query. The values are preceded with : with the same names of the database table column names
       $query ="INSERT INTO films(title,tags,category,poster,movie,actor,catchexpression,duree) VALUES(:title,:tags,:category,:poster,:movie,:actor,:catchexpression,:duree)";
       
       // The data to be used to execute the request. data is an array Object. its values will be the parameters of the query
       $data["title"]=$collectedData["title"];
       $data["tags"]= $collectedData["tags"];
       $data["category"]=$collectedData["category"];
       $data["actor"]=$collectedData["actor"];
       $data["catchexpression"]=$collectedData["catchexpression"];
       $data["duree"]=$collectedData["length"];
       $data["poster"]=$collectedData["poster_name"];
       $data["movie"]=$collectedData["film_name"];     
      
       $result = $db->write($query,$data);



        }

         
      

        }
    

    }

}

?>