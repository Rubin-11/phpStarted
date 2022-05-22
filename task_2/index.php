<?php
require_once "User.php";
require_once "Task.php";

$user = new User('Сергей', 'sergey@yandex.ru', 35);
$task = new Task($user->gerUserName());

$taskService = new TaskService($user,$task,"Коментарий");
$taskService->

$task->setDescription("Спать");
$task->markAsDone();
var_dump($task);