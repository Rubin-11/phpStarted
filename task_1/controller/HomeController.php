<?php
require_once 'model/User.php';

$pageHeader = 'Добро пожаловать';

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
	unset($_SESSION['username']);
}
$userName = null;
if (isset($_SESSION['username'])) {
	$userName = $_SESSION['username']->getUsername();
}
//elseif (isset($_REQUEST['username']) && !empty($_REQUEST['username'])) {
//	$userName = $_REQUEST['username'];
//	$_SESSION['username'] = $userName;
//}

require_once 'view/home.php';