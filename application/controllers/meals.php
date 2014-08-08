<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Meals extends CI_Controller {
  
  public function __construct()
    {
        parent::__construct();
        $this->load->model('managerapi');     
    }
  public function index()
  {
	  $this->load->view('template/header');
    $this->load->view('meals');
  }
  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */