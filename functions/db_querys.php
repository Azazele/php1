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