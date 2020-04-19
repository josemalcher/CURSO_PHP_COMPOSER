<?php

require '../vendor/autoload.php';

use APP\Controllers\HomeController;

$query = new \ETI\DB\Query;
var_dump($query->query());

//$controller = new \APP\Controllers\HomeController;
$controller = new HomeController; // com uso de "use"
//var_dump($controller->index());

$texto = "    OK      ESPAÇOS                 ";
var_dump($texto);
var_dump(getTRIM($texto));

