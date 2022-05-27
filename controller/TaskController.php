<?php
require_once 'model/User.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
session_start();

$userName = null;

if (isset($_SESSION['username'])) {
	$userName = $_SESSION['username']->getUsername();
} else {
	header('Location: /');
	die();
}
$taskProvider = new TaskProvider();
if (isset($_GET['action']) && $_GET['action'] === 'add') {
	$taskProvider->addTask(new Task($_POST['task']));
	header('Location: /?controller=tasks');
//	var_dump($_GET);
	die();
}


//$taskProvider->addTask(new Task('Погулять'));
//$taskProvider->addTask(new Task('Убраться дома'));
$tasks = $taskProvider->getUndoneList();

require_once 'view/taskList.php';