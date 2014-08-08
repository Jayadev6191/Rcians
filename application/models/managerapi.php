<?php
class managerapi extends CI_Model {

	function __construct() {
		parent::__construct();
		$this -> REST_API = array('user' => array('sign_up' => 'https://api.moback.com/usermanager/api/user/createUser', 'log_in' => 'https://api.moback.com/usermanager/api/user/login', 'get_user' => 'https://api.moback.com/usermanager/api/user/getUser'), 'object' => array('get_all_tables' => 'https://api.moback.com/objectmanager/api/object/tables', 'get_table' => 'https://api.moback.com/objectmanager/api/object/getTable/', 'update_table' => 'https://api.moback.com/objectmanager/api/object/table/update', 'add_row' => 'https://api.moback.com/objectmanager/api/object/create', 'update_row' => 'https://api.moback.com/objectmanager/api/object/update', 'delete_row' => 'https://api.moback.com/objectmanager/api/object/delete', 'row_count' => 'https://api.moback.com/objectmanager/api/object/getCount/', 'get_row' => 'https://api.moback.com/objectmanager/api/object/get', 'get_all' => 'https://api.moback.com/objectmanager/api/object/getAll'));
		$this -> CONFIG = array('envTypeKey' => 'ZTI4NWZhNTEtNjMwZi00YmE2LTkwMGYtOGI3NDZhMzg3OGEy', 'appKey' => 'OTY4ZWU2ZjgtN2YyZi00OGUzLWJkM2UtMDgxMWY1M2E2NjAx', 'contentType' => 'application/json', );
		$this -> TABLE = array();
	}

	function register() {
		// $path = $this->REST_API['user']['sign_up'];
		print_r($this -> getTableByName('Meals'));
		// return $this->rest_execute($path,$this->CONFIG['contentType'],$parameters);
	}

	function logIn($parameters) {

	}

	function logOut($parameters) {

	}

	function getTableByName($tableName) {
		// $allTable = json_decode($this -> getAllTable());
		// if (isset($allTable -> object)) {
			// foreach ($allTable->object as $table) {
// 
				// if ($table -> name == $tableName) {
// 
					// $currenTable = json_decode($this -> getTable($table -> id));
					// // print_r($currenTable);
					// $parameters = array('objectId' => $currenTable -> table -> columns[0] -> id, 'table' => $currenTable -> table -> name);
					// // print_r(json_encode($parameters));
					// // return $this -> getRow($parameters);
					// return $this -> getAll(array('table'=>'Meals'));
				// }
			// }
		// }
		// return null;
		return $this -> getAll(array('table'=>$tableName));
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
	function addRow($parameters){
		$path = $this -> REST_API['object']['add_row'];
		return $this -> rest_execute($path, $this -> CONFIG['contentType'], $parameters, 'PUT');
	}
	function rest_execute($path, $contentType, $parameters, $custome_request) {
		$url = $path;
		$fields_string = json_encode($parameters, JSON_FORCE_OBJECT);
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
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $custome_request);
		$response = curl_exec($ch);
		//echo $url.json_encode($response);
		// exit;
		curl_close($ch);
		return $response;
	}

}
?>