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
        ->set('iduser', $data['NomUtilisateur'])
 	->set('prenom', $data['Prenom'])
 	->set('niveaudeplongee', $data['NiveauPlongee'])
 	->insert($this->table);

}

    public function verifmotdepasse($data) {
        
        $this->load->database('default');
        $result = $this->db->select('iduser','motpasse')
                        ->from($this->table)
                        ->where('users.iduser',(int)$data["NomUtilisateur"])
                        ->where('users.motpasse',$data["password"])
                        ->get()
                        ->result();
        return $result;
    }
    
}