<?php
$name = readline("Как вас зовут?\n");
$quantityTask = readline("Сколько задачь вы планируете записать?\n");
$task = "";
$sum = 0;

for ($i = 1; $i <= $quantityTask; $i++) {
    $task .= readline("Какая задача стоит перед вами сегодня?\n");
    $timeTask = readline("Сколько примерно времени эта задача займет?");
    $task .= " " . $timeTask . "ч";
    $task .= "\n";
    $sum += $timeTask;
}

echo "$name, сегодня у вас запланировано" .
      $quantityTask .
      "приоритетных задачи на день:\n" .
      $task . "Примерное выполнение плана = $sum часов";