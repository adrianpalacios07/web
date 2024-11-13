<?php 
session_start();
class Empresa extends Controllers{
	public function __construct(){
		parent::__construct();
		if(empty($_SESSION['login'])){
			redireccionar('/login');
			die();
		}
		getPermisos(MDPAGINAS);
	}
	public function empresa(){
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "empresas";
		$data['page_sub'] = "";
	    $data['page_functions_js'] = "functions_empresa.js";
		$this->views->getView($this,"empresas",$data);
	}
	

    public function listaEmpresas(){
		if($_SESSION['permisosMod']['r']){
			$arrData = $this->model->selectsEmpresas();
			for ($i=0; $i < count($arrData); $i++) {
				$btnView = '';
				$btnEdit = '';
				$btnDelete = '';
				$urlPage = base_url()."/";
				if($_SESSION['permisosMod']['u']){
					$btnEdit = '<a title="Editar página" href="'.base_url().'/empresa/editar/'.$arrData[$i]['id'].'" class="btn btn-primary btn-sm"> <i class="bi bi-pencil-fill"></i></a>';
				}
				if($_SESSION['permisosMod']['d']){
					$btnDelete = '<button class="btn btn-danger btn-sm" onClick="fntDelInfo('.$arrData[$i]['id'].')" title="Eliminar página"> <i class="bi bi-trash-fill"></i></button>';
				}		
				$arrData[$i]['options'] = '<div class="text-center">'.$btnView.' '.$btnEdit.' '.$btnDelete.'</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
		}
		die();
	}
	public function Editar($codpage){
		if(empty($_SESSION['permisosMod']['u'])){
			redireccionar("/empresas");
		}

		$page = $this->model->selectEmpresa($codpage);
		if(empty($page)){
			redireccionar("/empresas");
		}
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = "Editar - ".$page['descripcion'];
		$data['page_name'] = "editar";
		$data['page_sub'] = "";
		$data['pagina'] = $page;
	    $data['page_functions_js'] = "functions_empresas.js";
		$this->views->getView($this,"editar",$data);
	}
	public function setPagina(){
		if($_POST){ 
			dep($_POST);
		}
	}
}

?>