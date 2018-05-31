<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 
    
    public function index(){
       
        if( get_cookie('nom_utilisateur')==''){
          
             $this->load->view('user/connexion');
           
           
    }
    else {
        
//         header('location :'.site_url('plongee/affichermesplongees'));
           $cookie_decry=$this->encryption->decrypt(get_cookie('nom_utilisateur'));
           $data['plongee']= $this->plongee_model->getall($cookie_decry);
           $this->load->view('plongee/index',$data);
    }
        
        
    }
    
    public function affichermonprofil() {
            
        if( get_cookie('nom_utilisateur')==''){
          
             redirect('User/index');
           
           
    }
    else {
            $cookie_decry=$this->encryption->decrypt(get_cookie('nom_utilisateur'));
            $data['utilisateur']= $this->user_model->getinfouser($cookie_decry);
            $this->load->view('user/monprofil',$data);
    }
            
        }
        
    public function modifiermonprofil() {
            
        if( get_cookie('nom_utilisateur')==''){
          
             redirect('User/index');
           
           
    }
    else {
            $cookie_decry=$this->encryption->decrypt(get_cookie('nom_utilisateur'));
            $data['utilisateur']= $this->user_model->getinfouser($cookie_decry);
            $this->load->view('user/modif_profil',$data);
    }
            
        }  
        
        public function valid_modifierprofil(){
            $cookie_decry=$this->encryption->decrypt(get_cookie('nom_utilisateur'));
            $this->form_validation->set_rules('Nom','Nom','min_length[5]|max_length[30]',
                   array(
                    'max_length' => "Nom  trop long 30 caractères",
                    'min_length' => "Nom  trop court 5 caractères"   
                   )
                   );
           $this->form_validation->set_rules('Prenom','Prenom','min_length[5]|max_length[30]',
                   array(
                    'max_length' => "Prenom  trop long 30 caractères",
                    'min_length' => "Prenom  trop court 5 caractères"   
                   )
                   );
            
            if ($this->form_validation->run() == TRUE){
             
                $data=array(
                        
                        "nom"=> htmlspecialchars($_POST['nom']),
                        "prenom"=> htmlspecialchars($_POST['prenom']),
                        "niveauplongee" => htmlspecialchars($_POST['NiveauPlongee']),
                        
                        );
                $this->user_model->update($cookie_decry,$data);
                redirect('User/affichermonprofil');
            }
            else {
                redirect('User/modifiermonprofil');
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
            $cookie_cry = $this->encryption->encrypt($data['NomUtilisateur']);
            set_cookie('nom_utilisateur', $cookie_cry,'3600');
            $this->load->view('plongee/index');
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
           
        
           $this->form_validation->set_rules('Nom','Nom','min_length[5]|max_length[30]',
                   array(
                    'max_length' => "Nom  trop long 30 caractères",
                    'min_length' => "Nom  trop court 5 caractères"   
                   )
                   );
           $this->form_validation->set_rules('Prenom','Prenom','min_length[5]|max_length[30]',
                   array(
                    'max_length' => "Prenom  trop long 30 caractères",
                    'min_length' => "Prenom  trop court 5 caractères"   
                   )
                   );
           
           $this->form_validation->set_rules('NomUtilisateur','Nom Utilisateur', 'min_length[5]|max_length[30]|is_unique[users.nomutilisateur]',
           array(
               'is_unique' => "Nom utilisateur déjà choisit",
               'max_length' => "Nom utilisateur trop long 30 caractères",
               'min_length' => "Nom utilisateur trop court 5 caractères"
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
                       $cookie_cry = $this->encryption->encrypt($data['NomUtilisateur']);
                       set_cookie('nom_utilisateur', $cookie_cry,'3600');  
                       $this->load->view('plongee/index');
                      
                }
    }
 
}
  