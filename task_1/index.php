<?php
require_once 'Task.php';
require_once 'User.php';

$user = new User('Сергей', 'sergey@yandex.ru', 35);
$task = new Task($user);

$task->setDescription("Спать");
$task->markAsDone();
var_dump($task);