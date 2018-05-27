<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Faune extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 
    
    public function ajouterfaune (){
       
        if( get_cookie('nom_utilisateur')==''){
          
             $this->load->view('user/connexion');
           
           
    }
    else {
            $this->load->view('faune/ajout_faune');
    }
    }  
    
    public function insert(){
        
        $data= array(
            "nom"=> htmlspecialchars($_POST['nom']),
            "description"=> htmlspecialchars($_POST['description']),
        );
           $this->faune_model->insert($data);
         if( get_cookie('nom_utilisateur')==''){
          
             $this->load->view('user/connexion');
           
           
    }
    else {
            $data['site']= $this->site_model->getall();
            $data['moniteur']= $this->moniteur_model->getall(); 
            $data['faune']= $this->faune_model->getall();
            $data['flore']= $this->flore_model->getall();
            $this->load->view('plongee/ajout_plongee');
    }
    }
}