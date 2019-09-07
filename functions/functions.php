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
function getAllImages ($dir) {
	$images = array_splice(scandir($dir), 2, -1);
	$dbImgArray = [];
	foreach ($images as $key => $value) {
		$size = getimagesize($dir . $value);
		$dbImgArray[] = [
			'name' => $value,
			'weight' => $size[0],
			'height' => $size[1],
		];
	}
	return $dbImgArray;
}