<?php
// Упражнение 1 (действие в зависимости от положительности чисел)
echo 'Упражнение 1 (действие в зависимости от положительности чисел) <br>';

$a = -5;
$b = 5;

echo getActionByNums($a, $b) . '<br><br>';

function getActionByNums (int $a, int $b){
	if ($a >= 0 && $b >= 0) {
		return $a / $b;
	} elseif ($a < 0 && $b < 0) {
		return $a * $b;
	} elseif ($a < 0 && $b > 0 || $a > 0 && $b < 0) {
		return $a + $b;
	}
}

// Упражнение 2 (вывод числе "от" свитчем)
echo  'Упражнение 2 (вывод числе "от" свитчем) <br>';
$a = 2;
getNumsFromTo ($a);

function getNumsFromTo (int $a, int $b = 15) {
	if ($a < 0) {
		echo 'назначьте переменной $a положительное значение';
	} elseif ($a > $b) {
		echo 'переменная $a не может быть больше переменной $b';
	} else {
		switch ($a) {
		case $a:
			echo $a++ . '<br>';
			if ($a <= $b) getNumsFromTo ($a);
			break;
		default:
			if ($a < 0) echo 'назначьте переменной $a положительное значение';
			if ($a > $b) echo 'переменная $a не может быть больше переменной $b';
			break;
	}
}

}

// Упражнение 3 (4 арефметические операции)
echo  '<br>Упражнение 3 (4 арефметические операции)<br>';
$a = 4;
$b = 2;

echo getSumm ($a, $b) . '<br>'; // прибавление
echo getMinus ($a, $b) . '<br>'; // вычитание
echo getMulti ($a, $b) . '<br>'; // умнажение
echo getDiff ($a, $b) . '<br>'; // деление

function getSumm (int $a, int $b) {
	return $a + $b;
}

function getMinus (int $a, int $b) {
	return $a - $b;
}

function getMulti (int $a, int $b) {
	return $a * $b;
}

function getDiff (int $a, int $b) {
	return ($b == 0) ? 'на ноль делить нельзя' : ($a / $b);
}

// Упражнение 4 (function mathOperation)
echo  '<br>Упражнение 4 (function mathOperation)<br>';
$a = 4;
$b = 2;
echo mathOperation ($a, $b, 'summ') . '<br>'; // прибавление
echo mathOperation ($a, $b, 'minus') . '<br>'; // вычитание
echo mathOperation ($a, $b, 'multi') . '<br>'; // умнажение
echo mathOperation ($a, $b, 'diff') . '<br>'; // деление

function mathOperation (int $arg1, int $arg2, string $action) {
	switch ($action) {
		case 'summ':
			return getSumm ($arg1, $arg2);
			break;
		case 'minus':
			return getMinus ($arg1, $arg2);
			break;
		case 'multi':
			return getMulti ($arg1, $arg2);
			break;
		case 'diff':
			return getDiff ($arg1, $arg2);
			break;
		default:
			return "неизвестная ошибка";
			break;
	}
}

// Упражнение 5
echo  '<br>Упражнение 5 (делали на предыдущем уроке!)<br>';

echo  'Остальные задачи под *. За отсуствием времени не успеваю уделить им должное внимание :( Спасибо!';