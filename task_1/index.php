<?php
do {
    $question = readline("В каком году прощло крещение Руси?\n- 810?\n- 988?\n- 740?\n");
    if ($question == 810) {
        echo "Вы ввели не верный ответ!!!";
        break;
    } elseif ($question == 740) {
        echo  "Вы ввели не верный ответ!!!";
        break;
    } elseif ($question == 988) {
        echo  "Вы ответили верно!!!";
        break;
    } else {
        echo "Ввели ответ не из вариантов!!!\n";
    }
} while (true);
