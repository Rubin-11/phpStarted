<?php

class Task
{
    private string $description; // Описание
    private DateTime $dateCreated; // Дата создания
    private DateTime $dateUpdated; // Дата обновления
    private DateTime $dateDone; // Датат выполнения
    private int $priority; // Приоритет
    private bool $isDone = false; // Сделан или нет
    private User $user;
    private array $comments = [];

    function __construct(User $user)
    {
        $this->user = $user;
        $this->dateCreated = new DateTime();
    }

    public function getComments(): array
    {
        return $this->comments;
    }
    public function setComments(string $comments, User $user): void
    {
        $this->comments[$user] = [$comments];
    }

    function getUser(): object {
        return $this->user;
    }

    function getDateCreated():DateTime {
        return $this->dateCreated;
    }

    function setPriority(int $priority) {
        $this->priority = $priority;
    }

    function getPriority(): int {
        return $this->priority;
    }

    function setDescription(string $description) {
        $this->description = $description;
        $this->dateUpdated = new DateTime();
    }

    function getDateUpdate():DateTime {
        return $this->dateUpdated;
    }

    function getDescription(): string {
        return $this->description;
    }

    function markAsDone() {
        $this->isDone = true;
        $this->dateDone = new DateTime();
        $this->dateUpdated = new DateTime();
    }

    function getIsDone(): bool {
        return $this->isDone;
    }

    function getDateDone(): DateTime {
        return $this->dateDone;
    }
}