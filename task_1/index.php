<?php
$array_1 = [1,2,3,1,4,6,8,7,5,5,3];
$array_2 = [2,5,6,8,7,4,6,4,7,2,4];

$numberArray = readline("Введите номер индекса массива от 0 до 10 ");
if ($numberArray >= 0 && $numberArray <= 10) {
    $sum = $array_1[$numberArray] * $array_2[$numberArray];
    print_r($sum);
} else {
    echo "Ввели не правильное значение!!!";
}