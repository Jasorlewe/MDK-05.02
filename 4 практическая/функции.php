<h2>Задание 1</h2>
<?php
function lengthCirc($r){
    echo 'радиус = ' . $r . '<br>';
    $r = 2 * M_PI * $r;
    echo 'длина окружности примерно равна ' . $r . '<br>';
}
lengthCirc(10)
?>
<h2>Задание 2</h2>
<?php
function triangleArea($a, $b, $c){
    $p = ($a + $b + $c)/2;
    $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c)); //формула Герона
    echo "стороны треугольника: a = $a, b = $b, c = $c<br>";
    echo 'площадь треугольника равна ' . $s . '<br>';

    if ($a<=0||$b<=0||$c<=0){
    echo " трегольник не существует: все стороны должны иметь положительные значения<br>";
    }
    elseif (($a+$b>$c)&&($a+$c>$b)&&($b+$c>$a)) {
        echo  "треугольник с такими сторонами существует<br>";
    } else {
        echo'такого треугольника не существует<br>';
        return 0;
    }
}
triangleArea(1, 9, 9);
?>
<h2>Задание 3</h2>
<?php
function maxDivisor($x){
echo"исходное число: $x<br>";
    for($d = $x - 1; $d >= 2; $d--){
        if ($x % $d == 0){
            return $d;
        }
    }
    return 1;
}
echo "наибольший делитель: " . maxDivisor(1200) . '<br>';
?>
<h2>Задание 4</h2>
<?php
function allDivisors($n){
echo"исходное число: $n<br>";
    if($n <= 0){
        echo "число некорректно";
        return;
    }
    $d = [];
    for($i = 1; $i * $i <= $n; $i++){
        if ($n % $i == 0){
            $d[] = $i;
            if($i != $n/$i){
                $d[] = $n/$i; 
            }
        }
    }
    echo"все делители числа $n: ";
    foreach($d as $s){
    echo $s . ' ';
}
}
allDivisors(960);
?>
<h2>Задание 5</h2>
<?php
function sumOfSquares($num){
    $sum = 0;
    foreach ($num as $n){
        $sum += $n*$n;
    }
    echo "сумма квадратов: $sum<br>";
}
sumOfSquares([2,3,4]);
?>