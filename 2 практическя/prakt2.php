<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Формула 1</p>
    
    <?=echo 'a=10'?>
    <?=echo 'b=20'?>
    <?=echo 'c=15'?>
    <?=echo 'd=30'?>
    <?php
    $a=10;
    $b=20;
    $c=15;
    $d=30;
    $result=($a/$c)*($b/$d)-(($a*$b-$c)/($c*$d));
    echo "$result";
    ?>
</body>
</html>