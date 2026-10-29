<h2>Задание 1</h2>
<?php
$mas = [[1,2,3,4],[1,2,3,4],[1,2,3,4]];
foreach($mas as $groupe){
    foreach($groupe as $num){
        echo $num . ' ';
    }
    echo'<br>';
}
?>
<h2>Задание 2</h2>
<?php
$mat = [];
$curnum = 10;
for ($i = 0; $i < 9; $i++){
    for ($j = 0; $j < 9; $j++){
        $mat[$i][$j] = $curnum * $curnum;
        $curnum++;
    }
}
echo  "<table border='1' style='border-collapse:  collapse; text-align: center;'>";
foreach($mat as $row){
    echo "<tr>";
    foreach($row as $value){
        echo "<td style='padding: 10px;'>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<h2>Задание 3</h2>
<?php

$matrix = [
    [14, 42, 7, 89],
    [3, 88, 91, 69],
    [44, 11, 67, 5],
    [22, 8, 42, 52],
    [25, 60, 12, 77]
];

$rows = count($matrix);
$cols = count($matrix[0]);

echo "<h3>Исходный массив:</h3>";
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
foreach ($matrix as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td style='padding: 10px;'>$value</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

$maxVal = $matrix[0][0];
$minVal = $matrix[0][0];
$maxRow = 0; $maxCol = 0;
$minRow = 0; $minCol = 0;

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        if ($matrix[$i][$j] > $maxVal) {
            $maxVal = $matrix[$i][$j];
            $maxRow = $i;
            $maxCol = $j;
        }
        if ($matrix[$i][$j] < $minVal) {
            $minVal = $matrix[$i][$j];
            $minRow = $i;
            $minCol = $j;
        }
    }
}
echo "<h3>Результаты:</h3>";
echo "<p><b>Максимум:</b> $maxVal (Индексы: строка $maxRow, столбец $maxCol)</p>";
echo "<p><b>Минимум:</b> $minVal (Индексы: строка $minRow, столбец $minCol)</p>";
?>
<h2>Задание 4</h2>
<form>
    <p>Введите число, не превышающее 100:</p>
    <input name="world">
    <input type="submit">
</form>
<?php
if(isset($_GET['world'])){
    $k = $_GET['world'];
    if ($k > 100){
        echo"число слишком большое";
    } else{
        
    }
}
?>