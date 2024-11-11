<?php
	class PanelModel extends Mysql{
		
		public function __construct(){
			parent::__construct();
		}
        public function updateSetData($idpage,$titulo,$contenido,$estado) {
            $sql = "UPDATE tb_pagina SET titulo = ?,contenido = ?, estado = ? WHERE idpage = $idpage ";
            $arrayData = array("$titulo","$contenido","$estado");
            $request = $this->update($sql,$arrayData);
            return $request;
        }
	}
 ?>