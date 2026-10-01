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