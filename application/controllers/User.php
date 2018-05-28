<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 
    
    public function index(){
       
        if( get_cookie('nom_utilisateur')==''){
          
             $this->load->view('User/connexion');
           
           
    }
    else {
        
//         header('location :'.site_url('plongee/affichermesplongees'));
           $data['plongee']= $this->plongee_model->getall(get_cookie('nom_utilisateur'));
           $this->load->view('Plongee/index',$data);
    }
        
        
    }
    
    public function affichermonprofil() {
            
        if( get_cookie('nom_utilisateur')==''){
          
             redirect('User/index');
           
           
    }
    else {
            $data['utilisateur']= $this->user_model->getinfouser(get_cookie('nom_utilisateur'));
            $this->load->view('User/monprofil',$data);
    }
            
        }
    
    public function validconnexion(){

        define("PREFIXE", "tunauras");
        define("SUFFIXE", "paslemotdepasse");
        $mdp= md5( sha1(PREFIXE) . $_POST['password'] . sha1(SUFFIXE) );
        
        $data=array(
            "NomUtilisateur" => htmlspecialchars($_POST['NomUtilisateur']),
            "password" => $mdp,
        );
        $query = $this->user_model->verifmotdepasse($data);
       
        if (empty($query)){
            redirect('User/index');
            
        }
        else {
            
            set_cookie('nom_utilisateur', $data['NomUtilisateur'],'3600');
            redirect('Plongee/affichermesplongees');
        }
        
    }
  
    public function inscription(){
       
         
        $this->load->view('User/inscription');
    }
    
    public function deconnexion(){
        
        delete_cookie('nom_utilisateur');
        $this->load->view('User/deconnexion');
    }
    public function inscriptionvalid(){
           
        
           
           
           $this->form_validation->set_rules('NomUtilisateur','Nom Utilisateur', 'is_unique[users.nomutilisateur]',
           array(
               'is_unique' => "nom utilisateur déjà choisit"
           )
            );
            $this->form_validation->set_rules('password', 'Mot de passe', 'required');
            $this->form_validation->set_rules('passconf', 'Confirmation du Mot de passe', 'required|matches[password]',
                    array(
                      'matches' => "Les mots de passe ne correspondent pas"  
                            )
                        
                    );
            

           
           if ($this->form_validation->run() == FALSE)
                {
               $this->load->view('user/inscription');
                }
                else
                {
                        define("PREFIXE", "tunauras");
                        define("SUFFIXE", "paslemotdepasse");
                        $mdp= md5( sha1(PREFIXE) . $_POST['password'] . sha1(SUFFIXE) );
                        
                       $data=array(
                        "NomUtilisateur" => htmlspecialchars($_POST['NomUtilisateur']),
                        "Nom"=> htmlspecialchars($_POST['Nom']),
                        "Prenom"=> htmlspecialchars($_POST['Prenom']),
                        "NiveauPlongee" => htmlspecialchars($_POST['NiveauPlongee']),
                        "password" => $mdp,
                        );
    
                       $this->user_model->insert($data);
                       set_cookie('nom_utilisateur', $data['NomUtilisateur'],'3600');
                       redirect('Plongee/affichermesplongees');
                      
                }
    }
 
}
  