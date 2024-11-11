<?php 
session_start();
class Catalogo extends Controllers{
	public function __construct(){
		parent::__construct();
	}
    public function catalogo() {
		$pages = getPages();
		for ($i=0; $i <count($pages); $i++) { 
			$pages[$i]['submenu'] = getSubPages($pages[$i]['idpage']);
		}	
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "Tortaza";
		$data['page_url'] = "catalogo";
		$data['pages'] = $pages;
		// $data['subpages'] = $subpages;
		$this->views->getView($this,"catalogo",$data);
	}

    public function personalizado(){
		$pages = getPages();
		for ($i=0; $i <count($pages); $i++) { 
			$pages[$i]['submenu'] = getSubPages($pages[$i]['idpage']);
		}	
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "Tortaza";
		$data['page_url'] = "personalizado";
		$data['pages'] = $pages;
		// $data['subpages'] = $subpages;
		$this->views->getView($this,"personalizado",$data); 
	}

} 
?>