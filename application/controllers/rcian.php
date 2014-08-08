<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Rcian extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('managerapi');
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
	}

	public function test() {
		// $tmp->;
		// $this->managerapi->register();
		// $p = array("table"=>"Meals", "data"=> array("Cuisine"=>"V1"));
		// print_r($this->managerapi->addRow($p));
		// $p1 = array("table" => "Meals", "objectId" => '53e46399e4b0f681af035445');
		// echo "del";
		// $this -> managerapi -> delRow($p2);
		$p2 = array("table" => "Meals","objectId"=>"53e43786e4b0f681af035437", "data" => array("Note" => "aaafdf"));
		print_r(json_encode($p2, JSON_FORCE_OBJECT));
		// echo "edit";
		print_r($this -> managerapi -> updateRow($p2));
		
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
