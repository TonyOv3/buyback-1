<?php 
ini_set('memory_limit', '512M');
ob_start();
session_start();

$host = 'localhost';
$db_user = 'buybackpowerswif_buyback';
$db_password = 'm@70a=4@w)xa';
$db_name = 'buybackpowerswif_buyback';

$db = mysqli_connect($host,$db_user,$db_password,$db_name) or die('Unable to connect to the database');
?>