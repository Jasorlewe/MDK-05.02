<h2>Задание 1</h2>
<?php
$nums = [2, 43, 0, 5, 77, 8];

$zeroIndex = array_search(0, $nums); //ищет позицию нуля
$result = array_slice($nums, 0, $zeroIndex + 1); //берёт элементы с начала до нуля включительно
//array_slice выбирает срез массива
var_dump($result);
?>
<h2>Задание 2</h2>
<?php
$nums = [2, 43, 1, 5, 77, 8];
echo array_product($nums) . ' (через array_product)<br>'; //array_product вычисляет произведение всех символов массива
//альтернатива через array_reduce:
$product = array_reduce($nums, function ($carry, $item) {return $carry * $item;}, 1); // (массив, функция)
echo $product . ' (через array_reduce)';
?>
<h2>Задание 3</h2>
<?php
$nums = [2, 43, 0, 5, 77, 8];
sort();
?>