<h2>Задание 1</h2>
<?php
$nums = ['one' => 'один','two' => 'два', 'three' => 'три', 'four' => 'четыре', 'five' => 'пять', 'six' => 'шесть', 'seven' => 'семь', 'eight' => 'восемь', 'nine' => 'девять', 'ten' => 'десять'];
foreach($nums as $key => $value){
    echo "$key - $value <br>";
}
?>
<h2>Задание 2</h2>
<form>
    <p>Введите слово на английском:</p>
    <input name="word">
    <input type="submit">
</form>
<?php
if(isset($_GET['word'])){
    $k = $_GET['word'];
    $ISF = False;
    foreach($nums as $eng => $rus){
        if($rus === $k){
            echo $k . ' - ' . $eng . '<br>';
            $ISF = True;
            break;
        }
        }
        if (!$ISF){
            echo $k . ' - в словаре нет такого слова';
        }
}
?>
<h2>Задание 3</h2>
<form>
    <p>Введите слово на английском или русском:</p>
    <input name="wordd">
    <input type="submit">
</form>
<?php
if(isset($_GET['wordd'])){
    $k = $_GET['wordd'];
    $ISF = False;
    foreach($nums as $eng => $rus){
        if($rus === $k){
            echo $k . ' - ' . $eng . '<br>';
            $ISF = True;
            break;
        }

        if($eng === $k){
            echo $k . ' - ' . $rus . '<br>';
            $ISF = True;
            break;

        }

        }
        if (!$ISF){
            echo $k . ' - в словаре нет такого слова';
        }
}
?>
<h2>Задание 4</h2>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="word">введите слово на английском или русском:</label>
        <input type="text" id="word" name="word" required>
        <button type="submit">Перевести</button>
    </form>
    <hr>
    <?php
    //форма была отправлена? (в POST есть ключ 'word')
    if(isset($_POST['word'])){
        $k = $_POST['word'];
        $ISF = False;
        
        foreach($nums as $eng => $rus){
            if($rus === $k){
                echo $k . ' - ' . $eng . '<br>';
                $ISF = True;
                break;
            }

            if($eng === $k){
                echo $k . ' - ' . $rus . '<br>';
                $ISF = True;
                break;
            }
        }
        
        if (!$ISF){
            echo $k . ' - в словаре нет такого слова';
        }
    }
    ?>
</body>
</html>

<h2>Задание 5</h2>
<?php
$str = "banana";
echo 'исходное слово - ' . $str . '<br>';
$res = [];

$length = strlen($str);

for ($i = 0; $i < $length; $i++) {
    $char = $str[$i];
    
    if (isset($res[$char])) {
        $res[$char]++;
    } else {
        $res[$char] = 1;
    }
}

foreach ($res as $key => $value) {
    echo "'$key' => $value <br>";
}
?>

<h2>Задание 6</h2>
<?php
$flipNums = array_flip($nums);

foreach($flipNums as $rus => $eng){
    echo "$rus - $eng <br>";
}
?>
<h2>Задание 7</h2>
<?php

?>