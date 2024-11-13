<?php 
session_start();
class Settings extends Controllers{
	public function __construct(){
		parent::__construct();
		if(empty($_SESSION['login'])){
			redireccionar('/login');
			die();
		}
		//getPermisos(MDASHBOARD);
	}
	public function Settings(){
		$settings = getFooter();
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "settings";
		$data['page_sub'] = "";
		$data['settings'] = $settings;
	    $data['page_functions_js'] = "functions_settings.js";
		$this->views->getView($this,"settings",$data);
	}
} 
?>