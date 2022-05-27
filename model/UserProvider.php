<?php

require_once 'User.php';

class UserProvider
{
	private array $accounts = [
		'user' => '147'
	];

	public function getByUsernameAndPassword(string $userName, string $password): ?User
	{
		$expectedPassword = $this->accounts[$userName] ?? null;
		if ($expectedPassword === $password) {
			return new User($userName);
		}
		return null;
	}
}