<?php

require  './functions/functions.php';
require  './functions/db_querys.php';
autoload('config');

include TAMPLATES_DIR.'header.php';

$page = $_GET['page'];
if (!isset($page)) {
	echo "
	<div class='container'>
		<h1>Вы на главной странице</h1>
	</div>
	";
} elseif ($page == 'goods') {
	$id = $_GET['id'];
	if (!isset($id)) {
		require TAMPLATES_DIR.'allgoods.php';
	} else {
		require TAMPLATES_DIR.'good.php';
	}
}

include TAMPLATES_DIR.'footer.php';