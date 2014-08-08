<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Rcian extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('managerapi');
        $this->load->library('session');
	}

	public function index() {
		$this -> overview();
	}

	public function overview() {
		$this -> load -> view('template/header');
		$this -> load -> view('page/landing');
		$this -> load -> view('template/footer');
	}

	// public function home() {
		// $this -> load -> view('template/header');
		// $this -> load -> view('page/home');
		// $this -> load -> view('template/footer');
	// }

	public function register() {
		// print_r($_POST);
        $parameters = json_encode($_POST);
		print_r($this->managerapi->register($parameters));
	}
	public function logIn() {
		// print_r($_POST);
        $parameters = json_encode($_POST);$this->managerapi->logIn($parameters);
        $newdata = json_decode($this->managerapi->logIn($parameters));
        $this->session->set_userdata($newdata);
        // $this -> home();
	}
    public function logOut() {
        $this->session->sess_destroy();
        $this -> overview();
    }
	public function test() {
		$this->managerapi->getTableByName('Meals');
		print_r($_POST);
		
		// $tmp->;
		// $this->managerapi->register();
		// $p = array("table"=>"Meals", "data"=> array("Cuisine"=>"V1"));
		// print_r($this->managerapi->addRow($p));
		// $p1 = array("table" => "Meals", "objectId" => '53e46399e4b0f681af035445');
		// echo "del";
		// $this -> managerapi -> delRow($p2);
		// print_r($_POST);
		// $p2 = array("table" => "Meals","objectId"=>"53e43786e4b0f681af035437", "data" => array("Note" => "asd"));
		// print_r(json_encode($p2, JSON_FORCE_OBJECT));
		// print_r($this -> managerapi -> updateRow($p2));
		// $p3 = array("email"=>"m@g.com", "password" => "abc", "name"=>"n");
		// print_r(json_encode($p3, JSON_FORCE_OBJECT));
		// print_r($this -> managerapi -> register($p3));
		$p4 = array("userid"=>"m@g.com","password"=>"abc");
		$newdata = json_decode($this->managerapi->logIn($p4));

        $this->session->set_userdata($newdata);
        print_r($this->session->userdata('ssotoken'));
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
