<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 
    
   public function ajoutersite (){
       
        if( get_cookie('nom_utilisateur')==''){
          
             $this->load->view('user/connexion');
           
           
    }
    else {
            $this->load->view('site/ajout_site');
    }
}

    public function insert(){
        
        
                    $data=array(
                        "nom"=> htmlspecialchars($_POST['nom']),
                        "description"=> htmlspecialchars($_POST['description']),
                        "positiongeo" => htmlspecialchars($_POST['positiongeo']),
                    );
                    
                    $this->site_model->insert($data);
                    redirect('Plongee/ajouterplongee');
                
        
    }
}