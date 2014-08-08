<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Meals extends CI_Controller {
  
 
  public function index()
  {
	$this->load->view('template/header');
    $this->load->view('meals');
  }
  
  
  public function getMealName()
  {
	  if(isset($_POST) && !empty($_POST)){
		  if(isset($_POST['mealname'])){
			  echo $_POST['mealname'];
		  }
	  } 
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */