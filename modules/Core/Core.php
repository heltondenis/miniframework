<?php 
// Utilizando Padrão Singleton
class Core {
	
	private function __construct(){}

	public static function getInstance(){
		static $inst = null;
		if ($inst == null) {
			$inst new Core();
		}
		return $inst;
	}
}

 ?>