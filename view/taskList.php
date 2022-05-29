<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<div>
	<h2>Список задач</h2>
	<menu>
		<a href="?controller=security">Выйти</a>
		<a href="/">Главная</a>
	</menu>
	<form action="/?controller=tasks&action=add" method="post">
		<input type="text" name="task" placeholder="Добавьте задачу">
		<input type="submit" value="Добавить">
	</form>
	<ol>
		<?php foreach ($tasks as $task): ?>
			<li><?= $task->getDescription() ?> [false]</li>
		<?php endforeach; ?>
	</ol>
</div>
</body>
</html>
