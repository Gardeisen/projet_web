<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site_model extends CI_Model{
    
    
     protected $table ='site';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function insert($data) {
        
 	$this->db->set('nom', $data['nom'])
 	->set('description', $data['description'])
 	->set('positiongeo', $data['positiongeo'])
 	->insert($this->table);
    
}
    public function getall(){
         
        return  $this->db->select('*')
                ->from($this->table)
                ->get()
                ->result();
       
    }
    
}