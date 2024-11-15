<?php 
require_once("Libraries/Core/Mysql.php");
trait TTienda{	
	public function listTiendas(){
		$this->con = new Mysql();
		$query = "SELECT idtnd,nomcort,nomtnd,envio,delivery FROM tb_tienda WHERE estado='A'";
		$request = $this->con->select_all($query);
		return $request;
	}
}