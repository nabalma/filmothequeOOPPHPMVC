<?php
// Cette classe extends le controlleur principal
class Admin extends Controller{

    public $displayedData=[];
  
    
    //*************************************** */
    // FONCTION DAFFICHAGE DE LA VUE INDEX
    //**************************************** */

    // Il sagit ici de la fonction index du controleur Home. En effet, si lurl est home/index, cest cette fonction index qui sexecute. 
    
    public function index(){ 

        //1.0- Importer le fichier modele
             //Importation du modele Film , necessaire pour lajout de film. En instancier un objet.
             $film = $this->load_model("Film"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule
             $this->displayedData=$film->get_all_films();
         



        ////////////////////////////////////////////////////////////////
        //** 1-Ajout d'un nouveau film 
        if(isset($_POST["ajout_Film"])){

             

             //1.1- Execution de la fonction login de la classe User (Appel de la fonction --> Connexion du User)
                $collectedData = $film->collectData($_POST);

                $checkedData=$film->checkData($collectedData);

                $film->saveFilm($checkedData);
         
        } 

        ///////////////////////////////////////////////////////////////
        //**2-Edition d'un film existant 
        if(isset($_POST["ajout_Film"])){




        } 

        //////////////////////////////////////////////////////////////
        //**3-Suppresion d'un film existant 
        if(isset($_POST["ajout_Film"])){




        } 
  

        
        
        
        
      


        // *** 2- Affichege de la vue
        //--------------------------------------------------------------------------------------------
        //Ici, elle est faite,de par son contenu, pour afficher une vue. La vue index contenu dans le dossier boutique
        
       $this->view("admin/admin",$this->displayedData); // le parametre $path est une chaine de caractere correspondant au chemin du fichier a afficher, a partir du dosseir views
   
   
   
    }




}

?>