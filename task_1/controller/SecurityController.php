<?php
//require_once 'cntroller/HomeController';
require_once 'model/UserProvider.php';
$error = null;
var_dump($_GET);
if (isset($_POST['username'], $_POST['password'])) {
	['username' => $username, 'password' => $password] = $_POST;
	$userProvider = new UserProvider();
	$user = $userProvider->getByUsernameAndPassword($username, $password);
	if ($user === null) {
		$error = 'Пользователь с указанными учетными данными не найден';
	} else {
		$_SESSION['username'] = $user;
	}
}
if (isset($_SESSION['username'])) {
	header('Location: /');
}
require_once 'view/signin.php';
