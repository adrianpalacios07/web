<?php 
session_start();
require_once("Models/Traits/TTienda.php");
class Settings extends Controllers{
	use TTienda;
	public function __construct(){
		parent::__construct();
		if(empty($_SESSION['login'])){
			redireccionar('/login');
			die();
		}
		//getPermisos(MDASHBOARD);
	}
	public function Settings(){
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "settings";
		$data['page_sub'] = "";
		$data['storeserice'] = $this->listTiendas();
		//datos enviados de banner y informacion
		$data['informacion'] = $this->model->getInformacion(1);
		$data['banner'] = $this->model->getBanner();

	    $data['page_functions_js'] = "functions_settings.js";
		$this->views->getView($this,"settings",$data);
	}
	public function setServicio(){
		if($_POST){
			$codinfo = $_POST['idInfo'];
			$ecomerce = isset($_POST['cbxEcommerce']) ? 1 : 0;
		    $delivery = $_POST['rbtDelivery'];//S|N
		    $tiendas = $_POST['tiendas'];
		    $thpedido = $_POST['txtHorPedi'];
		    $thdesde = $_POST['txtHorDesde'];
		    $thhasta = $_POST['txtHorHasta'];
		    $ishowprice = isset($_POST['cbxShowPrecios']) ? 1 : 0;
		    $stextshow = strClean($_POST['txtMostrarPrice']);
		    $sterminos = $_POST['txtTerminos'];		    
		    $request = $this->model->setServiceWeb($codinfo,$ecomerce,$delivery,$thpedido,$thdesde,$thhasta,$ishowprice,$stextshow,$sterminos);		    
		    if($request > 0){
		    	foreach ($tiendas as $store) {
			    	$codtienda = intval($store['codigo']);
			    	$monto = floatval($store['monto']);
			    	$estado = isset($store['estado']) ? 1 : 0;
			    	$request = $this->model->setDeliveryTienda($codtienda,$monto,$estado);
			    }
		    	$arrResponse = array('status' => true, 'msg' => 'Configuración actualizado');
			}else{
				$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
		}
		die();
	}
	public function listaBanner(){
	
			$arrData = $this->model->getBanner();
			for ($i=0; $i < count($arrData); $i++) {
				$btnView = '';
				$btnEdit = '';
				$btnDelete = '';
				
				$btnEdit = '<button type="button" class="btn btn-primary btn-sm"
				onclick="ftnEditar('.$arrData[$i]['id'].')" title="Editar"><i class="bi bi-pencil-fill"></i></button>';
				$btnDelete = '<button class="btn btn-danger btn-sm float-end" onclick="ftnEliminar('.$arrData[$i]['id'].')" 
				title="Eliminar página"> <i class="bi bi-trash-fill"></i></button>';
				$arrData[$i]['options'] = '<div class="text-center">'.$btnView.' '.$btnEdit.' '.$btnDelete.'</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
		
		die();
	}
	public function getIdBanner($cod) {
		$arrData = $this->model->getIdBanner($cod);
		if (empty($arrData)) {
			$array_response = array("status" => false, "msg" => "NO" ); 
		}else{
			$arrData['url_imagen'] = media()."/images/".$arrData['images'];
			$array_response = array("status" => true, "data" => $arrData );
		}
		echo json_encode($array_response,JSON_UNESCAPED_UNICODE);
	}
	public function insertBanner() {
		if ($_POST) {
			$imagesfiles = $_FILES['txtbanner'];
			$imagesname = $_FILES['txtbanner']['name'];
			$images = uploadImage($imagesfiles,$imagesname) ;
			$txtfrase = $_POST['txtfrase'];
			$txtbanner = $imagesname;
			$request = $this->model->insertBanner($txtbanner,$txtfrase);
			if($request > 0){
				$array_response = array("status" => true,"MSG" => "SI");
			}else{
				$array_response = array("status" => false,"MSG" => "NO :(");
			}
			echo json_encode($array_response,JSON_UNESCAPED_UNICODE);
		}
	}
	public function updateInfo() {
		if ($_POST) {
			$idinfo =$_POST['txtidinfo'];
			$txthoratencion = $_POST['txthoraatencion'];
			$txtfacebook = $_POST['txtfacebook'];
			$txtinstagram = $_POST['txtinstagram'];
			$txtcontactanos = $_POST['txtcontactanos'];
			$txteslogan = $_POST['txteslogan'];
			$txticononame = $_FILES['txticono']['name'];	
			$txticono = $txticononame;
			$txtcolor = $_POST['txtcolor'];
			$txtcolormenu = $_POST['txtcolormenu'];
			$txtdelivery = ($_POST['txtdelivery'] == 'on') ? 'S':'N';
			$request = $this->model->updateInfo($idinfo,$txthoratencion,$txtfacebook,
			$txtinstagram,$txtcontactanos,
			$txteslogan,$txticono,$txtcolor,$txtcolormenu,$txtdelivery);

			if ($request > 0) {
				$array_response = array("status" => true,"MSG" => "SE LOGRO 1");
			}else{
				$array_response = array("status" => false,"MSG" => "NO :(");
			}
			echo json_encode($array_response,JSON_UNESCAPED_UNICODE);
		}
	}
	public function delBanner($cod){
		if($_POST){
			// $intIdpagina = intval($_POST['idPagina']);
			$requestDelete = $this->model->deleteBanner($cod);
			if($requestDelete){
				$arrResponse = array('status' => true, 'MSG' => 'Se ha eliminado la banner');
			}else{
				$arrResponse = array('status' => false, 'MSG' => 'Error al eliminar la banner.');
			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
		}
		die();
	}
} 
?>