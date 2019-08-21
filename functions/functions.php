<?php
function autoload($dir, $excludeFiles=[])
{
	$files = scandir($dir);
	$excludeFiles = array_merge(['.', '..'], $excludeFiles);

	foreach ($files as $file) {

		if (!in_array($file, $excludeFiles)) {

			if (is_dir($dir.DIRECTORY_SEPARATOR.$file)){
				autoload($dir.DIRECTORY_SEPARATOR.$file, $excludeFiles);
			}

			if ("text/x-php" == mime_content_type($dir.DIRECTORY_SEPARATOR.$file)) {
				require_once($dir.DIRECTORY_SEPARATOR.$file);
			}

		}
	}

}
function getAllCatImages ($dir) {
	$images = array_splice(scandir($dir), 2, -1);
	$dbImgArray = [];
	foreach ($images as $key => $value) {
		$nameArray = explode( '_', $value );
		$id = str_replace('.jpg', '', $nameArray[1]);
		$size = getimagesize($dir . $value);
		$dbImgArray[] = [
			'id' => "$id",
			'link' => $dir . $value,
			'size' => "$size[0]x$size[1]",
			'name' => "$value",
		];
	}
	return $dbImgArray;
}