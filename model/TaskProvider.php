<?php
require_once 'model/Task.php';
class TaskProvider
{
	private PDO $pdo;
	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function getUndoneList(): ?array
	{
		$statement = $this->pdo->query(
			'SELECT * FROM tasks WHERE description LIKE "%%"'
		);

		$i = 0;
		$task = [];

		while ($descriptionTask = $statement->fetch()) {
			$task[$i] = $descriptionTask['description'];
			$i++;
		}

		return $task ?: null;
	}

	public function addTask(Task $task): bool
	{
		$statement = $this->pdo->prepare(
			'INSERT INTO tasks (description, isDone) VALUES (:description, :isDone)'
		);
		return $statement->execute([
			'description' => $task->getDescription(),
			'isDone' => $task->isDont()
		]);
	}
}