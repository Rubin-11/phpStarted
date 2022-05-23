<?php
require_once "User.php";
require_once "Task.php";
require_once "Comment.php";
require_once "TaskService.php";

$user = new User('Сергей', 'sergey@yandex.ru', 35);
$task = new Task($user);
$comment = new Comment($user,$task,'Коментарий мой');

TaskService::addComment($task,$comment);

$task->setDescription("Спать");
$task->markAsDone();
print_r($task);
//var_dump($comment);