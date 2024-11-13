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
		$data['page_title'] = "Editar - ".$page['titulo'];
		$data['page_name'] = "editar";
		$data['page_sub'] = "";
		$data['pagina'] = $page;
	    $data['page_functions_js'] = "functions_empresas.js";
		$this->views->getView($this,"editar",$data);
	}
	public function setEmpresa(){
		if($_POST){ 
			dep($_POST);
			// dep($_FILES);
			if(empty($_POST['txtTitulo']) || empty($_POST['txtContenido']) || empty($_POST['cboEstado'])){
				$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
			}else{
				$intIdPost = empty($_POST['codPage']) ? 0 : intval($_POST['codPage']);
				$strTitulo =  strClean($_POST['txtTitulo']);
				$strContenido = strClean($_POST['txtContenido']);
				$intStatus = $_POST['cboEstado'];
				$ruta = strtolower(clear_cadena($strTitulo));
				$ruta = str_replace(" ","-",$ruta);

				$foto   	 	= $_FILES['foto'];
				$nombre_foto 	= $foto['name'];
				$type 		 	= $foto['type'];
				$url_temp    	= $foto['tmp_name'];
				$imgPortada 	= '';
				$request = "";
				if($nombre_foto != ''){
					$imgPortada = 'img_'.md5(date('d-m-Y H:i:s')).'.jpg';
				}

				if($intIdPost == 0){
					$option = 1;
					$request = $this->model->insertPost($strTitulo, $strContenido, $imgPortada, $ruta, $intStatus);
				}else{
					if($_SESSION['permisosMod']['u']){
						if($nombre_foto == ''){
							if($_POST['foto_actual'] != '' AND $_POST['foto_remove'] == 0 ){
								$imgPortada = $_POST['foto_actual'];
							}
						}
						$request = $this->model->updatePost($intIdPost,$strTitulo, $strContenido,$imgPortada,$intStatus);
						$option = 2;
					}
				}
				if($request > 0 ){
					if($option == 1){
						$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
						if($nombre_foto != ''){ uploadImage($foto,$imgPortada); }
					}else{
						$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
						if($nombre_foto != ''){ uploadImage($foto,$imgPortada); }
						if(($nombre_foto == '' AND $_POST['foto_remove'] == 1 AND $_POST['foto_actual'] != '') || ($nombre_foto != '' AND $_POST['foto_actual'] != '')){
							deleteFile($_POST['foto_actual']);
						}
					}
				}else if($request == 0){
					$arrResponse = array('status' => false, 'msg' => 'La página ya existe.');
				}else{
					$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
				}
			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
		}

		die();
	}
} 
?>