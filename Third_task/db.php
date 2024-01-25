<?php
require_once("./config.php");

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);//Подключаемся к нашей БД
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}