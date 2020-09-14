<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Портфолио</title>
</head>
<body>

<?php

require('scripts/config.php');

// Параметры для подключения
$db_host = $config_db_host; 
$db_user = $config_db_user; // Логин БД
$db_password = $config_db_password; // Пароль БД
$db_base = $config_db_base; // Имя БД
$db_table = $config_db_table; // Имя Таблицы БД

// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
$mysqli -> set_charset("utf8");

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$res = $mysqli->query("SELECT * FROM users");

echo "Вывод базы данных:\n<br>";
for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo " id = " . $row['id'] . "\n<br>";
    echo " user_name = " . $row['user_name'] . "\n<br>";
}


?>
</body>
</html>