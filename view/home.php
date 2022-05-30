<head>
	<meta charset="UTF-8">
	<title>Главная</title>
</head>
<body>
<h1><?= $pageHeader ?></h1>
<?php if ($userName !== null) : ?>
	<p>Рады вас приветствовать, "<?= $userName ?>"</p>
	<menu>
	<li><a href="?controller=security">Выйти</a></li>
	<li><a href="?controller=tasks">Задачи</a></li>
<?php else: ?>
	<li><a href="?controller=security">Войти</a></li>
	</menu>
<?php endif; ?>
</body>
