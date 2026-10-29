<?php
sayHello('Петя');
function sayHello($name){ //желательно распологать все функции сверху
    echo"<p>Привет, $name</p>";

    }
sayHello('Вася');
sayHello('Коля');
sayHello('Иван');
?>