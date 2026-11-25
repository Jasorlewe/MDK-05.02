<h2>Задание 1</h2>
<?php
$nums = [2, 43, 0, 5, 77, 8];
function beforeNull($a){
    return $a <= 0;
}
var_dump(array_filter($nums, 'beforeNull'));
?>