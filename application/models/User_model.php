<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{
    
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
        
        $result = $this->db->select('nomutilisateur,motpasse')
                        ->from($this->table)
                        ->where('users.nomutilisateur',$data["NomUtilisateur"])
                        ->where('users.motpasse',$data["password"])
                        ->get()
                        ->result();
        return $result;
    }
    
    public function getinfouser($nomutilisateur){
        
        return 
        $this->db->select('nom ,prenom ,niveaudeplongee,nbplongee')
                ->from($this->table)
                ->where('users.nomutilisateur',$nomutilisateur)
                ->get()
                ->result();
    }
    
    public function getuserbyid($username){
        
        return 
        $this->db->select('iduser')
                ->from($this->table)
                ->where('users.nomutilisateur',$username)
                ->get()
                ->result();
    }
    
}