<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apiused extends CI_Controller {
  
  public function __construct()
  {
       parent::__construct();
       $this->load->model('managerapi');    
       $this->load->library('session'); 
  }
   
  public function index()
  {
  $this->load->view('template/header');
  $this->load->view('apiused');
  }  
  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


/*{
"code":"1000",
"message":"getObmTable",

"table":

{"id":163,"applicationId":30,"name":"Meals","label":"test2","type":2,"deleted":0,"hidden":0,"createdDate":1407406058000,"lastModified":1407406058000,"lastModifiedBy":41,

"columns":[

{"id":934,"tableId":163,"name":"createdDate","label":"createdDate","type":0,"dataType":"date","deleted":0,"createdDate":1407406058000,"lastModified":1407406058000,"lastModifiedBy":41},

{"id":932,"tableId":163,"name":"Cuisine","label":"","type":0,"dataType":"STRING","deleted":0,"createdDate":1407406058000,"lastModified":1407406058000,"lastModifiedBy":41},

{"id":933,"tableId":163,"name":"objectId","label":"objectId","type":0,"dataType":"string","deleted":0,"createdDate":1407406058000,"lastModified":1407406058000,"lastModifiedBy":41},

{"id":935,"tableId":163,"name":"updatedDate","label":"updatedDate","type":0,"dataType":"date","deleted":0,"createdDate":1407406058000,"lastModified":1407406058000,"lastModifiedBy":41}

]

}


}*/