<?php
// Cette classe extends le controlleur principal


class Home extends Controller{

    // Initialisation de la liste des films a afficher en un tabkeau vide
    public $displayedData=[];
  
    
    public function index(){

        //Importation du modele Film , necessaire pour la recherche des films
        $film = $this->load_model("Film"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule

        // Ici, la liste des film vient de la fonction get_all_film
        $this->displayedData=$film->get_all_films();
       
           
       //Si on fait un clic de POST sur la page
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            
            if(isset($_POST["submit_search"])){ // S'il s'agit du bouton du search 


                 // Ici, la liste des film vient de la fonction get_search_films
                $this->displayedData=$film->get_searched_films($_POST);

            }
            

            if(isset($_POST["submit_Category_Action"])){ //S'il s'agit du bouton Category Action


                // Ici, la liste des film vient de la fonction get_films_by_category, avec category=Action
                $this->displayedData=$film->get_films_by_category("Action");

            }

            if(isset($_POST["submit_Category_Suspens"])){ //S'il s'agit du bouton Category Suspens

                 // Ici, la liste des film vient de la fonction get_films_by_category, avec category=Suspens
                $this->displayedData=$film->get_films_by_category("Suspens");

            }


            if(isset($_POST["submit_Category_Aventure"])){  //S'il s'agit du bouton Category Aventure
  

                 // Ici, la liste des film vient de la fonction get_films_by_category, avec category=Aventure
                $this->displayedData=$film->get_films_by_category("Aventure");

            }

            if(isset($_POST["submit_Category_Fiction"])){  //S'il s'agit du bouton Category Fiction

                 // Ici, la liste des film vient de la fonction get_films_by_category, avec category=Fiction
                $this->displayedData=$film->get_films_by_category("Fiction");

            }

            if(isset($_POST["submit_Category_Romance"])){   //S'il s'agit du bouton Category Romance

                
                 // Ici, la liste des film vient de la fonction get_films_by_category, avec category=Romance
                $this->displayedData=$film->get_films_by_category("Romance");

            }

            if(isset($_POST["submit_Category_Horreur"])){  //S'il s'agit du bouton Category Horreur

                 // Ici, la liste des film vient de la fonction get_films_by_category, avec category=Horreur
                $this->displayedData=$film->get_films_by_category("Horreur");

            }

            if(isset($_POST["submit_Category_Tous"])){  //S'il s'agit du bouton Category Tous

                // Ici, la liste des film vient de la fonction get_films_by_category, avec category=Tous
                $this->displayedData=$film->get_films_All_category();               

            }

           

        }

        $this->view("filmotheque/index_db",$this->displayedData); // le parametre $path est une chaine de caractere correspondant au chemin du fichier a afficher, a partir du dosseir views

      
    }




}

?>