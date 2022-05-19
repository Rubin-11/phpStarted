<?php
$arrayNumber = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$parityCheck = array_map(function (int $number): string {
    if ($number % 2 == 0) {
        $arrayText = "$number четное\n";
    } else {
        $arrayText = "$number не четное\n";
    }

    return $arrayText;
}, $arrayNumber);

print_r($parityCheck);
