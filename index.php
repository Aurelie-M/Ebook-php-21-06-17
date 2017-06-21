<?php

// include autoload.php
require "vendor/autoload.php";

// include routes.php
include("routes.php");

// assign a=index & e=show
$a = isset($_REQUEST["a"]) ? $_REQUEST["a"] : "index";
$e = isset($_REQUEST["e"]) ? $_REQUEST["e"] : "books";

// Routes is ok ?
if(!in_array($a . "_" . $e, $routes)){

	die("Cette route n'est pas permise");
}

// create name of class
$controllerName = "\Controller\\" . ucfirst($e) . "Controller";

// create this class
$controller = new $controllerName();

// post the class
$datas = call_user_func([$controller, $a]);

// include view.php
include("views/view.php");