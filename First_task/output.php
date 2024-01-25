<?php
require_once('./preparation.php');

echo "<table><tr><td></td>";//Выводим первую пустую ячейку а затем все предметы, отсортированные
foreach ($schoolSubs as $value) {
    echo "<td>$value</td>";
}
echo "</tr>";

foreach ($students as $student) {//Выводим сначала студента, а потом все его имеющиеся баллы, которые больше 0
    echo "<tr>";
    echo "<td>$student</td>";
    foreach ($schoolSubs as $sub) {
        $point = 0;
        foreach ($data as $subArr) {
            if ($student === $subArr[0] and $sub === $subArr[1]) $point += $subArr[2];
        }
        if ($point > 0) echo "<td>$point</td>";
        else echo "<td></td>";
    }
    echo "</tr>";
}

echo "</table>";