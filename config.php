<?php

$fecha = date('Y-m-d');
$hora =  date ("H:i:s");
require_once("preference.php");


//CONEXION DE LA BASE DE DATOS DE RINTERA	
$db0_host = '192.168.159.5';	
$db0_user = 'wbproduction1';
$db0_pass = '4Dm1NPr0'; 
$db0_name = 'gepladoc';





//PARAMETROS
$WebsiteURL = "https://plataformaitavu.tamaulipas.gob.mx/gepladoc";
$URLWebservice = "https://plataformaitavu.tamaulipas.gob.mx/gepladoc/ws/get.php";

$TokenKey = "Prueba"; //<-- llave para el webservice


if (function_exists('mysqli_connect')) {		
    $db0 = new mysqli($db0_host,$db0_user,$db0_pass,$db0_name);
	$acentos = $db0->query("SET NAMES 'utf8'"); // para los acentos
	// var_dump($db0);
        // global $db0;
        
    }else{			
        die ("Error en la conexion a la base de datos principal de RINTERA");
}




$session_auto_start = 1;

//     //session.auto_start = 0 o 1;  si esta en 1, da error 
//     //Warning: session_name(): Cannot change session name when session is active, al utilizar session_name(); ya que agrega    session_start(); al automaticamente





?>