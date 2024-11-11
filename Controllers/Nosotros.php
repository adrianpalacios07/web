<?php 
session_start();
class Nosotros extends Controllers{
	public function __construct(){
		parent::__construct();
	}
	public function nosotros(){
		$pages = getPages();
		for ($i=0; $i <count($pages); $i++) { 
			$pages[$i]['submenu'] = getSubPages($pages[$i]['idpage']);
		}	
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "Tortaza";
		$data['page_url'] = "Nosotros";
		$data['pages'] = $pages;
		$data['info'] = setPages($data['page_url']);
		// $data['subpages'] = $subpages;
		$this->views->getView($this,"nosotros",$data); 
	}
} 
?>