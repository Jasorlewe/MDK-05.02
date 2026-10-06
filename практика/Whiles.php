<h1>Циклы</h1>
<h2>Цикл с предусловием - while</h2>
<?php
$a=0;
while($a<10){
    echo"$a <br>";
    $a++;
}
?>
<h2>Цикл с постусловием - do . . . while</h2>
<?php
do {
    echo"$a <br>";
    $a--;
} while($a>0)
?>
<h2>Цикл с параметром - for</h2>
<?php
for($i=0; $i<10; $i++){
    echo "$i <br>";
}
?>
<h2>вложенный цикл</h2>
<?php
for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 10; $j++){
        echo"w";
    }
    echo'<br>';
}
?>
<h2>операторы break и continue</h2>
<p>break - немедленный выход из текущего цикла</p>
<p>continue - переход к следующей итерации</p>
<?php

?>