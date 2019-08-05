<?php
// настройки страницы
$title = 'Домашнее задание номер 1';
$descriptiom = 'описание страницы';
$oneH = 'Главный заголовок страницы';
$date = getdate();
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?=$title?></title>
		<meta itemprop="description" content="<?=$descriptiom?>" />
		<link rel="stylesheet" href="/css/css.css">
		<link rel="stylesheet" href="/css/normalize.css">
	</head>
	<body>
		
		<header>
			<div class="container">
				<div class="logo"> <a href="/"><img src="/img/logo.png" alt="logo"></a></div>
				<nav>
					<ul>
						<li><a href="/">Главная</a></li>
						<li><a href="">О нас</a></li>
						<li><a href="">Каталог</a></li>
						<li><a href="">Товар</a></li>
						<li><a href="">Блог</a></li>
						<li><a href="">Войти</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<main>
			<div class="banner"></div>
			<div class="container">
				<h1><?=$oneH?></h1>
				<p>Текущая дата и время: день <?=$date['mday']?>, неделя <?=$date['weekday']?>, год <?=$date['year']?>. Часы <?=$date['hours']?>, минуты <?=$date['minutes']?>.</p>
			
				<?php
					echo "<h2>Первая часть ДЗ - тест заданий из методички</h2>";
					// работа с примерами из методички

					define('BR', "<br>");

					$a = 'Hello,';
					$b = 'world';
					$c = $a . $b;
					echo $c . BR . BR;

					$a = 4;
					$b = 5;
					echo $a + $b . BR;    // сложение
					echo $a * $b . BR;    // умножение
					echo $a - $b . BR;   // вычитание
					echo $a / $b . BR;  // деление
					echo $a % $b . BR; // остаток от деления
					echo $a ** $b . BR . BR; // возведение в степень

					$a = 4;
					$b = 5;
					$a += $b;
					echo 'a = ' . $a . BR;
					$a = 0;
					echo $a++ . BR;     // Постинкремент
					echo ++$a . BR . BR;    // Преинкремент

					$a = 4;
					$b = 5;
					var_dump($a == $b);  // Сравнение по значению
					var_dump($a === $b); // Сравнение по значению и типу
					var_dump($a > $b);    // Больше
					var_dump($a < $b);    // Меньше
					var_dump($a <> $b);  // Не равно
					var_dump($a != $b);   // Не равно
					var_dump($a !== $b); // Не равно без приведения типов
					var_dump($a <= $b);  // Меньше или равно
					var_dump($a >= $b);  // Больше или равно
					echo BR . BR;

					$a = 5;
				    $b = '05';
				    var_dump($a == $b);         // Почему true? - используется сравнительный оператор, не сравнивающий типы (то есть, они приводит к типам). Как итог, строка стала int-ом. При приобразовании типа в int, в строке ищется первое целое значение, 0 пропускается (если он впереди стоящий). В итоге $b стало равно 5
				    echo BR;
				    var_dump((int)'012345');     // Почему 12345? - При приобразовании типа в int, в строке ищется первое целое значение, 0 пропускается (если он впереди стоящий).
				    echo BR;
				    var_dump((float)123.0 === (int)123.0); // Почему false? - значение false выводится, так как используется строгий оператор ===, который также сравнивает типы. у данных чисел разные типы. Дробное число с плавающией точкой и целое число
				    echo BR;
				    var_dump((int)0 === (int)'hello, world'); // Почему true? - у сравниваемых значений одинаковый тип данных. Второе значение являлось строчкой, во время преобразования в int не было обнаружен в строчке чисел, в таких случаях присваеваетя значение 0.
				    echo BR;

				?>
			</div>
		</main>
		<footer>
		</footer>
</body>
</html>