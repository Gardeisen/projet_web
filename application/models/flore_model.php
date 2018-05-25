<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class flore_model extends CI_Model{
    
    protected $table ='flore';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function index() {
        
    $this->load->database('default');

   return $this->db->select('*')
                    ->from('flore')
                    ->get()
                    ->result();

}
    public function insert($data){
        
        $this->db->set('nom', $data['nom'])
        ->set('description', $data['description'])
 	->insert($this->table);
        
    }

    }
     
    

