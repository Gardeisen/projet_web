<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Flore extends CI_Controller{
    
   public function __construct() {
        parent::__construct();
        $this->load->model('flore_model');
    } 
    
    public function index(){
    $data['query']= $this->flore_model->index();
    $this->load->view('flore/index',$data);
  }
  
  
}
