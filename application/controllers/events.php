<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Events extends CI_Controller {
    // variable
     public function __construct()
    {
        parent::__construct();
        $this->load->model('managerapi');    
        $this->load->library('session'); 
    }
    public function index() {
        $this -> overview();
    }

    public function overview() {
        $this -> load -> view('template/header');
        $this -> load -> view('page/events');
        $this -> load -> view('template/footer');       
    }
    
    
 public function getEvents(){
   $this->managerapi->getTableByName('Events');
 }
 public function addEvent(){
     $param = $_POST;
      $r = $this->managerapi->addRow($param);
      print_r($r);
 }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
