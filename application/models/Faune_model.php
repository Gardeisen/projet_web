<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Faune_model extends CI_Model{
    
     protected $table ='faune';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function getall(){
         
        return  $this->db->select('DISTINCT nom , idfaune',FALSE)
                ->from($this->table)
                ->get()
                ->result();
       
    }
    
    public function insert($data){
        
        $this->db->set('nom', $data['nom'])
        ->set('description', $data['description'])
 	->insert($this->table);
        
    }
    
}