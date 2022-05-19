<?php

(int)$arrayNumber = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function sortArray(array $arrayNumber): array
{
    $min = min($arrayNumber) . PHP_EOL;
    $max = max($arrayNumber) . PHP_EOL;
    $average = round(array_sum($arrayNumber) / count($arrayNumber),1);
    return [
        "Минимальное значение массива" => $min,
        "Максимальное значение массива" => $max,
        "среднее арифметическое всех чисел массива" => $average
    ];
}

print_r(sortArray($arrayNumber));