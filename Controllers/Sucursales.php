<?php 
session_start();
class Sucursales extends Controllers{
	public function __construct(){
		parent::__construct();
	}
	public function sucursales(){
		$pages = getPages();
		for ($i=0; $i <count($pages); $i++) { 
			$pages[$i]['submenu'] = getSubPages($pages[$i]['idpage']);
		}	
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "Tortaza";
		$data['page_url'] = "Sucursales";
		$data['pages'] = $pages;
		$data['info'] = setPages($data['page_url']);
		$this->views->getView($this,"sucursales",$data); 
	}
} 
?>