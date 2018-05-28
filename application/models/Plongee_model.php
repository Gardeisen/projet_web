<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plongee_model extends CI_Model{
    
    protected $table ='plongee';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function getall($nomutilisateur){
         
        return  $this->db->select('*')
                ->from($this->table)
                ->join('users', 'users.iduser = plongee.iduser')
                ->join('moniteur', 'moniteur.idmoniteur = plongee.idmoniteur')
                ->join('site', 'site.idsite = plongee.idsite')
                ->where('nomutilisateur',$nomutilisateur)
                ->get()
                ->result();
       
    }
    
    
}