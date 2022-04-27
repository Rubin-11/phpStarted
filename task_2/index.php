<?php
$name = readline("Как вас зовут?\n");
$task[] = readline("Какая задача стоит перед вами сегодня?\n");
$timeTask[] = readline("Сколько примерно времени эта задача займет?");
$task[] = readline("Какая задача стоит перед вами сегодня?\n");
$timeTask[] = readline("Сколько примерно времени эта задача займет?");
$task[] = readline("Какая задача стоит перед вами сегодня?\n");
$timeTask[] = readline("Сколько примерно времени эта задача займет?");
$sumTime = $timeTask[0] + $timeTask[1] + $timeTask[2];
echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n -$task[0] ($timeTask[0]ч)\n -$task[1] ($timeTask[1]ч)\n -$task[2] ($timeTask[2]ч)\n Примерное выполнение плана = {$sumTime}ч";