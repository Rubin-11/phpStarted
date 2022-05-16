<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Рагозин Сергей' => 3,
        'Хоритонов Илья' => 2,
        'Мишустин Сергей' => 4,
        'Шаихов Ильдар' => 5,

    ],
    'БАП20' => [
        'Приходько Кирилл' => 5,
        'Дураков Сергей' => 2,
        'Ошуков Кость' => 5,
        'Алимпиев Макс' => 2,
        'Кармазин Денис' => 3,
        'Антонов Антон' => 4
    ]
];

$estimation = 0;
$average_mark = [];
$students_on_deduction = [];
$students_on_deduction_group = [];

foreach ($students as $index_group => $group) {
    foreach ($group as $index_student => $student) {
        $estimation += $student;
        if ($student < 3) {
            $students_on_deduction[$index_group] = $index_student => [$student];
        }
    }
    $average_mark[$index_group] = $estimation / count($group);
    $estimation = 0;
}

if ($average_mark["ИТ20"] > $average_mark["БАП20"]) {
    echo 'У группы ' . array_fill_keys($average_mark) . ' выше средний бал и равен ' .
        $average_mark[array_fill_keys($average_mark)];
} else {
    echo 'У группы ' . array_key_last($average_mark) .  'выше средний бал и равен ' .
        $average_mark[array_key_last($average_mark)];
}

print_r($students_on_deduction);
//echo $average_mark[0];
//var_dump($average_mark);