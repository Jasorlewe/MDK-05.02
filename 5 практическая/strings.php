<h2>Задание 1</h2>
<?php
$str = '(oikr)mg';
function getInsideBrackets($str){
    $result = '';
    $len = strlen($str);
    $start = 0;

    for ($i = 0; $i < $len; $i++){
        if ($str[$i] == '('){
            $start = $i + 1;
        }  elseif ($str[$i] == ')' && $start != -1){
            for ($j = $start; $j < $i; $j++){
                $result .= $str[$j];
            }
            break;
        }
    }
    return $result;
}
echo "исходная строка: $str<br>";
echo "симвлолы внутри скобок: ";
echo getInsideBrackets($str);
?>
<h2>Задание 2</h2>
<?php
$str = 'github is good';
function countWords($str) {
    $len = strlen($str);
    $count = 0;
    $inWord = false;

    for ($i = 0; $i < $len; $i++) {
        //Если символ НЕ пробел и программа не внутри слова - начинается новое слово
        if ($str[$i] != ' ' && !$inWord) {
            $count++;
            $inWord = true;
        } 
        //Если пробел - программа вышла из слова
        elseif ($str[$i] == ' ') {
            $inWord = false;
        }
    }
    return $count;
}
echo "исходное предложение: $str<br>";
echo countWords($str)
?>
<h2>Задание 3</h2>
<?php
function twinLetter($str) {
    $len = strlen($str);
    $word = ""; //Текущее слово
    $result = ""; //Результат

    for ($i = 0; $i <= $len; $i++) {
        //Чтобы обработать последнее слово, добавляем пробел в конец
        $char = ($i < $len) ? $str[$i] : ' ';

        if ($char != ' ' && $char != '.') {
            $word = $word . $char; //Собираем слово по буквам
        } else {
            //Если слово закончилось, проверяем его
            if ($word != "") {
                $wlen = strlen($word);
                //Если первая буква равна последней
                if ($word[0] == $word[$wlen - 1]) {
                    $result = $result . $word . " ";
                }
                $word = ""; //Обнуляем слово для следующего
            }
        }
    }
    return $result;
}
$str = 'gg ab gg';
echo "исходная строка: $str<br>";
echo 'слова с одинаковой буквой в начале и в конце: ';
echo twinLetter($str);
?>
<h2>задание 4</h2>
<?php
function countLetter($str) { //Запуск функции
    $len = strlen($str); //Счёт символов через strlen (считает длину строки)
    $result = ""; //Здесь будут только уникальные символы
    $count = 0; //Счётчик уникальных символов

    for ($i = 0; $i < $len; $i++) { //Перебор символов строки
        $char = $str[$i]; //Взятие одного символа из строки по индексу
        $found = false; //Ищем, есть ли уже такой символ

        //Проверяем все символы, которые мы уже записали
        for ($j = 0; $j < $count; $j++) { //Перебор содержимого $result на наличие уже имеющихся уникальных символов
            if ($result[$j] == $char) { //Если нашелся дублирующийся символ
                $found = true; //Нашли дубликат
            }
        }

        //Если такого символа еще не было - добавляем
        if ($found == false) { //Если дубликат не найден
            $result = $result . $char; //Добавляем символ в $result
            $count = $count + 1; //Увеличиваем счетчик уникальных символов
        }
    }
    return "Количество: " . $count . "<br>Символы: " . $result; //Выдача результата
}
$str = 'tenna';
echo "исходная строка: $str<br>";
echo countLetter($str);
?>
<h2>Задание 5</h2>
<?php
    function rktCounter($str){
    $len = strlen($str);
    $count = 0;
    for ($i = 0; $i < $len; $i++){
        $char = $str[$i];
        if ($char == 'r' or $char == 'k' or $char == 't'){
            $count++;
        }
        }
    return "Количество r, k или t: " . $count;
    }
$str = 'rktttenna';
echo "исходная строка: $str<br>";
echo rktCounter($str);
?>
<h2>Задание 6</h2>
<?php

?>