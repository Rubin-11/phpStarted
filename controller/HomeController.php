<?php
require_once 'model/User.php';
session_start();
$pageHeader = 'Добро пожаловать';
$userName = null;

if (isset($_SESSION['username'])) {
	$userName = $_SESSION['username']->getUsername();
}

require_once 'view/home.php';