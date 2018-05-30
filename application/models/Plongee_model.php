<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plongee_model extends CI_Model{
    
    protected $table ='plongee';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function getall($nomutilisateur){
         
        return  $this->db->select('*')
                ->from($this->table)
                ->join('users', 'users.iduser = plongee.iduser')
                ->join('moniteur', 'moniteur.idmoniteur = plongee.idmoniteur')
                ->join('site', 'site.idsite = plongee.idsite')
                ->where('nomutilisateur',$nomutilisateur)
                ->get()
                ->result();
       
    }
    
    
    
    public function insert($data){
        
        
        
        $this->db->set('dateplongee', $data['dateplongee'])
 	->set('conditionplongee', $data['conditionplongee'])
 	->set('profondeur', $data['profondeur'])
        ->set('idsite', $data['idsite'])
        ->set('idmoniteur', $data['idmoniteur'])
        ->set('iduser',$data['utilisateur'][0]->iduser)
 	->insert($this->table);
    }
    
    
    public function getlastidplongee(){
       
        return 
        $this->db->select_max('idplongee')
                ->from($this->table)
                ->get()
                ->result();
        
        
    }
}
