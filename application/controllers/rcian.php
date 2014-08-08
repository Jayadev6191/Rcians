<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rcian extends CI_Controller {
    // variable
     public function __construct()
    {
        parent::__construct();
        $this->load->model('managerapi');     
    }
    public function index() {
        $this -> overview();
    }

    public function overview() {
        $this -> load -> view('template/header');
        $this -> load -> view('page/landing');
        $this -> load -> view('template/footer');
    }

    public function home() {
        $this -> load -> view('template/header');
        $this -> load -> view('page/home');
        $this -> load -> view('template/footer');
    }

    public function register() {
        $this->managerapi->register();
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
