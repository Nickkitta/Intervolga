<?php //Этот код предназначен для составдения таблицы из массива любой величины, с любым количеством предметов
//и студентов(с учетом, что исходный массив будет подобен этому по структуре).
$data = [
    ['Иванов', 'Математика', 5],
    ['Иванов', 'Математика', 4],
    ['Иванов', 'Математика', 5],
    ['Петров', 'Математика', 5],
    ['Сидоров', 'Физика', 4],
    ['Иванов', 'Физика', 4],
    ['Петров', 'ОБЖ', 4],
];
$schoolSubs = []; //Создаем массивы для хранения информации о предметах, студентах и их баллах
$students = [];
$points = [];

foreach ($data as $subArr) { //Заполняем массивы студентов и предметов
    $students[] = $subArr[0];
    $schoolSubs[] = $subArr[1];
}

$students = array_unique($students);//Убираем повторения и сортируем массивы со студентами и предметами
sort($students);
$schoolSubs = array_unique($schoolSubs);
sort($schoolSubs);