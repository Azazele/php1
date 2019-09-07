<?php
require  './functions/functions.php';
require  './functions/db_querys.php';
autoload('config');

$login = (string)htmlspecialchars(strip_tags($_POST['login']));
$email = (string)htmlspecialchars(strip_tags($_POST['email']));
$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

queryInnsertUser (dbConnect (), 'users', $login, $email, $pass);

header("Location: /?page=auth");

die;