<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Plongee extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
       
    }
    
    public function affichermesplongees(){
        
       if( get_cookie('nom_utilisateur')!=''){
          
           $data['plongee']= $this->plongee_model->getall(get_cookie('nom_utilisateur'));
           $this->load->view('plongee/mapageaccueil',$data);
           
    }
    else {
             $this->load->view('user/connexion');
    }
    }
    
    public function ajouterplongee(){
        
        if( get_cookie('nom_utilisateur')!=''){
          
            
           $data['site']= $this->site_model->getall();
           $data['moniteur']= $this->moniteur_model->getall(); 
           $data['faune']= $this->faune_model->getall();
           $data['flore']= $this->faune_model->getall();
           $this->load->view('plongee/ajout_plongee',$data);
           
           
    }
    else {
             $this->load->view('user/connexion');
    }
    }
    
}