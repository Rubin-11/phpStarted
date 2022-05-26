<?php
require_once 'model/User.php';

$pageHeader = 'Добро пожаловать';

$userName = null;
if (isset($_SESSION['username'])) {
	$userName = $_SESSION['username']->getUsername();
}

require_once 'view/home.php';