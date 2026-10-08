<h2>Задача 1</h2>
<form>
    <p>Введите число:</p>
    <input name="number">
    <input type="submit">
</form>
<?php
if(isset($_GET['number'])){
    $n = $_GET['number'];
    echo"выбранная цифра - " . $n . "<br>";
    switch($n){
        case 0:
            echo"n - zero";
            break;
        case 1:
            echo"n - one";
            break;
        case 2:
            echo"n - two";
            break;
        case 3:
            echo"n - three";
            break;
        case 4:
            echo"n - four";
            break;
        case 5:
            echo"n - five";
            break;
        case 6:
            echo"n - six";
            break;
        case 7:
            echo"n - seven";
            break;
        case 8:
            echo"n - eight";
            break;
        case 9:
            echo"n - nine";
            break;
        default:
            echo"не подходит";
    }
}
?>
<h2>Задача 2</h2>
<form>
    <p>Введите число:</p>
    <input name="numbe">
    <input type="submit">
</form>
<?php
if(isset($_GET['numbe'])){
    $t = $_GET['numbe'];
    echo"номер месяца - " . $t . "<br>";
    switch($t){
        case 1:
            echo"праздники в этот месяц: 1 января - Новый Год, 7 января - Рождество";
            break;
        case 2:
            echo"праздники в этот месяц: 14 февраля - День святого Валентина, 23 февраля - День защитника Отечества";
            break;
        case 3:
            echo"праздники в этот месяц: 8 марта - Международный женский день, Масленнница";
            break;
        case 4:
            echo"праздники в этот месяц: 1 апреля - День дураков, 12  апреля - День космонавтики, Пасха";
            break;
        case 5:
            echo"праздники в этот месяц: 1  мая - Праздник Весны и Труда, 9 мая - День Победы";
            break;
        case 6:
            echo"праздники в этот месяц: 1 июня - Международный день защиты детей, 12 июня - День России";
            break;
        case 7:
            echo"праздники в этот месяц: 8 июля - День семьи, любви и верности";
            break;
        case 8:
            echo"праздники в этот месяц: 22 августа - День государственного флага РФ";
            break;
        case 9:
            echo"праздники в этот месяц: 1 сентября - День знаний";
            break;
        case 10:
            echo"праздники в этот месяц: 1 октября - Международный день пожилыхь людей, 31 октября - Хэллуин";
            break;
        case 11:
            echo"праздники в этот месяц: 4 ноября - День народного единства";
            break;
        case 12:
            echo"праздники в этот месяц: 31 декабря - Канун Нового года (Щедрый вечер)";
            break;
        default:
            echo"месяца с таким номером нет";
    }
}
?>
<h2>Задача 3</h2>
<form>
    <p>Введите число:</p>
    <input name="numbr">
    <input type="submit">
</form>
<?php
if(isset($_GET['numbr'])){
    $h = $_GET['numbr'];
    echo"Исходное число: $h<br>";
    $a=$h%10;
    echo"последняя цифра: $a<br>";
    switch($a){
        case 0:
            $a=$a**2;
            echo"квадрат последней цифры исходного числа: " . $a . "<br>";
            echo"последняя цифра квадрата: " . $a%10;
            break;
        case 1:
            $a=$a**2;
            echo"квадрат последней цифры исходного числа: " . $a . "<br>";
            echo"последняя цифра квадрата: " . $a%10;
            break;
        case 2:
            $a=$a**2;
            echo"квадрат последней цифры исходного числа: " . $a . "<br>";
            echo"последняя цифра квадрата: " . $a%10;
            break;
        case 3:
            $a=$a**2;
            echo"квадрат последней цифры исходного числа: " . $a . "<br>";
            echo"последняя цифра квадрата: " . $a%10;
            break;
        case 4:
            $a=$a**2;
            echo"квадрат последней цифры исходного числа: " . $a . "<br>";
            echo"последняя цифра квадрата: " . $a%10;
            break;
        case 5:
            $a=$a**2;
            echo"квадрат последней цифры исходного числа: " . $a . "<br>";
            echo"последняя цифра квадрата: " . $a%10;
            break;
        case 6:
            $a=$a**2;
            echo"квадрат последней цифры исходного числа: " . $a . "<br>";
            echo"последняя цифра квадрата: " . $a%10;
            break;
        case 7:
            $a=$a**2;
            echo"квадрат последней цифры исходного числа: " . $a . "<br>";
            echo"последняя цифра квадрата: " . $a%10;
            break;
        case 8:
            $a=$a**2;
            echo"квадрат последней цифры исходного числа: " . $a . "<br>";
            echo"последняя цифра квадрата: " . $a%10;
            break;
        case 9:
            $a=$a**2;
            echo"квадрат последней цифры исходного числа: " . $a . "<br>";
            echo"последняя цифра квадрата: " . $a%10;
            break;
        default:
            echo"не подходит";
    }
}
?>
<h2>Задача 4</h2>
<form>
    <p>Введите число:</p>
    <input name="numbre">
    <input type="submit">
</form>
<?php
if(isset($_GET['numbre'])){
    $k = $_GET['numbre'];
    echo"Исходный введённый возраст: " . $k . "<br>";
    if($k==11 || $k==12 || $k==13 || $k==14){
        switch($k){
            case 11:
                echo"Мне $k лет<br>";
                break;
            case 12:
                echo"Мне $k лет<br>";
                break;
            case 13:
                echo"Мне $k лет<br>";
                break;
            case 14:
                echo"Мне $k лет<br>";
                break;
        }
    }else{
        if($k<100 && $k>0){
                $j=$k%10;
                switch($j){
                    case 1:
                        echo"Мне $k год";
                        break;
                    case 2:
                        echo"Мне $k года";
                        break;
                    case 3:
                        echo"Мне $k года";
                        break;
                    case 4:
                        echo"Мне $k года";
                        break;
                    case 5:
                        echo"Мне $k лет";
                        break;
                    case 6:
                        echo"Мне $k лет";
                        break;
                    case 7:
                        echo"Мне $k лет";
                        break;
                    case 8:
                        echo"Мне $k лет";
                        break;
                    case 9:
                        echo"Мне $k лет";
                        break;
                    case 0:
                        echo"Мне $k лет";
                        break;
                }
        }else{
            echo"возраст не подходит";
        }
    }
}
?>
<h2>Задача 5</h2>
<form>
    <p>Введите число:</p>
    <input name="numbre">
    <input type="submit">
</form>
<?php
if(isset($_GET['numbre'])){
    $n = $_GET['numbre'];

}
?>