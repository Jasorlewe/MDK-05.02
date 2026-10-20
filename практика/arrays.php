<h1>Массивы</h1>
<?php
$nums = [2, 44, 3, 7, 12];
echo "1й элемент массива - $nums[0]";
?>
<h2>Изменение элементов</h2>
<?php
$nums[2] = "!!!";
echo "3й элемент массива - $nums[2]";
?>
<h2>Вывод на экран</h2>
<?php
var_dump($nums);
echo "<br>";
for($i = 0; $i < count($nums); $i++){
    echo $nums[$i], ' ';
}
?>
<h2>Цикл foreach</h2>
<?php
foreach($nums as $num){
    echo $num, ' ';
}
?>
<h2>Цикл foreach с индексами</h2>
<?php
foreach($nums as $key => $value){
    echo "$key - $value <br>";
}
?>
<h2>Поиск максимума</h2>
<?php
$max = $nums[0];
foreach($nums as $num){
    if($num > $max){
        $max = $num;
    }
}
echo "Максимальное значение = $max";
?>
<h2>Добавление элемента</h2>
<?php
$nums[] = 42;
?>