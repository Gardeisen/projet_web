<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 
    
    public function pageconnexion (){
       
        $this->load->view('user/connexion');
        
    }
  
    public function inscription(){
       
         $this->load->library('form_validation');
        $this->load->view('user/inscription');
    }
    
    public function deconnexion(){
        
        $this->load->view('user/deconnexion');
    }
    public function inscriptionvalid(){
           $this->load->library('form_validation');
           
           $this->load->database('default');
           $this->load->helper('form');


           
          
           $this->form_validation->set_rules('password', 'Mot de passe', 'required');
           $this->form_validation->set_rules('passconf', 'Confirmation du Mot de passe', 'required|matches[password]');
           if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('user/inscription');
                }
                else
                {
                      
                       $data=array(
                        "NomUtilisateur" => htmlspecialchars($_POST['NomUtilisateur']),
                        "Nom"=> htmlspecialchars($_POST['Nom']),
                        "Prenom"=> htmlspecialchars($_POST['Prenom']),
                        "NiveauPlongee" => htmlspecialchars($_POST['NiveauPlongee']),
                        "password" => htmlspecialchars($_POST['password']),
                        );
    
                       $this->user_model->insert($data);
                        $this->load->view('plongee/mapageaccueil');
                }
    }
   
}