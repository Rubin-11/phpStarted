<?php
require_once "Comment.php";
//require_once "Task.php";
class TaskService
{
    private object $comment;
    public static function addComment(object $user,object $task, string $text):void {
        self::$coment = new Comment();
//        $comment = new Comment();
    }
}