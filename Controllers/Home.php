<?php 
session_start();
class Home extends Controllers{
	public function __construct(){
		parent::__construct();
	}
	public function home(){
		$pages = getPages();
		$cat = getCatalogo();
		for ($i=0; $i <count($pages); $i++) { 
			$pages[$i]['submenu'] = getSubPages($pages[$i]['idpage']);
		}	
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "Tortaza";
		$data['page_url'] = "home";
		$data['pages'] = $pages;
		$data['cat'] = $cat;
		
		// $data['subpages'] = $subpages;
		$this->views->getView($this,"home",$data); 
	}
} 
?>