<?php

class Task
{
    private bool $isDont;
    private string $description;

	public function __construct(string $description, bool $isDont = false)
	{
		$this->isDont = $isDont;
		$this->description = $description;
	}

	public function isDont(): bool
	{
		return $this->isDont;
	}

	public function setIsDont(bool $isDont): void
	{
		$this->isDont = $isDont;
	}

	public function getDescription(): string
	{
		return $this->description;
	}

	public function setDescription(string $description): void
	{
		$this->description = $description;
	}
}