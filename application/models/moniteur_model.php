<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class moniteur_model extends CI_Model{
    
    protected $table ='moniteur';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function insert($data) {
        
 	$this->db->set('nommono', $data['nom'])
 	->set('prenommono', $data['prenom'])
 	->set('niveauplongee', $data['niveauPlongee'])
 	->insert($this->table);
    
}

    public function getall(){
         
        return  $this->db->select('*')
                ->from($this->table)
                ->get()
                ->result();
       
    }
}