<?php 
class Errors extends Controllers{
	public function __construct(){
		parent::__construct();
	}
	public function notFound(){
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "error";
		$data['page_functions_js'] = "functions_errors.js";
		$this->views->getView($this,"error",$data);		
	}
}
$notFound = new Errors ();
$notFound->notFound();
?>