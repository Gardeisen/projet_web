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
    
    public function delete($idplongee) {
       
        return $this->db->where('idplongee', (int) $idplongee)
                        ->delete($this->table);
    }
    
    
    public function insert($data){
        
        
        
        $this->db->set('dateplongee', $data['dateplongee'])
 	->set('conditionplongee', $data['conditionplongee'])
 	->set('profondeur', $data['profondeur'])
        ->set('idsite', $data['idsite'])
        ->set('idmoniteur', $data['idmoniteur'])
        ->set('iduser',$data['utilisateur'][0]->iduser)
 	->insert($this->table);
    }
    
    
    public function getlastidplongee(){
       
        return 
        $this->db->select_max('idplongee')
                ->from($this->table)
                ->get()
                ->result();
        
        
    }
    
    public function getinfoplongee($iduser,$idplongee){
        return 
        $this->db->select('*')
                ->from($this->table)
                ->join('site', 'site.idsite = plongee.idsite')
                ->join('moniteur', 'moniteur.idmoniteur = plongee.idmoniteur')
                ->join('vuflore','vuflore.idplongee=plongee.idplongee')
                ->join('vufaune','vufaune.idplongee=plongee.idplongee')
                ->join('flore','flore.idflore=vuflore.idflore')
                ->join('faune','faune.idfaune=vufaune.idfaune')
                ->where('iduser',$iduser)
                ->where('plongee.idplongee',$idplongee)
                ->get()
                ->result();
    }
}
