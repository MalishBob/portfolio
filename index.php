<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Портфолио</title>
</head>
<body>
	HELLO WORLD
	<form enctype="multipart/form-data" action="scripts/testreg.php" method="POST">

		<!-- Загрузка файла -->
		<p>Загрузите ваши фотографии на сервер</p>
		<p><input type="file" name="user_photo" multiple accept="image/*,image/jpeg,image/png"></p>

		<!-- ФИО  -->
		<p>
			<label>Введите Ваше имя:</label><br>
			<input type="text" id="" name="user_name" placeholder="Иванов Иван Иванович">
		</p>
		<!-- Возраст -->
		<p>
			<label>Укажите дату рождения:</label><br>
			<input type="date" name="user_age"/><br> 
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

		<label>Номер портфолио:</label><br>
		<input type="text" id="" name="id_portfolio" placeholder="0"><br> 
		<br>
		<button type="submit" >Отправить форму</button>

	</form>
	<a href="showportfolio.php">Посмотреть готовые портфолио.</a>
<footer>
	<script src="/scripts/scripts.js"></script>
</footer>
</body>
</html>