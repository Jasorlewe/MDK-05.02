<h2>Задание 1</h2>
<?php
echo "массив:<br>";
$nums = [2, 44, 3, 7, 12];
foreach($nums as $key => $value){
    echo "$key - $value <br>";
}
$max = $nums[0];
foreach($nums as $num){
    if($num > $max){
        $max = $num;
    }
}
$min = $nums[0];
foreach($nums as $num){
    if($num < $min){
        $min = $num;
    }
}
echo "Максимальное значение = $max";
echo "<br>Минимальное значение = $min";
?>
<h2>Задание 2</h2>
<?php
echo "массив:<br>";
$nums = [2, 44, 3, 7, 12];

foreach($nums as $key => $value){
    echo "$key - $value <br>";
}

$sum=0;
foreach($nums as $num){
    $sum += $num;
}
echo "сумма всех чисел массива: " . $sum . "<br>";

$pr=1;
foreach($nums as $num){
    $pr *= $num;
}
echo "произведение всех чисел массива: " . $pr;
?>

<h2>Задание 3</h2>
<?php
echo "массив:<br>";
$nums = [2, 44, 3, 7, 12];

foreach($nums as $key => $value){
    echo "$key - $value <br>";
}
$sum=0;
foreach($nums as $num){
    $sum += $num;
}
echo "сумма всех чисел массива: " . $sum . "<br>";
echo "среднее арифметическое: " . $sum / ($key+1) . "<br>";
?>
<h2>Задание 4</h2>
<?php
echo "массив:<br>";
$nums = [2, -44, 3, -7, 12];
foreach($nums as $key => $value){
    echo "$key - $value <br>";
}
echo "положительные числа: ";
foreach($nums as $num){
    if($num > 0){
        echo $num . ' ';
    }
}
echo "<br>отрицательные числа: ";
foreach($nums as $num){
    if($num < 0){
        echo $num . ' ';
    }
}
echo "<br>квадраты положительных чисел: ";
foreach($nums as $num){
    if($num > 0){
        $num *= $num;
        echo $num . ' ';
    }
}
echo "<br>абсолюты отрицательных чисел: ";
foreach($nums as $num){
    if($num < 0){
        $num *= -1;
        echo $num . ' ';
    }
}
?>
<h2>Задание 5</h2>
<?php
echo "массив:<br>";
$nums = [2, 44, 3, 7, 12];
foreach($nums as $key => $value){
    echo "$key - $value <br>";
}
echo "элементы массива с чётными номерами: ";
foreach($nums as $key => $value){
    if($key%2 == 0){
        echo $value . " ";
    }
}
?>
<h2>Задание 6</h2>
<?php
echo "массив:<br>";
$nums = [2, 44, 3, 7, 12];
foreach($nums as $key => $value){
    echo "$key - $value <br>";
}
foreach($nums as $num){
    if($num > 0){
        echo $num . ' ';
    }
}
?>
