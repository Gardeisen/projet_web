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
    
    public function uneplongee(){
        
        if (get_cookie('nom_utilisateur')!=''){
            $data['user']=$this->encryption->decrypt(get_cookie('nom_utilisateur'));
            $data['plongee']= $this->plongee_model->getinfoplongee($plongee);
            $this-> load->view('plongee/afficheunep',$data);
        }
        else{
            redirect('User/index');
    }
    }
    
    public function ajouterplongee(){
        
        if( get_cookie('nom_utilisateur')!=''){
          
           
           $data['site']= $this->site_model->getall();
           $data['moniteur']= $this->moniteur_model->getall(); 
           $data['faune']= $this->faune_model->getall();
           $data['flore']= $this->flore_model->getall();
           $this->load->view('plongee/ajout_plongee',$data);
           
           
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
           
           foreach($data as $valeur){
                $tab=$this->plongee_model->getlastidplongee();
                var_dump($tab);
                $faune=array(
              
                            "idplongee"=> $tab[0]->idplongee,
                            "idfaune"=>$valeur   
                   );
                   $this->vufaune_model->insert($faune);
           }
           $data2=$_POST['flore'];
           
           foreach($data2 as $valeur){
                $tab=$this->plongee_model->getlastidplongee();
                $flore=array(
              
                            "idplongee"=> $tab[0]->idplongee,
                            "idflore"=>$valeur   
                   );
                   $this->vuflore_model->insert($flore);
           }
            redirect('Plongee/affichermesplongees');
    }
}
