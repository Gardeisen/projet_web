<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Flore extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 
   
    
    public function ajouterflore (){
       
        if( get_cookie('nom_utilisateur')==''){
          
             $this->load->view('user/connexion');
           
           
    }
    else {
            $this->load->view('flore/ajout_flore');
    }
    }   
    
    public function insert(){
        
        $data= array(
            "nom"=> htmlspecialchars($_POST['nom']),
            "description"=> htmlspecialchars($_POST['description']),
        );
           $this->flore_model->insert($data);
         if( get_cookie('nom_utilisateur')==''){
          
             $this->load->view('user/connexion');
           
           
    }
    else {
            $this->load->view('plongee/ajout_plongee');
    }
    }
    
    
}    