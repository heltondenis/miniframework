<?php 
/**
 * 
 */
class Router {
	
	private function __construct() {}

	public static function getInstance(){
		static $inst = null;
		if ($inst === null) {
			$inst new Router();
		}
		return $inst;
	}

	public function load(){

	}

	public function loadRouteFile($f){
		if(file_exists('routes/'.$f.'.php')){
			require 'routes/'.$f.'.php';
		}
	}

}



 ?>