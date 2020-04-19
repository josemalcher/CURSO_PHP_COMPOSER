<?php

require '../vendor/autoload.php';

use APP\Controllers\HomeController;
use Dompdf\Dompdf;

$query = new \ETI\DB\Query;
var_dump($query->query());

//$controller = new \APP\Controllers\HomeController;
$controller = new HomeController; // com uso de "use"
//var_dump($controller->index());

$texto = "    OK      ESPAÇOS                 ";
//var_dump($texto);
//var_dump(getTRIM($texto));

// reference the Dompdf namespace


// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

