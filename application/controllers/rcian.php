<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rcian extends CI_Controller {
  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('landing');
    $this->load->view('template/footer');
  }
  public function home()
  {
    $this->load->view('template/header');
    $this->load->view('landing');
    $this->load->view('template/footer');
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */