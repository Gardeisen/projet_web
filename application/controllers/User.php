<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 
    
    public function pageconnexion (){
       
        if( get_cookie('nom_utilisateur')==''){
          
             $this->load->view('user/connexion');
           
           
    }
    else {
            $this->load->view('plongee/mapageaccueil');
    }
        
        
    }
    
    public function validconnexion(){

        $data=array(
            "NomUtilisateur" => htmlspecialchars($_POST['NomUtilisateur']),
            "password" => htmlspecialchars($_POST['password']),
        );
        $query = $this->user_model->verifmotdepasse($data);
       
        if (empty($query)){
            $this->load->view('user/connexion');
            
        }
        else {
            
            set_cookie('nom_utilisateur', $data['NomUtilisateur'],'3600');
          
            $this->load->view('plongee/mapageaccueil');
        }
        
    }
  
    public function inscription(){
       
         
        $this->load->view('user/inscription');
    }
    
    public function deconnexion(){
        
        delete_cookie('nom_utilisateur');
        $this->load->view('user/deconnexion');
    }
    public function inscriptionvalid(){
           
        
           
           
           $this->form_validation->set_rules('NomUtilisateur','Nom Utilisateur', 'is_unique[users.nomutilisateur]',
           array(
               'is_unique' => "nom utilisateur déjà choisit"
           )
            );
           
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
                       set_cookie('nom_utilisateur', $data['NomUtilisateur'],'3600');
                       $this->load->view('plongee/mapageaccueil');
                }
    }
   
}
                