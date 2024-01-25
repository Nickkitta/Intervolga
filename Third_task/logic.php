<?php
session_start();

require_once("./db.php");

$stmt = $db->query("SELECT `id` FROM comms");//Собираем все id в массив

$id = [];
while ($row = $stmt->fetch())
{
$id[] = $row[0];
}

$len = count($id);//Находим количество записей в БД через подсчет id

echo "<ul>";
    for ($i = 0; $i < $len; $i++) {
    $stmt = $db->prepare("SELECT `text` FROM comms WHERE `id` = ?");//Поочередно для каждого id находим и выводим текст комментария
    $stmt->execute([$id[$i]]);
    while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
    echo "<li>" . $row->text . "</li>";
    }
    }
    echo "</ul>";

if (isset($_POST['comment'])) {//Если у нас передается текст из формы, то принимаем его. Также смотрим, чтобы не было повторения
//тем самым, мы можем спокойно перезагружать страницу сколько угодно раз
if (!isset($_SESSION['comment']) or ($_SESSION['comment'] !== $_POST['comment'])) {
$_SESSION['comment'] = $_POST['comment'];
$new_comment = [
':comm' => $_POST['comment']
];
$insert = $db->prepare("INSERT INTO comms (`text`) VALUES (:comm)");
$insert->execute($new_comment);
}
}

$db = null;