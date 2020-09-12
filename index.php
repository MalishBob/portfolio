<!DOCTYPE html>
<html>
<head>
	<title>Портфолио</title>
</head>
<body>
HELLO WORLD
<form action="" method="POST">

	<!-- ФИО  -->
	<p>
		<label>Введите Ваше имя:</label><br>
		<input type="text" id="" name="user_name" placeholder="Иванов Иван Иванович">
	</p>
	<!-- Возраст -->
	<p>
		<label>Укажите дату рождения:</label><br>
		<input type="date" name="date"/><br> 
	</p>

	<!-- Город -->
	<p>
		<label>Укажите город:</label><br>
		<input type="text" name="user_sity" placeholder="Samara">
	</p>

	<!-- Контакты -->
	<p>
		<label>Напишите свой номер:</label><br>
		<input type="text" id="" name="user_phone" placeholder="+7 (999) 99 99 999"><br> 
		<label>Напишите свой email:</label><br>
		<input type="mail" id="" name="user_email" placeholder="example@mail.ru">
	</p>
<br>
	<button type="submit" >Отправить форму</button>
</form>

<?php

// FIO
$name = $_POST['user_name'];

// age
$date = $_POST['date'];

// sity
$sity = $_POST['user_sity'];

// contact
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];

?>
</body>
</html>