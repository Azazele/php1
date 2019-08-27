<?php
function queryInnsertImg ($mysqli, $table_name, $dir) {
	$images = getAllImages ($dir);
	foreach ($images as $key => $img) {
		$name = $img['name'];
		$weight = $img['weight'];
		$height = $img['height'];

		$selectQuery = "SELECT * FROM $table_name WHERE name = '$name'";
		$insertQuery = "INSERT INTO $table_name (name, weight, height) VALUES ('$name', '$weight', '$height')";
		if (is_null(mysqli_fetch_assoc(mysqli_query($mysqli, $selectQuery)))) {
			mysqli_query($mysqli, $insertQuery);
		}
	}
}

function queryGetImages ($mysqli, $table_name) {
	$selectQuery = "SELECT * FROM $table_name WHERE id > 0";
	$imgArray = [];
	$result = mysqli_query($mysqli, $selectQuery);
	while($row = mysqli_fetch_assoc($result)) {
		$imgArray[] = $row;
	};
	return $imgArray;
}

function queryGetImageById ($mysqli, $table_name, $id) {
	$selectQuery = "SELECT * FROM $table_name WHERE id = '$id'";
	$result = mysqli_query($mysqli, $selectQuery);
	$imgArray = [];
	while($row = mysqli_fetch_assoc($result)) {
		$imgArray[] = $row;
	};
	return $imgArray;
}

function queryGetAllGood ($mysqli, $table_name) {
	$selectQuery = "SELECT * FROM $table_name";
	$result = mysqli_query($mysqli, $selectQuery);
	$goods = [];
	while($row = mysqli_fetch_assoc($result)) {
		$goods[] = $row;
	};
	return $goods;
}

function queryGetGoodById ($mysqli, $table_name, $id) {
	$selectQuery = "SELECT * FROM $table_name WHERE id = '$id'";
	$result = mysqli_query($mysqli, $selectQuery);
	$imgArray = [];
	while($row = mysqli_fetch_assoc($result)) {
		$imgArray[] = $row;
	};
	return $imgArray;
}

function queryInnsertComment ($mysqli, $table_name, $name, $email, $content, $good) {
		$insertQuery = "INSERT INTO $table_name (name, email, content, good) VALUES ('$name', '$email', '$content', '$good')";
		mysqli_query($mysqli, $insertQuery);
}

function queryGetCommentByGoodId ($mysqli, $table_name, $id) {
	$selectQuery = "SELECT * FROM $table_name WHERE good = '$id'";
	$result = mysqli_query($mysqli, $selectQuery);
	$imgArray = [];
	while($row = mysqli_fetch_assoc($result)) {
		$imgArray[] = $row;
	};
	return $imgArray;
}

function queryInnsertUser ($mysqli, $table_name, $login, $email, $pass) {
		$selectQueryLogin = "SELECT * FROM $table_name WHERE login = '$login'";
		$selectQueryEmail = "SELECT * FROM $table_name WHERE email = '$email'";
		$insertQuery = "INSERT INTO $table_name (login, email, password) VALUES ('$login', '$email', '$pass')";
		if (is_null(mysqli_fetch_assoc(mysqli_query($mysqli, $selectQueryLogin))) && is_null(mysqli_fetch_assoc(mysqli_query($mysqli, $selectQueryEmail)))) {
			mysqli_query($mysqli, $insertQuery);
			$_SESSION['last_auth_status'] = 'Вы успешно зарегистрироовались, можете войти в систему';
		} else {
			$_SESSION['last_auth_status'] = 'Введенный логин или e-mail уже существует, повторите попытку';
		}
}

function queryEntrance ($mysqli, $table_name, $login, $pass) {
		$selectQueryLogin = "SELECT * FROM $table_name WHERE login = '$login'";
		$selectQueryEmail = "SELECT * FROM $table_name WHERE email = '$login'";
		if (!is_null(mysqli_fetch_assoc(mysqli_query($mysqli, $selectQueryLogin)))) {
			$user = mysqli_fetch_assoc(mysqli_query($mysqli, $selectQueryEmail));
			if (password_verify("$pass", $user['password'])) {
				$_SESSION['last_auth_status'] = 'Вы успешно вошли';
				$_SESSION['is_auth'] = true;
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['user_name'] = $user['login'];
			} else {
				$_SESSION['is_auth'] = false;
				$_SESSION['last_auth_status'] = 'Не верный пароль';
			}
		} elseif (!is_null(mysqli_fetch_assoc(mysqli_query($mysqli, $selectQueryEmail)))) {
			$user = mysqli_fetch_assoc(mysqli_query($mysqli, $selectQueryEmail));
			if (password_verify("$pass", $user['password'])) {
				$_SESSION['last_auth_status'] = 'Вы успешно вошли';
				$_SESSION['is_auth'] = true;
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['user_name'] = $user['login'];
			} else {
				$_SESSION['is_auth'] = false;
				$_SESSION['last_auth_status'] = 'Не верный пароль';
			}

		} else {
			$_SESSION['last_auth_status'] = 'Вы ввели несуществующее иvя пользователя или e-mail';
		}
}