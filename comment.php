<?php
require  './functions/functions.php';
require  './functions/db_querys.php';
autoload('config');

$name = mysqli_real_escape_string(dbConnect (), (string)htmlspecialchars(strip_tags($_POST['name'])));
$email = mysqli_real_escape_string(dbConnect (), (string)htmlspecialchars(strip_tags($_POST['email'])));
$text = mysqli_real_escape_string(dbConnect (), (string)htmlspecialchars(strip_tags($_POST['text'])));
$id = (int)$_POST['id_good'];

queryInnsertComment (dbConnect (), 'goods_comments', $name, $email, $text, $id);

header("Location: /?page=goods&id=$id");

die;