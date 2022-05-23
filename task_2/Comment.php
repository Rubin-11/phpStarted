<?php

class Comment
{
    private object $author ;
    private object $task;
    private string $text;

    function __construct(object $user, object $task, string $text) {
        $this->author  = $user;
        $this->task = $task;
        $this->text = $text;
    }
    function getComment() {
        return $arr = [$this->author, $this->task, $this->text];
    }
}