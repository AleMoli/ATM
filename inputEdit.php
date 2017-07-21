<?php
require('class/Mezzi.php');
require('class/mezzi/Metro.php');
require('class/mezzi/Pullman.php');
require('class/mezzi/Tram.php');
require('class/mezzi/Treno.php');


$edit = new Mezzi();

$edit->setCapienza($_POST['capienza']);
$edit->setPeso($_POST['peso']);
$edit->setRevisione($_POST['revisione']);
$edit->setTipo($_POST['tipo']);
$edit->setTipomezzo($_POST['tipomezzo']);



$edit->edit($_POST['id']);
header("Location: getall.php");