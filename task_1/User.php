<?php
class User
{
    private string $userName;
    private string $email;
    private string $sex;
    private int $age;
    private bool $isActive = true;
    private DateTime $dateCreated;

    public function __construct(string $userName, string $email, ?int $age = null)
    {
        $this->userName = $userName;
        $this->email = $email;
        $this->age = $age;
        $this->dateCreated = new DateTime();
    }

    public function gerUserName(): string
    {
        return $this->userName ?? 'unknown';
    }
}
