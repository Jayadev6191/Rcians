<?php
class managerapi extends CI_Model {

	function __construct() {
		parent::__construct();
        $this->REST_API = array(
            'user' => array(
                'sign_up'=>'https://api.moback.com/usermanager/api/user/createUser',
                'log_in'=>'https://api.moback.com/usermanager/api/user/login',
                'get_user'=>'https://api.moback.com/usermanager/api/user/getUser'
            ),
            'object'=>array(
                'get_all_tables'=>'https://api.moback.com/objectmanager/api/object/tables',
                'get_table'=>'https://api.moback.com/objectmanager/api/object/getTable/',
                'update_table'=>'https://api.moback.com/objectmanager/api/object/table/update',
                'add_row'=>'https://api.moback.com/objectmanager/api/object/create',
                'update_row'=>'https://api.moback.com/objectmanager/api/object/update',
                'delete_row'=>'https://api.moback.com/objectmanager/api/object/delete',
                'row_count'=>'https://api.moback.com/objectmanager/api/object/getCount/',
                'get_row'=>'https://api.moback.com/objectmanager/api/object/get'
                )
            );
        $this->CONFIG = array(
            'envTypeKey'=>'ZTI4NWZhNTEtNjMwZi00YmE2LTkwMGYtOGI3NDZhMzg3OGEy',
            'appKey' => 'OTY4ZWU2ZjgtN2YyZi00OGUzLWJkM2UtMDgxMWY1M2E2NjAx',
            'contentType'=>'application/json',
        );
        $this->TABLE = array(
            
        );
	}
	
    function register(){
        // print_r($this->REST_API);
        // $path = $this->REST_API['user']['sign_up'];
        // $this->rest_execute($path);
        // echo($path);
        print_r($this->getAllTable());
    }
    function getTableByName($tableName){
        $allTable = $this->getAllTable();
        if(isset($allTable['object'])){
            foreach($allTable['object'] as $table){
                if($table['name'] == $tableName){
                     return $this->getTable($table['id']);
                }
            }
        }
        return null;
    }
    function getAllTable(){
        $path = $this->REST_API['object']['get_all_tables'];
        // echo($path);
        return $this->rest_execute($path,$this->CONFIG['appKey']
                             ,$this->CONFIG['envTypeKey'],$this->CONFIG['contentType'],'');
        
    }
    function getTable($tableId){
        $path = $this->REST_API['object']['get_all_tables'];
        // echo($path);
        return $this->rest_execute($path,$this->CONFIG['appKey']
                             ,$this->CONFIG['envTypeKey'],$this->CONFIG['contentType'],'');
    }
    function rest_execute($path, $appKey, $envTypeKey, $contentType, $parameters) {
    	// $config = om_getSiteConfig();
    	$url = $path;
        $fields_string = json_encode($parameters);
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 90);
    	curl_setopt($ch, CURLOPT_TIMEOUT, 120);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    	curl_setopt($ch, CURLOPT_HEADER, 0);
    	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:".$contentType, "X-Moback-Environment-Key:" . $envTypeKey, "X-Moback-Application-Key:" . $this->CONFIG['appKey']));
    	curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($parameters));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    	$response = curl_exec($ch);
    	//echo $url.json_encode($response);
    	// exit;
    	curl_close($ch);
    	return $response;
    }
}
?>