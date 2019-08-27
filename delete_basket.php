<?php
require  './functions/functions.php';
require  './functions/db_querys.php';
autoload('config');



if (!$_SESSION['is_auth']) {
	$id = (string)htmlspecialchars(strip_tags($_POST['id_good_delete_cookie']));
	$basketArrayCookie =  unserialize($_COOKIE['basket']);
	unset($basketArrayCookie[$id]);
	setcookie("basket", serialize($basketArrayCookie), time()+3600*24*24*24*24);
} else {
	$id = (string)htmlspecialchars(strip_tags($_POST['id_good_delete_session']));
	unset($_SESSION['basket'][$id]);
	setcookie("basket", serialize($_SESSION['basket']), time()+3600*24*24*24*24);
}

header("Location: " . $_SERVER['HTTP_REFERER']);