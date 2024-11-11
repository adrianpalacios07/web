<?php
	class HomeModel extends Mysql{
		private $strEmail;
		public function __construct(){
			parent::__construct();
		}

		public function inserCustomerE(string $correo){
			$this->strEmail = $correo;
			$return = 0;
			$sql = "SELECT * FROM tb_customer WHERE 
					emailcustomer = '{$this->strEmail}'";
			$request = $this->select_all($sql);
			if(empty($request)){
				$query_insert  = "INSERT INTO tb_customer(emailcustomer)VALUES(?)";
	        	$arrData = array($this->strEmail);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
	        return $return;
		}
		
		public function listatiendas(){
			$sql = "SELECT nomcort,nomtnd,direccion,telefono FROM tb_tienda WHERE estado = 'A' order by nomtnd asc";
			$request = $this->select_all($sql);
			return $request;
		}
	}
 ?>