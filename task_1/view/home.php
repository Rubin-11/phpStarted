<head>
	<meta charset="UTF-8">
	<title>Главная</title>
</head>
<body>
<h1><?= $pageHeader ?></h1>
<?php if ($userName !== null) : ?>
	<p>Рады вас приветствовать, "<?= $userName ?>"</p>
	<a href="?action=logout">Выйти</a>
<?php else: ?>
	<a href="?controller=security">Войти</a>
<?php endif; ?>
</body>
