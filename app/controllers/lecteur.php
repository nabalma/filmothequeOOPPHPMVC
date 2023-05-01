<?php
// Cette classe extends le controlleur principal
class Lecteur extends Controller{

    public $displayedData=[];
  
    
    //*************************************** */
    // FONCTION DAFFICHAGE DE LA VUE INDEX
    //**************************************** */

    // Il sagit ici de la fonction index du controleur Home. En effet, si lurl est home/index, cest cette fonction index qui sexecute. 
    
    public function index(){  

        if(isset($_GET["id"])){

            $selectedFilm = $_GET["id"];

         //Importation du modele Film , necessaire pour la recherche des films
         $film = $this->load_model("Film"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule

        // Ici, le controlleur appelle la fonction pour recuperer les donnees du film selectionnée
        $this->displayedData=$film->get_film($selectedFilm);
        
    }
        
        
        
      


        // *** 2- Affichege de la vue
        //--------------------------------------------------------------------------------------------
        //Ici, elle est faite,de par son contenu, pour afficher une vue. La vue index contenu dans le dossier boutique
        
       $this->view("filmotheque/lecteur",$this->displayedData); // le parametre $path est une chaine de caractere correspondant au chemin du fichier a afficher, a partir du dosseir views
   
   
   
    }




}

?>