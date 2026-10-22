<h1>Ассоциативные массивы</h1>
<h2>Создание массива</h2>
<?php
$nums = ['one' => 12,'two' => 54, 'three' => 3, 'four' => 55, 'five' => 42]
?>
<h2>Вывод массива</h2>
<?php
foreach($nums as $num){
    echo $num, ', ';
}
?>
<h2>Обращение к элементу массива</h2>
<?php
echo 'Второй элемент массива - ' . $nums['two'];
$nums['two'] = 555;
?>
<h2>Создание элемента массива</h2>
<?php
$nums['six'] = 34;
$nums[] = 8; $nums[5] = 77; $nums[] = 22;
?>
<h2>Перебор с ключами</h2>
<?php
foreach($nums as $key => $value){
    echo "$key - $value <br>";
}
?>