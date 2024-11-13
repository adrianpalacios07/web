<?php
class EmpresaModel extends Mysql{
	public function __construct(){
		parent::__construct();
	}

	public function selectsEmpresas(){
		$sql = "SELECT * FROM tb_footer";
		$request = $this->select_all($sql);
		return $request;
	}

	public function selectEmpresa($ipagina){
		$sql = "SELECT * FROM tb_footer WHERE id = $ipagina";
		$request = $this->select($sql);
		return $request;
	}

	public function updateEmpresa($id, $descripcion, $info_adicional,  $info_adicional2){
		$sql = "UPDATE tb_footer SET descripcion = ?, info_adicional = ?, info_adocional2 = ? WHERE idpage = $id";
		$arrData = array("$descripcion", "$info_adicional", "$info_adicional2");
		$request = $this->update($sql,$arrData);
	    return $request;
	}

	// public function insertPost($titulo, $contenido, $portada, $ruta, $status){
	// 	$sql = "SELECT * FROM tb_pagina WHERE ruta = '{$ruta}'";
	// 	$request = $this->select_all($sql);
	// 	if(empty($request)){
	// 		$query_insert  = "INSERT INTO tb_pagina(titulo,contenido,portada,ruta,estado)VALUES(?,?,?,?,?)";
	// 		$arrData = array("$titulo", "$contenido", "$portada", "$ruta", "$status");
	// 		$request_insert = $this->insert($query_insert,$arrData);
    //     	$return = $request_insert;
	// 	}else{
	// 		$return = 0;
	// 	}
	// 	return $return;
	// }

	// public function deletePagina($ipagina){
	// 	$sql = "UPDATE tb_pagina SET estado = ? WHERE idpage = $ipagina";
	// 	$arrData = array('X');
	// 	$request = $this->update($sql,$arrData);
	// 	return $request;
	// }
}
?>