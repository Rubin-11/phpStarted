<?php
require_once 'model/UserProvider.php';
session_start();

$error = null;

if (isset($_GET['controller']) && $_GET['controller'] === 'security') {
    unset($_SESSION['username']);
}

if (isset($_POST['username'], $_POST['password'])) {
	['username' => $username, 'password' => $password] = $_POST;
	$userProvider = new UserProvider();
	$user = $userProvider->getByUsernameAndPassword($username, $password);
	if ($user === null) {
		$error = 'Пользователь с указанными учетными данными не найден';
	} else {
		$_SESSION['username'] = $user;
		header('Location: /');
	}
}

//if (isset($_SESSION['username'])) {
//	header('Location: /');
//}

require_once 'view/signin.php';
