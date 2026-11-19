<h2>Задание 1</h2>
<?php
$str = 'Hel(lo worl)d!';
$posOpen = strpos($str, '('); //strpos ищет открывающую скобку
$posClose = strpos($str, ')'); //strpos ищет закрывающую скобку

//символы между скобками: начинаем после '(' 
//и берём столько символов, сколько между скобками
//substr возвращает подстроку (в данном случае то, что между скобок) - (строка, откуда начать, сколько взять)
$inner = substr($str, $posOpen + 1, $posClose - $posOpen - 1); //за скобками считаем символы НЕ включая скобки

echo "Исходная строка: $str<br>";
echo "Символы внутри скобок: $inner";
?>
<h2>Задание 2</h2>
<?php
$str = 'Hello world.';
$count = str_word_count($str);
echo "Исходная строка: $str<br>";
echo "количество слов в строке - $count";
?>
<h2>Задание 3</h2>
<?php
$str = 'Hellh worlw';
$words = explode(' ', $str); //explode разбивает строку по пробелу
echo "Исходная строка: $str<br>";
foreach ($words as $word) {
    $word = trim($word, ".,!?"); //trim убирает символы в начале и в конце строки

    if ($word === '') continue; //пропуск пустых строк

    $first = mb_substr($word, 0, 1, 'UTF-8'); //извлекаем первую букву слова
    $last  = mb_substr($word, -1, 1, 'UTF-8'); //извлекаем последнюю букву слову

    if (mb_strtolower($first, 'UTF-8') === mb_strtolower($last, 'UTF-8')) { //strtolower приводит символы к нижнему регистру
        echo "слова с одинаковой буквой в начале и в конце: $word<br>";
    }
}
//mb нужен для корректной работы с кириллицей
?>
<h2>Задание 4</h2>
<?php
$str = 'Hello world';
$unique = count_chars($str, 3); //count_chars считает байты в строке. в mode 3 считает уникальные байты
echo "Исходная строка: $str<br>";
echo "Уникальные символы: $unique<br>";
echo "Количество различных символов: " . strlen($unique);
?>
<h2>Задание 5</h2>
<?php
$str = 'Heklo worrrltt';
//substr_count считает количество вхождений (символов) подстроки
$countR = substr_count($str, 'r');
$countK = substr_count($str, 'k');
$countT = substr_count($str, 't');

echo "Исходная строка: $str<br>";
echo "Буква 'r': $countR<br>";
echo "Буква 'k': $countK<br>";
echo "Буква 't': $countT<br>";

$total = $countR + $countK + $countT;
echo "Всего букв r, k, t: $total";
?>
<h2>Задание 6</h2>
<?php
$str = 'Hello world';

?>