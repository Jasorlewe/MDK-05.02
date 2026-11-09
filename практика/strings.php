<h1>Работа со строками</h1>
<h2>Создание строк</h2>
<?php
$str = 'string1';
$str1 = 'hello';
$str2 = 'world';
?>
<h2>Cоединение строк</h2>
<?php
echo $str1 . ', ' , $str2 . '!';
?>
<h2>Обращение по индексу</h2>
<?php
$sym = $str1[1];
$str1[0] = 'W';
echo $str1;
?>
<h2>Получение длины строки</h2>
<?php
$len = strlen($str1);
echo "Длина строки $str1 = $len";
?>