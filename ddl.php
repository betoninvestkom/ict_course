<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require('connection.php');
	?>
	<form method="POST">
		<h2>Записи из таблицы "users"</h2>
		<button type="submit" name="display_all">Вывести все записи</button>
	</form>
	<?php
    if(isset($_POST['display_all'])){
    require('query.php');}
  ?>
</body>
</html>