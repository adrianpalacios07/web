<?php 
session_start();
class Dashboard extends Controllers{
	public function __construct(){
		parent::__construct();
		if(empty($_SESSION['login'])){
			redireccionar('/login');
			die();
		}
		//getPermisos(MDASHBOARD);
	}
	public function Dashboard(){
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "dashboard";
		$data['page_sub'] = "";
	    $data['page_functions_js'] = "functions_dashboard.js";
		$this->views->getView($this,"dashboard",$data);
	}
} 
?>