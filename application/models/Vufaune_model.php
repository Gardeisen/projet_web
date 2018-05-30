<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vufaune_model extends CI_Model{
    
     protected $table ='vufaune';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function insert($data) {
        
 	$this->db->set('idplongee', $data['idplongee'])
 	->set('idfaune', $data['idfaune'])
        ->insert($this->table);

}
}