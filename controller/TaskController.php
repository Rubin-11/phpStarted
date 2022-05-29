<?php
require_once 'model/User.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
$pdo = require 'db.php';
session_start();

$userName = null;

if (isset($_SESSION['username'])) {
	$userName = $_SESSION['username']->getUsername();
} else {
	header('Location: /');
	die();
}
$taskProvider = new TaskProvider($pdo);
if (isset($_GET['action']) && $_GET['action'] === 'add') {
	$taskProvider->addTask(new Task($_POST['task']));
	header('Location: /?controller=tasks');
	die();
}

$tasks = $taskProvider->getUndoneList();

require_once 'view/taskList.php';