<?php

require  './functions/functions.php';
require  './functions/db_querys.php';
autoload('config');

include TAMPLATES_DIR.'header.php';

$page = $_GET['id'];
if ($page){
	include TAMPLATES_DIR.'big_img.php';
} else {
	include ENGINE_DIR.'lesson5.php';
	include PUBLIC_DIR.'lesson5.php';
}

include TAMPLATES_DIR.'footer.php';