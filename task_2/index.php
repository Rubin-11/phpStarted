<?php
$wish = ["счастья", "здоровья", "терпения", "воображения"];
$epithet = [" крепкого", " бесконечного", " большого", " огромного", " великого"];

$name = readline('Введите имя именинника!!!');

$new_wish = [];
$new_epithet = [];

$combination_words = [];
$quantity = 2;

for ($i = 0; $i = count($wish); $i++) {
    $rand_wish = array_rand($wish);
    $new_wish[] = $wish[$rand_wish];
    unset($wish[$rand_wish]);
}

for ($i = 0; $i = count($epithet); $i++) {
    $rand_epithet = array_rand($epithet);
    $new_epithet[] = $epithet[$rand_epithet];
    unset($epithet[$rand_epithet]);
}

for ($i = 0; $i < $quantity; $i++) {
    $combination_words[$i] = "$new_epithet[$i] $new_wish[$i]";
}

echo 'Дорогой ' . $name . ', от всего сердца поздравляю тебя с днем рождения, желаю ' .
    implode(',', $combination_words) . " и$new_epithet[2] $new_wish[2]";
