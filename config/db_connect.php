<?php

function dbConnect () {
	$defaultConfig = require CONFIG_DIR . 'db_config' . SLESH . 'config.default.php';

	if (!file_exists(CONFIG_DIR . 'db_config' . SLESH . 'config.default.php')) {
		echo 'Создайте файл конфигурации';
		$localConfig = []; }
	else {
		$localConfig = require CONFIG_DIR . 'db_config' . SLESH . 'config.php';
	}

	$config = array_merge($defaultConfig, $localConfig);

	if (!$mysqli = mysqli_connect(
		$config['db_host'],
		$config['db_user'],
		$config['db_password'],
		$config['db_name']

	)) die('Ошибка базы данных');

	return $mysqli;
}