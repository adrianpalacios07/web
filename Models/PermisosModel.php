<?php 
class PermisosModel extends Mysql{
	public $intIdpermiso;
	public $intRolid;
	public $intModuloid;
	public $r;
	public $w;
	public $u;
	public $d;

	public function __construct(){
		parent::__construct();
	}

	public function selectModulos(){
		$sql = "SELECT * FROM tb_modulo WHERE estado != 'X'";
		$request = $this->select_all($sql);
		return $request;
	}	

	public function selectPermisosRol($idrol){
		$this->intRolid = $idrol;
		$sql = "SELECT * FROM tb_permisos WHERE rolid = $this->intRolid";
		$request = $this->select_all($sql);
		return $request;
	}

	public function deletePermisos($idrol){
		$this->intRolid = $idrol;
		$sql = "DELETE FROM tb_permisos WHERE rolid = $this->intRolid";
		$request = $this->delete($sql);
		return $request;
	}

	public function insertPermisos($idrol, $idmodulo, $r, $w, $u, $d){
		$this->intRolid = $idrol;
		$this->intModuloid = $idmodulo;
		$this->r = $r;
		$this->w = $w;
		$this->u = $u;
		$this->d = $d;
		$query_insert  = "INSERT INTO tb_permisos(codrol,codmodulo,r,w,u,d) VALUES(?,?,?,?,?,?)";
		$arrData = array($this->intRolid, $this->intModuloid, $this->r, $this->w, $this->u, $this->d);
		$request_insert = $this->insert($query_insert,$arrData);		
		return $request_insert;
	}

	public function permisosModulo($idrol){
		$this->intRolid = $idrol;
		$sql = "SELECT p.codrol,p.codmodulo,m.titulo as modulo,p.r,p.w,p.u,p.d FROM tb_permisos p INNER JOIN tb_modulo m ON p.codmodulo = m.idmodulo WHERE p.codrol = $this->intRolid";
		$request = $this->select_all($sql);
		$arrPermisos = array();
		for ($i=0; $i < count($request); $i++) { 
			$arrPermisos[$request[$i]['codmodulo']] = $request[$i];
		}
		return $arrPermisos;
	}

	public function getRol($idrol){
		$this->intRolid = $idrol;
		$sql = "SELECT * FROM rol WHERE idrol = $this->intRolid";
		$request = $this->select($sql);
		return $request;
	}
}
?>