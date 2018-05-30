<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vuflore_model extends CI_Model{
    
     protected $table ='vuflore';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function insert($data) {
        
 	$this->db->set('idplongee', $data['idplongee'])
 	->set('idflore', $data['idflore'])
        ->insert($this->table);

}
}