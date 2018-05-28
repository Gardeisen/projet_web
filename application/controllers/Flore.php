<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Flore extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 
   
    
    public function ajouterflore (){
       
        if( get_cookie('nom_utilisateur')==''){
          
             redirect('User/index');
           
           
    }
    else {
            $this->load->view('Flore/ajout_flore');
    }
    }   
    
    public function insert(){
        
        $data= array(
            "nom"=> htmlspecialchars($_POST['nom']),
            "description"=> htmlspecialchars($_POST['description']),
        );
           $this->flore_model->insert($data);
         if( get_cookie('nom_utilisateur')==''){
          
             redirect('User/index');
           
           
    }
    else {
            redirect('Plongee/ajouterplongee');
    }
    }
    
    
}    