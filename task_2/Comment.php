<?php

class Comment
{
    private User $user;
    private Task $task;
    private string $text;

    function __construct(User $user, Task $task, string $text) {
        $this->user = $user;
        $this->task = $task;
        $this->text = $text;
    }

}