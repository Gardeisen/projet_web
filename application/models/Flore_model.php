<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Flore_model extends CI_Model{
    
    protected $table ='flore';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function getall(){
         
        return  $this->db->select('DISTINCT nomflore , idflore',FALSE)
                ->from($this->table)
                ->get()
                ->result();
       
    }
    public function insert($data){
        
        $this->db->set('nomflore', $data['nom'])
        ->set('descriptionflore', $data['description'])
 	->insert($this->table);
        
    }

    }
     
    