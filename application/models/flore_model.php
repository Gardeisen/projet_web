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


    }
     
    

