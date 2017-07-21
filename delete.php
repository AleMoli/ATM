<?php
require('class/Mezzi.php');
/**
 * Created by PhpStorm.
 * User: Utente
 * Date: 18/07/2017
 * Time: 12:31
 */
$delete = new Mezzi();

$delete->delete($_GET['id']);
header("Location: getall.php");