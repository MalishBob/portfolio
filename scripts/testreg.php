<?php

require('localtestreg.php')


if (isset($_POST['user_name']) && isset($_POST['date'])&& isset($_POST['user_sity'])&& isset($_POST['user_phone'])&& isset($_POST['user_email'])){

    // Переменные с формы
	// FIO
	$name = $_POST['user_name'];

	// age
	$age = $_POST['user_age'];

	// sity
	$sity = $_POST['user_sity'];

	// contact
	$phone = $_POST['user_phone'];
	$email = $_POST['user_email'];
    
    // Параметры для подключения
    $db_host = "u0676590_portf"; 
    $db_user = "u0676590_maksim"; // Логин БД
    $db_password = "zcuRZPH3sH"; // Пароль БД
    $db_base = 'mybase'; // Имя БД
    $db_table = "mytable"; // Имя Таблицы БД
    
    // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    
    $result = $mysqli->query("INSERT INTO ".$db_table." (name,user_age,sity,phone,email) VALUES ('$name','$user_age','$sity','$phone','$email')");
    
    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }
}
?>