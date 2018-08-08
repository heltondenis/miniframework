<?php 
// Utilizando Padrão Singleton
class Core {

	private $config;
	
	private function __construct(){}

	public static function getInstance(){
		static $inst = null;
		if ($inst == null) {
			$inst new Core();
		}
		return $inst;
	}

	public function run($cfg){
		$this->config = $cfg;
	}

	public function getConfig($name){
		return $this->config[$name];
	}
}

 ?>