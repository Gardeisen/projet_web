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
            
            $this->load->view('moniteur/ajout_moniteur');
    }
}

    public function insert(){
        
             $this->form_validation->set_rules('Nom','Nom','max_length[25]',
                   array(
                    'max_length' => "Nom trop long 25 caractères"
                      
                   )
                   );
             $this->form_validation->set_rules('Condition de Plongée','Condition de Plongée','max_length[50]',
                   array(
                    'max_length' => "Conditions  trop longue 50 caractères"     
                   )
                   );
           
            if ($this->form_validation->run() == TRUE){
                    $data=array(
                        "nom"=> htmlspecialchars($_POST['nom']),
                        "prenom"=> htmlspecialchars($_POST['prenom']),
                        "niveauPlongee" => htmlspecialchars($_POST['NiveauPlongee']),
                    );
                    
                    $this->moniteur_model->insert($data);
                    redirect('Plongee/ajouterplongee');
            }
                 else {   redirect('Moniteur/ajoutermoniteur'); }
                
        
    }



}