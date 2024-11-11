<?php 
session_start();
class Panel extends Controllers{
	public function __construct(){
		parent::__construct();
	}
	public function panel(){
		$pages = allPages();
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "Tortaza";
		$data['page_url'] = "panel";
		$data['pages'] = $pages;
		$this->views->getView($this,"panel",$data); 
	}

	public function edit($idp) {
		// para pasar un ID por la pagina solo es 
		//pasar el parametro en la función
		$pagesid = getInfoPanel($idp);
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "Tortaza";
		$data['page_url1'] = "edit";
		$data['info'] = $pagesid;	
		$this->views->getView($this,"edit",$data); 
	}

	public function nuevoDetallePagina() {
		if ($_POST) {
				// dep($_POST);
				// die();
			$idpage = $_POST['txtid'];
			$txtname = $_POST['txtname'];
			$txtestado = $_POST['txtestado'];
			$txtcontenido = htmlentities($_POST['txtcontenido']);

			$request = $this->model->updateSetData($idpage,$txtname,$txtcontenido,$txtestado);
			
			if ($request > 0) {
				$array_response = array("status" => true,"MSG" => "SE LOGRO");
			}else{
				$array_response = array("status" => false,"MSG" => "NO :(");
			}
			echo json_encode($array_response,JSON_UNESCAPED_UNICODE);
		}
	}
} 
?>