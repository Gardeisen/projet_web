<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Plongee extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
       
    }
    
    public function affichermesplongees(){
        
        $this->load->view('plongee/mapageaccueil');
    }
    
    public function ajouterplongee(){
        
        $this->load->view('plongee/ajout_plongee');
    }
    
}