<?php
class managerapi extends CI_Model {

	function __construct() {
		parent::__construct();
		$this -> REST_API = array('file'=>array('upload'=>'https://api.moback.com/filemanager/api/file/upload')
		,'user' => array('sign_up' => 'https://api.moback.com/usermanager/api/user/createUser'
		, 'log_in' => 'https://api.moback.com/usermanager/api/user/login', 'get_user' => 'https://api.moback.com/usermanager/api/user/getUser', 'get_user'=>'https://api.moback.com/usermanager/api/user/getUser')
		, 'object' => array('get_all_tables' => 'https://api.moback.com/objectmanager/api/object/tables', 'get_table' => 'https://api.moback.com/objectmanager/api/object/getTable/', 'update_table' => 'https://api.moback.com/objectmanager/api/object/table/update', 'add_row' => 'https://api.moback.com/objectmanager/api/object/create', 'update_row' => 'https://api.moback.com/objectmanager/api/object/update', 'delete_row' => 'https://api.moback.com/objectmanager/api/object/delete', 'row_count' => 'https://api.moback.com/objectmanager/api/object/getCount/', 'get_row' => 'https://api.moback.com/objectmanager/api/object/get', 'get_all' => 'https://api.moback.com/objectmanager/api/object/getAll'));
		$this -> CONFIG = array('envTypeKey' => 'ZTI4NWZhNTEtNjMwZi00YmE2LTkwMGYtOGI3NDZhMzg3OGEy', 'appKey' => 'OTY4ZWU2ZjgtN2YyZi00OGUzLWJkM2UtMDgxMWY1M2E2NjAx', 'contentType' => 'application/json', );
		$this -> TABLE = array();
	}

	function register($parameters) {
		$path = $this -> REST_API['user']['sign_up'];
		return $this -> rest_execute($path, $this -> CONFIG['contentType'], $parameters, 'PUT');
	}

	function logIn($parameters) {
		$path = $this -> REST_API['user']['log_in'];
		$response = $this -> rest_execute($path, $this -> CONFIG['contentType'], $parameters, 'POST');
		print_r($response);
		return $response;
	}

	function logOut($parameters) {

	}

	function getTableByName($tableName) {
		$response = $this -> getAll(array('table' => $tableName));
		print_r($response);
		return $response;
	}

	function getAllTable() {
		$path = $this -> REST_API['object']['get_all_tables'];
		return $this -> rest_execute($path, $this -> CONFIG['contentType'], '', null);

	}

	function getTable($tableId) {
		$path = $this -> REST_API['object']['get_table'] . $tableId;
		return $this -> rest_execute($path, $this -> CONFIG['contentType'], '', null);
	}

	function getRow($parameters) {
		$path = $this -> REST_API['object']['get_row'];
		return $this -> rest_execute($path, $this -> CONFIG['contentType'], $parameters, null);
	}

	function getAll($parameters) {
		$path = $this -> REST_API['object']['get_all'];

		return $this -> rest_execute($path, $this -> CONFIG['contentType'], $parameters, null);
	}

	function addRow($parameters) {
		$path = $this -> REST_API['object']['add_row'];
		return $this -> rest_execute($path, $this -> CONFIG['contentType'], $parameters, 'PUT');
	}

	function delRow($parameters) {
		$path = $this -> REST_API['object']['delete_row'];
		return $this -> rest_execute($path, $this -> CONFIG['contentType'], $parameters, 'POST');
	}

	function updateRow($parameters) {
		$path = $this -> REST_API['object']['update_row'];
		return $this -> rest_execute($path, $this -> CONFIG['contentType'], $parameters, 'PUT');
	}
    
    function uploadFile($filePath, $fileName){
        $path = $this -> REST_API['file']['upload'];
        return $this -> filemanager($path, $filePath, $fileName);
    }
    
	function rest_execute($path, $contentType, $parameters, $custome_request) {
		$url = $path;
		if (is_string($parameters) && $this -> isJson($parameters)) {
			$fields_string = $parameters;
		} else {
			$fields_string = json_encode($parameters, JSON_FORCE_OBJECT);
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 90);
		curl_setopt($ch, CURLOPT_TIMEOUT, 120);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:" . $contentType, "X-Moback-Environment-Key:" . $this -> CONFIG['envTypeKey'], "X-Moback-Application-Key:" . $this -> CONFIG['appKey']));
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, count($parameters));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
		if($custome_request != null);
-			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $custome_request);
		$response = curl_exec($ch);
		// echo $url.json_encode($response);
		// exit;
		curl_close($ch);
		return $response;
	}

    function filemanager($path,$tmpfile,$filename)
    {
        $url = $path;
        $sesstoken = $this->session->userdata('ssotoken');
        $ch = curl_init();
       // $filedata = array( 'attachments' => '@'.$tmpfile.';filename='.$filename); //,'MediaType' => 'MULTIPART_FORM_DATA'
        // $args['file'] = new CurlFile($tmpfile, 'file/pdf');
         $args['file'] = new CurlFile($filename, 'multipart/form-data');
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 90);       
        curl_setopt($ch, CURLOPT_TIMEOUT, 120);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data",'X-Moback-SessionToken-Key:'.$sesstoken, "X-Moback-Environment-Key:" . $this -> CONFIG['envTypeKey']
        , "X-Moback-Application-Key:" . $this -> CONFIG['appKey'],'description: asdadsda'));
        curl_setopt($ch, CURLOPT_URL, $url);
       
        $response = curl_exec($ch);
        // echo $url.json_encode($response);
        echo json_encode(curl_getinfo($ch));
        // $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }  
	function isJson($string) {
		json_decode($string);
		return (json_last_error() == JSON_ERROR_NONE);
	}

}
?>