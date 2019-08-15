<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	

</head>
<body>
	
<?php
const BR = '<br>';
//С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
echo "Задание 1" . BR;
$i = 0;
$stil = 100;

while ($i <= $stil) {
	if (($i % 3) === 0) echo "$i" . BR;
	$i++;
}

/*С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так: 
0 – это ноль.
1 – нечётное число.
2 – чётное число.
3 – нечётное число.
…
10 – чётное число.*/
echo BR . "Задание 2" . BR;
$i = 0;
$stil = 10;

do {
	if ($i === 0) {
		echo "$i - это ноль" . BR;
	} elseif (($i % 2) != 0) {
		echo "$i - нечетное число" . BR;
	} else {
		echo "$i - четное число" . BR;
	}
	$i++;
} while ( $i <= $stil);

/*Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области.
Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин.
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт.
Рязанская область…(названия городов можно найти на maps.yandex.ru)*/
echo BR . "Задание 3" . BR;
const CITYES = [
	'Московская область' => [
		'Москва',
		'Балашиха',
		'Подольск',
		'Химки',
		'Королёв',
		'Мытищи',
		'Люберцы',
		'Красногорск',
		'Электросталь',
		'Коломна',
		'Одинцово'
	],
	'Ленинградская область' => [
		'Санкт-Петербург',
		'Гатчина',
		'Выборг',
		'Всеволожск',
		'Сосновый Бор',
		'Тихвин',
		'Сертолово',
		'Кириши',
		'Кингисепп',
		'Волхов',
		'Тосно'
	],
	'Кировская область' => [
		'Киров',
		'Нолинск',
		'Луза',
		'Белая Холуница',
		'Зуевка',
		'Сосновка',
		'Советск',
		'Яранск',
		'Омутнинск',
		'Котельнич',
		'Вятские Поляны'
	]
];

foreach (CITYES as $key => $state) {
	echo BR . $key . ':' . BR;
	$i = 0;
	foreach ($state as $key => $city) {
		$i++;
		echo $city; 
		echo ($i === count($state)) ? '.<br>' : ', ';
	}
}


/* Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.*/
echo BR . "Задание 4" . BR;
const TRANSLIT = [
	'а' => 'a',
	'б' => 'b',
	'в' => 'v',
	'г' => 'g',
	'д' => 'd',
	'е' => 'ye',
	'ё' => 'ye',
	'ж' => 'zh',
	'з' => 'z',
	'и' => 'i',
	'й' => 'y',
	'к' => 'k',
	'л' => 'l',
	'м' => 'm',
	'н' => 'n',
	'о' => 'o',
	'п' => 'p',
	'р' => 'r',
	'с' => 's',
	'т' => 't',
	'у' => 'u',
	'ф' => 'f',
	'х' => 'kh',
	'ц' => 'ts',
	'ч' => 'ch',
	'ш' => 'sh',
	'щ' => 'shch',
	'ъ' => '',
	'ы' => 'y',
	'ь' => '',
	'э' => 'e',
	'ю' => 'yu',
	'я' => 'ya',
	'А' => 'A',
	'Б' => 'B',
	'В' => 'V',
	'Г' => 'G',
	'Д' => 'D',
	'Е' => 'Ye',
	'Ё' => 'Ye',
	'Ж' => 'Zh',
	'З' => 'Z',
	'И' => 'I',
	'Й' => 'Y',
	'К' => 'K',
	'Л' => 'L',
	'М' => 'M',
	'Н' => 'N',
	'О' => 'O',
	'П' => 'P',
	'Р' => 'R',
	'С' => 'S',
	'Т' => 'T',
	'У' => 'U',
	'Ф' => 'F',
	'Х' => 'Kh',
	'Ц' => 'Ts',
	'Ч' => 'Ch',
	'Ш' => 'Sh',
	'Щ' => 'Shch',
	'Ъ' => '',
	'Ы' => 'Y',
	'Ь' => '',
	'Э' => 'E',
	'Ю' => 'Yu',
	'Я' => 'Ya',
	'(' => '(',
	')' => ')'
];
$word = 'Домашнее задание было сделано правильно и доточено до идеала (а может и нет)';
$arrayWord = explode(" ", $word);

foreach ($arrayWord as $key => $value) {
	$i = 0;
	$i++;
	$arrayLetter = preg_split('//u', $value, null, PREG_SPLIT_NO_EMPTY);
	$transWord = '';
	foreach ($arrayLetter as $key => $letter) {
		foreach (TRANSLIT as $key => $transLetter) {
			if ($letter === $key) $transWord .= $transLetter;
		}
	}
	echo $transWord . " ";

}


//Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
echo BR . BR . "Задание 5" . BR;
$word = 'Домашнее задание было сделано правильно и доточено до идеала (а может и нет)';
$arrayWord = explode(" ", $word);
$i = 0;
foreach ($arrayWord as $key => $value) {
	$i++;
	echo $value;
	echo ($i === count($arrayWord)) ? '' : '_';
}

/*В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.*/
echo BR . BR . "Задание 6" . BR;
?>
<ul class="nav nav-tabs">
<?php foreach (CITYES as $key => $state): ?>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?=$key?></a>
    <div class="dropdown-menu">
	<?php foreach ($state as $key => $city): ?>
    	<a class="dropdown-item" href="#"><?=$city?></a>
	<?php endforeach; ?>
    </div>
  </li>
<?php endforeach; ?>
</ul>

<?php
/*Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. Выглядеть это должно так:
for(…){// здесь пусто}*/
echo BR . BR . "Задание 7" . BR;
for ($i = 0, $n = 9; $i <= $n; print_r($i++)){};

//Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
echo BR . BR . "Задание 8" . BR;
foreach (CITYES as $key => $state) {
	echo BR . $key . ':' . BR;
	$i = 0;
	foreach ($state as $key => $city) {
		$i++;
		$arrayCity = preg_split('//u', $city, null, PREG_SPLIT_NO_EMPTY);
		$g = 0;
		foreach ($arrayCity as $key => $value) {
			$g++;
			if ($g === 1 && $value ==='К') {
				echo $city; 
				echo ($i === count($state)) ? '.<br>' : ', ';
			}
		}
		
	}
}
// Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах). 
echo BR . BR . "Задание 9" . BR;

$word = 'Домашнее задание было сделано правильно и доточено до идеала (а может и нет)';
$arrayWord = explode(" ", $word);
$i = 0;
foreach ($arrayWord as $key => $value) {
	$i++;
	$arrayLetter = preg_split('//u', $value, null, PREG_SPLIT_NO_EMPTY);
	$transWord = '';
	foreach ($arrayLetter as $key => $letter) {
		foreach (TRANSLIT as $key => $transLetter) {
			if ($letter === $key) $transWord .= $transLetter;
		}
	}
	echo $transWord;
	echo ($i === count($arrayWord)) ? '' : '_';

}

echo  BR . BR . BR . BR . BR?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

