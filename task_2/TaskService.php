<?php

class TaskService
{
    public static function addComment(Task $task, Comment $text):void {
        $taskComments = $task->getTaskComments();
        $taskComments[] = $text->getComment();
        $task->setTaskComments($taskComments);
    }
}