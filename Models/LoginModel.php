<?php 
class LoginModel extends Mysql{
	private $intIdUsuario;
	private $strUsuario;
	private $strPassword;
	private $strToken;

	public function __construct(){
		parent::__construct();
	}	

	public function loginUser($usuario, $password){
		$this->strUsuario = $usuario;
		$this->strPassword = $password;
		$sql = "SELECT codigo,estado FROM tb_usuario WHERE usuario='$this->strUsuario' AND clave='$this->strPassword' AND estado='A'";
		$request = $this->select($sql);
		return $request;
	}

	public function sessionLogin($iduser){
		$this->intIdUsuario = $iduser;
			//BUSCAR ROLE 
		$sql = "SELECT tu.codigo,tu.usuario,tu.razonsocial,ttu.id,ttu.descripcion,tp.codtiend,tu.estado FROM tb_usuario tu INNER JOIN tb_tipo_usuario ttu ON tu.codtipusu=ttu.id INNER JOIN tb_permiso tp ON tu.codigo=tp.codusu WHERE tu.codigo = $this->intIdUsuario";
		$request = $this->select($sql);
		$_SESSION['userData'] = $request;
		return $request;
	}



	public function setResetPassUser($codigo, $token){
		$this->intIdUsuario = $codigo;
		$this->strToken = $token;
		$sql = "UPDATE tb_usuario SET clave = ? WHERE codigo = $this->intIdUsuario";
		$arrData = array($this->strToken);
		$request = $this->update($sql,$arrData);
		return $request;
	}

	public function getUserEmail($strEmail){
		$this->strUsuario = $strEmail;
		$sql = "SELECT idpersona,nombres,apellidos,status FROM persona WHERE 
		email_user = '$this->strUsuario' and  
		status = 1 ";
		$request = $this->select($sql);
		return $request;
	}

	public function setTokenUser($idpersona, $token){
		$this->intIdUsuario = $idpersona;
		$this->strToken = $token;
		$sql = "UPDATE persona SET token = ? WHERE idpersona = $this->intIdUsuario ";
		$arrData = array($this->strToken);
		$request = $this->update($sql,$arrData);
		return $request;
	}

	public function getUsuario($email, $token){
		$this->strUsuario = $email;
		$this->strToken = $token;
		$sql = "SELECT idpersona FROM persona WHERE 
		email_user = '$this->strUsuario' and 
		token = '$this->strToken' and 					
		status = 1 ";
		$request = $this->select($sql);
		return $request;
	}

	public function insertPassword($idPersona, $password){
		$this->intIdUsuario = $idPersona;
		$this->strPassword = $password;
		$sql = "UPDATE persona SET password = ?, token = ? WHERE idpersona = $this->intIdUsuario ";
		$arrData = array($this->strPassword,"");
		$request = $this->update($sql,$arrData);
		return $request;
	}


}
?>