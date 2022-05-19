<?php
$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

function search(string $searchText, array $arrayBox): bool
{
    foreach ($arrayBox as $element) {
        if ($searchText == $element) {
            return true;
        } elseif (is_array($element)) {
            $result = search($searchText,$element);
            if ($result != false) {
                return true;
            }
        }
    }
    return false;
}

$filePath = search('Ключ',$box);

if ($filePath === true) {
    echo "Есть такой элемент в массиве!!!";
} elseif ($filePath === false) {
    echo "Нет такого элемента в массиве!!!";
}

//echo gettype($filePath);
//print_r($filePath);

