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

}



 ?>