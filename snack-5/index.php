<?php
include_once __DIR__ ."/classi/indumento.php";
include_once __DIR__ ."/classi/scarpa.php";
include_once __DIR__ ."/classi/cappello.php";


$indumetoA = new Indumento("cotone");
var_dump($indumetoA);

$scarpaA = new Scarpa(true);
var_dump($scarpaA)

?>