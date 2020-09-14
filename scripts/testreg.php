
<?php

require('config.php');


if (isset($_POST['user_name']) && isset($_POST['user_age'])&& isset($_POST['user_sity'])&& isset($_POST['user_phone'])&& isset($_POST['user_email'])){

    // Переменные с формы
	// FIO
	$user_name = $_POST['user_name'];

	// age
	$user_age = $_POST['user_age'];

	// sity
	$user_sity = $_POST['user_sity'];

	// contact
	$user_phone = $_POST['user_phone'];
	$user_email = $_POST['user_email'];
    
    // Параметры для подключения
    $db_host = $config_db_host; 
    $db_user = $config_db_user; // Логин БД
    $db_password = $config_db_password; // Пароль БД
    $db_base = $config_db_base; // Имя БД
    $db_table = $config_db_table; // Имя Таблицы БД

    // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

    $result = $mysqli->query("INSERT INTO ".$db_table." (user_name, user_age, user_sity, user_phone, user_email, user_photo, id_portfolio) VALUES ('$user_name','$user_age','$user_sity','$user_phone','$user_email','C:\Server\data\htdocs\portfolio\img','1')");

    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }
}
?>