<?php
require  './functions/functions.php';
require  './functions/db_querys.php';
autoload('config');



if (!$_SESSION['is_auth']) {
	$id = (string)htmlspecialchars(strip_tags($_POST['id_good_to_cookie']));
	if (isset($_COOKIE['basket'])) {
		$basketArray =  unserialize($_COOKIE['basket']);
	} else {
		$basketArray = [];
	}
	if ($id) $basketArray[] = $id;
	setcookie("basket", serialize($basketArray), time()+3600*24*24*24*24);
} else {
	$id = (string)htmlspecialchars(strip_tags($_POST['id_good_to_session']));
	$_SESSION['basket'][] = $id;
	setcookie("basket", serialize($_SESSION['basket']), time()+3600*24*24*24*24);
}

header("Location: " . $_SERVER['HTTP_REFERER']);