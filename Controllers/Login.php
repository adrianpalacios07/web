<?php
session_start();
class Login extends Controllers{
	public function __construct(){
		parent::__construct();
		if(isset($_SESSION['login'])){
			redireccionar('/dashboard');
			die();
		}
	}

	public function Login(){
		if(isset($_COOKIE['usu_tortaza']) && isset($_COOKIE['pass_tortaza'])){
			$strUsuario  =  $_COOKIE['usu_tortaza'];
			$strPassword = $_COOKIE['pass_tortaza'];
			$requestUser = $this->model->loginUser($strUsuario, $strPassword);
			if(empty($requestUser)){
				setcookie("usu_tortaza", "", time(), "/");
				setcookie("pass_tortaza", "", time(), "/");
			}else{
				$arrData = $requestUser;
				if($arrData['estado'] == 'A'){
					$_SESSION['idUser'] = $arrData['idpersona'];
					$_SESSION['login'] = true;
					$arrData = $this->model->sessionLogin($_SESSION['idUser']);
					redireccionar('/dashboard');				
				}else{
					setcookie("usu_tortaza", "", time(), "/");
					setcookie("pass_tortaza", "", time(), "/");
				}
			}
	    }
		$data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "login";
		$data['page_functions_js'] = "functions_login.js";
		$this->views->getView($this,"login",$data);
	}

	public function loginUser(){
		if($_POST){
			if(empty($_POST['txtUsuario']) || empty($_POST['txtPassword'])){
				$arrResponse = array('status' => false, 'msg' => 'Error de datos' );
			}else{
				$strUsuario  =  strtolower(strClean($_POST['txtUsuario']));
				$strPassword = hash("SHA256",$_POST['txtPassword']);
				$requestUser = $this->model->loginUser($strUsuario, $strPassword);
				if(empty($requestUser)){
					$arrResponse = array('status' => false, 'msg' => 'El usuario o la contraseña es incorrecto.' ); 
				}else{
					$arrData = $requestUser;
					if($arrData['estado'] == 'A'){
						$_SESSION['idUser'] = $arrData['codigo'];
						$_SESSION['login'] = true;
						$arrData = $this->model->sessionLogin($_SESSION['idUser']);
						if(isset($_POST['cbxRecordar']) && $_POST['cbxRecordar']){
							$tiempo = 60 * 60 * 24 * 365;							
							setcookie("usu_sergeyco", "$strUsuario", (time () + $tiempo), "/");
							setcookie("pass_sergeyco", "$strPassword", (time () + $tiempo), "/");
						}
						//sessionUser($_SESSION['idUser']);
						$arrResponse = array('status' => true, 'msg' => 'ok');
					}else{
						$arrResponse = array('status' => false, 'msg' => 'Usuario inactivo.');
					}
				}
			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
		}
		die();
	}
}
?>