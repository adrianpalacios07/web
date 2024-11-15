<?php
class SettingsModel extends Mysql{
	public function __construct(){
		parent::__construct();
	}


	public function getInformacion($cod) { 
		$sql = "SELECT * FROM tb_informacion WHERE id = '$cod'";
        $request = $this->select($sql);
        return $request;
	}
	public function getBanner() {
		$sql = "SELECT * FROM tb_banner WHERE estado = 'A'";
        $request = $this->select_all($sql);
        return $request;
	}

	public function getIdBanner($id){
		$sql = "SELECT * FROM tb_banner WHERE id = '$id'";
        $request = $this->select($sql);
        return $request;
	}

	public function insertBanner($imagen,$frase) {
		$sql = "INSERT INTO tb_banner (images,frase) VALUES (?,?)";
		$arrData = array("$imagen", "$frase");
		$request_insert = $this->insert($sql,$arrData);
		return $request_insert;
	}
	public function updateInfo($idInfo,$horatencion,$facebook,$instagram,
	$contactanos,$eslogan,
	$color,$colormenu,$delivery) {
		$sql = "UPDATE tb_informacion SET hora_atencion = ?,facebook = ?, instagram = ?,
		contactanos = ?, eslogan = ?, color = ?, color_menu = ?, delivery = ?
		WHERE id = '$idInfo'";
		$arrData = array("$horatencion","$facebook","$instagram","$contactanos","$eslogan",
		"$color","$colormenu","$delivery");
		$request = $this->update($sql,$arrData);
		return $request;
		}



// fin adrian

	public function setDeliveryTienda($itienda,$dmonto,$delivery){
		$sql = "UPDATE tb_tienda SET envio=?,delivery=? WHERE idtnd = $itienda";
		$arrData = array($dmonto, "$delivery");
		$request = $this->update($sql,$arrData);
		return $request;
	}

	public function setServiceWeb($codinfo,$ecomerce,$delivery,$thpedido,$thdesde,$thhasta,$ishowprice,$stextop,$sterminos){
		$sql = "UPDATE tb_informacion SET ecommerce=?,delivery=?,horamax=?,horainicio=?,horafin=?,mostrarprecio=?,textoprecio=?,terminos=? WHERE id = $codinfo";
		$arrData = array($ecomerce,$delivery,"$thpedido","$thdesde","$thhasta",$ishowprice,$stextop,"$sterminos");
		$request = $this->update($sql,$arrData);
		return $request;
	}
	// public function updatePost($ipagina, $titulo, $contenido,  $portada, $status){
	// 	$sql = "UPDATE tb_pagina SET titulo = ?, contenido = ?, portada = ?, estado = ? WHERE idpage = $ipagina";
	// 	$arrData = array("$titulo", "$contenido", "$portada", "$status");
	// 	$request = $this->update($sql,$arrData);
	//     return $request;
	// }

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