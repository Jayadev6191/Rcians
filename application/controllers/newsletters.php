<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class NewsLetters extends CI_Controller {
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
        $this -> load -> view('page/newletters');
        $this -> load -> view('template/footer');       
    }
    
    
    /*Upload the file temporarly to */
  public function upload_news_letter()
  {
    //$this->load->helper(array('form','url'));
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'pdf|doc';
    $config['max_size'] = '9000';   /* units in kilobytes */
    //$config['max_width']  = '2041';
    //$config['max_height']  = '3072';    
    $this->load->library('upload', $config);
    $this->load->helper('url');

    if ( ! $this->upload->do_upload())
    {
      $error = array('error' => $this->upload->display_errors());
      $error['status'] = 0;
      echo json_encode($error);
    }
    else
    {      
      $data = array('upload_data' => $this->upload->data());
      $data['status'] = 1;
      $data['path'] = base_url() . 'uploads/' . $data['upload_data']['file_name'];      
      echo json_encode($data);
    }
  }
  
  public function upload_file(){
      
      print_r($_POST);
      $filePath = $_POST["uploadfile"];
      $fileName = basename($_POST["filename"]);
      $this->managerapi->uploadFile($filePath, $fileName);
  }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
