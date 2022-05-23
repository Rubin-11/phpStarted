<?php
require_once "User.php";
require_once "Task.php";
require_once "Comment.php";

$user = new User('Сергей', 'sergey@yandex.ru', 35);
$task = new Task($user->gerUserName());
$comment = new Comment($user,$task,'Коментарий');

//$taskService = new TaskService();
TaskService::addComment($user,$task,"Коментарий");

$task->setDescription("Спать");
$task->markAsDone();
var_dump($comment);