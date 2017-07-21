<?php
require('class/Mezzi.php');
require('class/mezzi/Metro.php');
require('class/mezzi/Pullman.php');
require('class/mezzi/Tram.php');
require('class/mezzi/Treno.php');


$mezzi = new Mezzi();

$mezzi->setCapienza($_POST['capienza']);
$mezzi->setPeso($_POST['peso']);
$mezzi->setRevisione($_POST['revisione']);
$mezzi->setTipo($_POST['tipo']);
$mezzi->setTipomezzo($_POST['tipomezzo']);



//$metro = new Metro();
//if($metro != null)
//    $metro->setModello($_POST['modello']);


$mezzi->save();
header("Location: getall.php");