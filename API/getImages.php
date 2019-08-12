<?php
require '../config/roots.php';
const JSON_IMG = './JSONS/imgs.json';
const ERROR = './JSONS/error.json';

$dir = PUBLIC_ROOT . 'img/';
$files = scandir($dir);
$imgs = array_splice($files, 2, -1);

$imgJSON = '';
$i = 0;
foreach ($imgs as $key => $value) {
	$i++;
	if ($i < count($imgs)) {
		$imgJSON .= "{'imgLink': '$value','id': '$key'},";
	} else {
		$imgJSON .= "{'imgLink': '$value','id': '$key'}";
	}
}
file_put_contents(JSON_IMG, str_replace("'", '"', "[{'response': '1','imgs':[$imgJSON]}]"));


$page = $_GET['get_image'];
require ($page === 'all') ? JSON_IMG : ERROR;