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
        // Если символ НЕ пробел и программа не внутри слова - начинается новое слово
        if ($str[$i] != ' ' && !$inWord) {
            $count++;
            $inWord = true;
        } 
        // Если пробел - программа вышла из слова
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
function twinLetters(){
    
}
?>