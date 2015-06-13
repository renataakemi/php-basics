<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Sent Data</title>

<link rel="stylesheet" href="css/style.css">

</head>
<body>

<h1>Sent Data</h1>

<p>
	Data
	<br>
	<?= $_POST['name'] ?>
</p>

<p>
	Data
	<br>
	<?= $_POST['email'] ?>
</p>

<p>
	Data
	<pre><?= $_POST['message'] ?></pre>
</p>

<?php var_dump( mail("edysegura@gmail.com", 'Test', 'Hi there! This is a test!') ); ?>

</body>
</html>