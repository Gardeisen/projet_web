<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Moniteur extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 
    
    public function ajoutermoniteur (){
       
        if( get_cookie('nom_utilisateur')==''){
          
             redirect('User/index');
           
           
    }
    else {
            
            $this->load->view('Moniteur/ajout_moniteur');
    }
}

    public function insert(){
        
        
                    $data=array(
                        "nom"=> htmlspecialchars($_POST['nom']),
                        "prenom"=> htmlspecialchars($_POST['prenom']),
                        "niveauPlongee" => htmlspecialchars($_POST['NiveauPlongee']),
                    );
                    
                    $this->moniteur_model->insert($data);
                    redirect('Plongee/ajouterplongee');
                
        
    }



}