<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_model extends CI_Model{
    
    
     protected $table ='site';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function insert($data) {
        
 	$this->db->set('nomsite', $data['nom'])
 	->set('descriptionsite', $data['description'])
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