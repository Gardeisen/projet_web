<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model{
    
     protected $table ='users';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function insert($data) {
        
  
    
 	$this->db->set('nom', $data['Nom'])
 	->set('motpasse', $data['password'])
        ->set('nomutilisateur', $data['NomUtilisateur'])
 	->set('prenom', $data['Prenom'])
 	->set('niveaudeplongee', $data['NiveauPlongee'])
 	->insert($this->table);

}

    public function verifmotdepasse($data) {
        
        $result = $this->db->select('nomutilisateur','motpasse')
                        ->from($this->table)
                        ->where('users.nomutilisateur',$data["NomUtilisateur"])
                        ->where('users.motpasse',$data["password"])
                        ->get()
                        ->result();
        return $result;
    }
    
}