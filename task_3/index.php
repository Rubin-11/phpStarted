<?php
start:
$number = (int)readline("Введите положительное число");
if ($number === 0 || $number < 0 ) {
    goto start;
}
$finger = 1;
$bul = true;

for ($i = 1; $i < $number; $i++) {
    if ($finger === 1) {
        $finger += 1;
        $bul = true;
    } elseif ($finger === 5) {
        $finger -= 1;
        $bul = false;
    }
    elseif ($bul === true) {
        $finger += 1;
    } elseif ($bul === false) {
        $finger -= 1;
    }
}

echo "Палец под цифрой $finger";
