<?php
class PaginasModel extends Mysql{
	public function __construct(){
		parent::__construct();
	}

	public function selectsPages(){
		$sql = "SELECT * FROM tb_pagina WHERE estado = 'A'";
		$request = $this->select_all($sql);
		return $request;
	}

	public function selectPage($ipagina){
		$sql = "SELECT * FROM tb_pagina WHERE idpage = $ipagina";
		$request = $this->select($sql);
		return $request;
	}

	public function updatePost($ipagina, $titulo, $contenido,  $portada, $status){
		$sql = "UPDATE tb_pagina SET titulo = ?, contenido = ?, portada = ?, estado = ? WHERE idpage = $ipagina";
		$arrData = array("$titulo", "$contenido", "$portada", "$status");
		$request = $this->update($sql,$arrData);
	    return $request;
	}

	public function insertPost($titulo, $contenido, $portada, $ruta, $status){
		$sql = "SELECT * FROM tb_pagina WHERE ruta = '{$ruta}'";
		$request = $this->select_all($sql);
		if(empty($request)){
			$query_insert  = "INSERT INTO tb_pagina(titulo,contenido,portada,ruta,estado)VALUES(?,?,?,?,?)";
			$arrData = array("$titulo", "$contenido", "$portada", "$ruta", "$status");
			$request_insert = $this->insert($query_insert,$arrData);
        	$return = $request_insert;
		}else{
			$return = 0;
		}
		return $return;
	}

	public function deletePagina($ipagina){
		$sql = "UPDATE tb_pagina SET estado = ? WHERE idpage = $ipagina";
		$arrData = array('X');
		$request = $this->update($sql,$arrData);
		return $request;
	}
}
?>