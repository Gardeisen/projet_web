<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Faune extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 
    
    public function ajouterfaune (){
       
        if( get_cookie('nom_utilisateur')==''){
          
             redirect('User/index');
           
           
    }
    else {
            $this->load->view('Faune/ajout_faune');
    }
    }  
    
    public function insert(){
        
        $this->form_validation->set_rules('Nom','Nom','max_length[25]',
                   array(
                    'max_length' => "Nom  trop long 50 caractères"
                      
                   )
                   );
             $this->form_validation->set_rules('description','description','max_length[100]',
                   array(
                    'max_length' => "description  trop longue 50 caractères"     
                   )
                   );
           
            if ($this->form_validation->run() == TRUE){
        
        $data= array(
            "nom"=> htmlspecialchars($_POST['nom']),
            "description"=> htmlspecialchars($_POST['description']),
        );
           $this->faune_model->insert($data);
            }
         if( get_cookie('nom_utilisateur')==''){
          
             redirect('User/index');
           
    }
    else {
            redirect('Plongee/ajouterplongee');
    }
    }
}