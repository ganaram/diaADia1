<?php

//Construimos la URL
$url = $_SERVER['REQUEST_SCHEME'] ."://";
$serverName = $_SERVER['SERVER_NAME'] ."/";
$urlParts = explode("/",$_SERVER['REQUEST_URI']);
$request = $urlParts[1] . "/";

//URL principal de la APP
define('APP_URL',$url.$serverName.$request);
//Directorio principal en el servidor
define('APP_PARTH',__DIR__);
//Nombre de la APP
define('APP_NAME','project');

session_start();