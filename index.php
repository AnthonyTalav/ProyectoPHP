<?php

require_once("./Config/Config.php");
require_once("./Helpers/Helpers.php"); // Se coloca después ya que se necsitará datos del archivo del config

//Utilizamos empty en caso no haya datos en la variable url
$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home'; //Esto viene del archivo .htaccess, si dicho archivo hubiese sido ruta, se ponía ruta
$arrUrl = explode("/", $url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";

if (!empty($arrUrl[1])) {
    if ($arrUrl[1] != "") {
        $method = $arrUrl[1];
    }
}

if (!empty($arrUrl[2])) {
    if ($arrUrl[2] != "") {
        for ($i = 2; $i < count($arrUrl); $i++) {
            $params .= $arrUrl[$i] . ',';
        }
        $params = trim($params, ',');
    }
}

require_once("Libraries/Core/Autoload.php");
require_once("Libraries/Core/Load.php");

