<?php
function queryInnsertCatImg ($mysqli, $table_name, $dir) {
	$images = getAllCatImages ($dir);
	foreach ($images as $key => $img) {
		$id = $img['id'];
		$link = $img['link'];
		$size = $img['size'];
		$name = $img['name'];
		$selectQuery = "SELECT * FROM $table_name WHERE id = '$id'";
		$insertQuery = "INSERT INTO $table_name (id, link, size, name) VALUES ('$id', '$link', '$size', '$name')";
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
