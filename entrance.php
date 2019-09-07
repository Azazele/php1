<?php
require  './functions/functions.php';
require  './functions/db_querys.php';
autoload('config');

$login = (string)htmlspecialchars(strip_tags($_POST['login']));
$pass = $_POST['password'];

queryEntrance (dbConnect (), 'users', $login, $pass);
if ($_SESSION['is_auth']) {
	$_SESSION['basket'] = [];
	if ($_COOKIE['basket']){
		$merge = array_merge(unserialize($_COOKIE['basket']), $_SESSION['basket']);
		$_SESSION['basket'] = $merge;
	}
	
}
header("Location: /?page=auth");

die;