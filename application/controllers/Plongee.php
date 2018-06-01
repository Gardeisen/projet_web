<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Plongee extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
       
    }
    
    public function affichermesplongees(){
        
       if( get_cookie('nom_utilisateur')!=''){
          
           $cookie_decry=$this->encryption->decrypt(get_cookie('nom_utilisateur'));
           $data['plongee']= $this->plongee_model->getall($cookie_decry);
           $this->load->view('plongee/mapageaccueil',$data);
           
    }
    
    else {
            redirect('User/index');
    }
    }
    
    public function ficheplongee($idplongee){
        
        if (get_cookie('nom_utilisateur')!=''){
            $cookie_decry=$this->encryption->decrypt(get_cookie('nom_utilisateur'));
            $user=$this->user_model->getuserbyid($cookie_decry);    
            $data['plongee']= $this->plongee_model->getinfoplongee($user[0]->iduser,$idplongee);
            $this-> load->view('plongee/afficheunep',$data);
             
        }
        else{
            redirect('User/index');
    }
    }
    
    public function ajouterplongee(){
        
        if( get_cookie('nom_utilisateur')!=''){
          
            
            $this->form_validation->set_rules('Condition de Plongée','Condition de Plongée','min_length[0]|max_length[50]',
                   array(
                    'max_length' => "Conditions  trop longue 50 caractères",
                    'min_length' => "Conditions  trop courte 5 caractères"   
                   )
                   );
            if ($this->form_validation->run() == TRUE){
           
                
                
           $data['site']= $this->site_model->getall();
           $data['moniteur']= $this->moniteur_model->getall(); 
           
           
           $data['faune']= $this->faune_model->getall();
           $data['flore']= $this->flore_model->getall();
           
           $this->load->view('plongee/ajout_plongee',$data);
            }  
            else{ 
                $data['site']= $this->site_model->getall();
                $data['moniteur']= $this->moniteur_model->getall(); 
                
                $data['faune']= $this->faune_model->getall();
                $data['flore']= $this->flore_model->getall();
                $this->load->view('plongee/ajout_plongee',$data);
                
            }
        }
            else {
                redirect('User/index');
                
            }
    }
   
    
    public function creationplongee(){
        
           $cookie_decry=$this->encryption->decrypt(get_cookie('nom_utilisateur'));
         
           $newP=array(
                        "utilisateur"=> $this->user_model->getuserbyid($cookie_decry),
                        "dateplongee"=> htmlspecialchars($_POST['date']),
                        "profondeur"=> htmlspecialchars($_POST['profondeur']),
                        "conditionplongee" => htmlspecialchars($_POST['condition']),
                        "idmoniteur" => htmlspecialchars($_POST['idmoniteur']),
                        "idsite" => htmlspecialchars($_POST['idsite'])
                    );
           $this->plongee_model->insert($newP);
           
           $data=$_POST['faune'];
           if (isset($data[0])){
           foreach($data as $valeur){
                $tab=$this->plongee_model->getlastidplongee();
                var_dump($tab);
                $faune=array(
              
                            "idplongee"=> $tab[0]->idplongee,
                            "idfaune"=>$valeur   
                   );
                   $this->vufaune_model->insert($faune);
           }
           }
           
           $data2=$_POST['flore'];
           if (isset($data2[0])){
           foreach($data2 as $valeur){
                $tab=$this->plongee_model->getlastidplongee();
                $flore=array(
              
                            "idplongee"=> $tab[0]->idplongee,
                            "idflore"=>$valeur   
                   );
                   $this->vuflore_model->insert($flore);
           }
           }
            redirect('Plongee/affichermesplongees');
    }
    
    
    public function delete($id) {
      
      $this->plongee_model->delete($id); 
      redirect('Plongee/affichermesplongees');
    }
}
