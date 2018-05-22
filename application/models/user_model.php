<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model{
    
     protected $table ='users';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function insert($data) {
        
    $this->load->database('default');

 	$this->db->set('nom', $data['Nom'])
 	->set('motpasse', $data['password'])
 	->set('prenom', $data['prenom'])
 	->set('ville', $data['ville'])
 	->insert($this->table);


}
    
}