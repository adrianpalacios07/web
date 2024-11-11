<?php
class Logout{
	public function __construct(){
		session_start();
		session_unset();
		session_destroy();
		setcookie("usu_tortaza", "", time(), "/");
		setcookie("pass_tortaza", "", time(), "/");
		header('location: '.base_url().'/login');
		die();
	}
}
 ?>