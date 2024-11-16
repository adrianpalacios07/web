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
	$contactanos,$icono,$eslogan,
	$color,$colormenu,$delivery) {
		$sql = "UPDATE tb_informacion SET hora_atencion = ?,facebook = ?, instagram = ?,
		contactanos = ?, icono = ?, eslogan = ?, color = ?, color_menu = ?, delivery = ?
		WHERE id = '$idInfo'";
		$arrData = array("$horatencion","$facebook","$instagram","$contactanos","$eslogan","$icono",
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

	public function deleteBanner($ipagina){
		$sql = "UPDATE tb_banner SET estado = 'X' WHERE id = $ipagina";
		$arrData = array($ipagina);
		$request = $this->update($sql,$arrData);
		return $request;
	}
}
?>