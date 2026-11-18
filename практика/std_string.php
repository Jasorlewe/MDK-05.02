<?php
mb_internal_encoding('UTF-8');
?>

<h1>Стандартные функции для строк</h1>

<h2>strlen</h2>
<?php
$str = 'Hello, world';
$strR = 'привет,мир';
echo 'Длина str - ' . strlen($str) . ' символов<br>';
echo 'Длина strR - ' . mb_strlen($strR, 'UTF-8') . ' символов<br>';
?>

<h2>Поиск символа — strpos и mb_strpos</h2>
<?php
// Сначала вычисляем позицию, потом выводим
$strTemp = mb_strpos($strR, 'мир', 0, 'UTF-8');
echo "Позиция 'мир' в strR - $strTemp<br>";

// Для англоязычной строки
