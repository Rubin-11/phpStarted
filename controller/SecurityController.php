<?php

session_start();
$pdo = require 'db.php';
$error = null;

if (isset($_GET['controller']) && $_GET['controller'] === 'security') {
    unset($_SESSION['username']);
}

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
	$userProvider = new UserProvider($pdo);
	$user = $userProvider->getByUsernameAndPassword($username, $password);

	if ($user === null) {
		$error = 'Пользователь с указанными учетными данными не найден';
	} else {
		$_SESSION['username'] = $user;
		header('Location: /');
	}
}

require_once 'view/signin.php';
