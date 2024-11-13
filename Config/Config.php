<?php
	$url = $_SERVER["HTTP_HOST"];
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://".$url; 
  }else{
    $url = "http://".$url; 
  }
  $app = dirname($_SERVER['PHP_SELF']);
  define('BASE_URL', trim($url.$app,'/'));
    
  
  // datos de la base de datos
	const DB_HOST = "localhost";
	const DB_NAME = "wwwtortaza_hgadmin";
	const DB_USER = "root";
	const DB_PASSWORD = "123456";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "S/";
	const CURRENCY = "PEN";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";
	
	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Tortaza";
	const EMAIL_REMITENTE = "contacto@tortaza.com.pe";
	const NOMBRE_EMPESA = "Tortaza";
	const WEB_EMPRESA = "tortaza.com.pe";

	const DESCRIPCION = "La mejor tienda en línea con buenas tortas.";
	const SHAREDHASH = "TortazaVirtual";

	//Datos Empresa
	const DIRECCION = "Lima Este";
	const TELEMPRESA = "+(51)987654321";
	const WHATSAPP = "+51987654321";
	const EMAIL_EMPRESA = "ventas@tortaza.com.pe";
	const EMAIL_PEDIDOS = "contacto@tortaza.com.pe"; 
	const EMAIL_SUSCRIPCION = "contacto@tortaza.com.pe";
	const EMAIL_CONTACTO = "contacto@tortaza.com.pe";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'tortaza';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;
	const RCLIENTES = 4;

	//Modulos
	const MDASHBOARD = 1;
	const MPEDIDOS = 2;
	const MCATEGORIAS = 3;
	const MSUSCRIPTORES = 4;
	const MDCONTACTOS = 5;
	const MDPAGINAS = 20;
	const MDEMPRESAS = 21;

	//Páginas
	const PINICIO = 1;
	const PNOSOTROS = 2;
	const PEQUIPO = 3;
	const PCATALOGO = 4;
	const PSUCURSALES = 5;
	const PCONTACTO = 6;
	const PTERMINOS = 7;
	const PERROR = 8;


	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/tortazaOficial";
	const INSTAGRAM = "https://www.instagram.com/torteleriatortaza/";
	//error_reporting(0);
	error_reporting( E_ALL & ~E_NOTICE );
	//
	date_default_timezone_set("America/Lima");
?>